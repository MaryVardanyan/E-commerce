<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;
use Cart;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Sale;

class CategoryComponent extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    
    public $sorting;
    public $pagesize;
    public $category_slug;
    public $scategory_slug;
    public $min_price;
    public $max_price;

    public function mount($category_slug, $scategory_slug=null)
    {
        $this->sorting = 'default';
        $this->pagesize = 12;
        $this->min_price = 1;
        $this->max_price = 5000;
        $this->category_slug = $category_slug;
        $this->scategory_slug = $scategory_slug;
    }

    public function updatedMinPrice($value)
    {
        $this->resetPage();
    }

    public function updatedMaxPrice($value)
    {
        $this->resetPage();
    }

    public function store($product_id, $product_name, $product_price)
    {
        Cart::instance('cart')->add($product_id, $product_name, 1, $product_price)
            ->associate('App\Models\Product');
        session()->flash('success_message', 'Товар добавлен в корзину');
        return redirect()->route('product.cart');
    }

    public function addToWishlist($product_id, $product_name, $product_price)
    {
        Cart::instance('wishlist')->add($product_id, $product_name, 1, $product_price)
            ->associate('App\Models\Product');
        $this->emitTo('wishlist-count-component', 'refreshComponent');
    }
    
    public function removeFromWishlist($product_id)
    {
        foreach(Cart::instance('wishlist')->content() as $witem) {
            if($witem->id == $product_id) {
                Cart::instance('wishlist')->remove($witem->rowId);
                $this->emitTo('wishlist-count-component', 'refreshComponent');
                return;
            }
        }
    }

    public function render()
    {
        $category_id = null;
        $category_name = "";
        $filter = "";
        
        if($this->scategory_slug) {
            $scategory = Subcategory::where('slug', $this->scategory_slug)->first();
            $category_id = $scategory->id;
            $category_name = $scategory->name;
            $filter = "sub";
        } else {
            $category = Category::where('slug', $this->category_slug)->first();
            $category_id = $category->id;
            $category_name = $category->name;
            $filter = "";
        }

        $query = Product::where($filter.'category_id', $category_id)
            ->whereBetween('regular_price', [$this->min_price, $this->max_price]);

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
        $categories = Category::all();
        $sale = Sale::find(1);

        return view('livewire.category-component', [
            'products' => $products,
            'categories' => $categories,
            'category_name' => $category_name,
            'sale' => $sale
        ])->layout('layouts.base');
    }
}