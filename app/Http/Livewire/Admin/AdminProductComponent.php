<?php

namespace App\Http\Livewire\Admin;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class AdminProductComponent extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public function deleteProduct($id){
        $product = Product::find($id);
        // if($product->image){
        //    unlink('img/products'.'/'.$product->image);
        // }
        // if($product->images){
        //     $images = explode(",", $product->images);
        //     foreach($images as $image){
        //         unlink('img/products'.'/'.$image);
        //     }
        // }
        $product->delete();
        session()->flash('message', 'Товар успешно удален!');
    }
    public function render()
    {
        $products = Product::paginate(10);
        return view('livewire.admin.admin-product-component', ['products' => $products])->layout('layouts.base');
    }
}
