<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;
use Cart;
use App\Models\Sale;
use App\Models\Category;

class SearchComponent extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $sorting;
    public $pagesize;

    public $search;
    public $product_cat;
    public $product_cat_id;
    public $min_price;
    public $max_price;

    public function mount()
    {
        $this->sorting = 'default';
        $this->pagesize = 12;
        $this->min_price = 1;
        $this->max_price = 5000;
        $this->fill(request()->only('search', 'product_cat', 'product_cat_id'));
        
        if (Auth::check()) {
            Cart::instance('wishlist')->restore(Auth::id());
        } else {
            Cart::instance('wishlist')->restore(request()->ip());
        }
    }

    public function addToWishlist($product_id, $product_name, $product_price)
    {
        try {
            Cart::instance('wishlist')->add($product_id, $product_name, 1, $product_price)
                ->associate('App\Models\Product');
            
            if (Auth::check()) {
                Cart::instance('wishlist')->store(Auth::id());
            } else {
                Cart::instance('wishlist')->store(request()->ip());
            }
            
            $this->emitTo('wishlist-count-component', 'refreshComponent');
        } catch (\Exception $e) {
            $this->dispatchBrowserEvent('error', ['message' => 'Ошибка при добавлении в избранное']);
        }
    }

    public function removeFromWishlist($product_id)
    {
        try {
            foreach(Cart::instance('wishlist')->content() as $witem) {
                if($witem->id == $product_id) {
                    Cart::instance('wishlist')->remove($witem->rowId);
                    
                    if (Auth::check()) {
                        Cart::instance('wishlist')->store(Auth::id());
                    } else {
                        Cart::instance('wishlist')->store(request()->ip());
                    }
                    
                    $this->emitTo('wishlist-count-component', 'refreshComponent');
                    return;
                }
            }
        } catch (\Exception $e) {
            $this->dispatchBrowserEvent('error', ['message' => 'Ошибка при удалении из избранного']);
        }
    }


    public function render()
    {
        $query = Product::query()
            ->where('name', 'like', '%'.$this->search.'%')
            ->whereBetween('regular_price', [$this->min_price, $this->max_price]);

        if ($this->product_cat_id) {
            $query->where('category_id', 'like', $this->product_cat_id.'%');
        }

        switch ($this->sorting) {
            case 'date':
                $query->orderBy('created_at', 'DESC');
                break;
            case 'price':
                $query->orderBy('regular_price', 'ASC');
                break;
            case 'price-desc':
                $query->orderBy('regular_price', 'DESC');
                break;
        }

        $products = $query->paginate($this->pagesize);
        $sale = Sale::find(1);
        $categories = Category::all();

        return view('livewire.search-component', [
            'products' => $products,
            'categories' => $categories,
            'sale' => $sale
        ])->layout('layouts.base');
    }
}