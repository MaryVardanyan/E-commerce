<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Product;
use Livewire\Component;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Livewire\WithFileUploads;

class AdminEditProductComponent extends Component
{
    use WithFileUploads;
    public $name;
    public $slug;
    public $description;
    public $regular_price;
    public $sale_price;
    public $SKU;
    public $stock_status;
    public $featured;
    public $quantity;
    public $expiration_date;
    public $storage_conditions;
    public $squirrels;
    public $fats;
    public $carbohydrates;
    public $calories;
    public $image;
    public $category_id;
    public $newimage;
    public $product_id;
    public $scategory_id;

    public function mount($product_slug)
    {
        $product = Product::where('slug', $product_slug)->first();
        $this->name = $product->name;
        $this->slug = $product->slug;
        $this->description = $product->description;
        $this->regular_price = $product->regular_price;
        $this->sale_price = $product->sale_price;
        $this->SKU = $product->SKU;
        $this->stock_status = $product->stock_status;
        $this->featured = $product->featured;
        $this->quantity = $product->quantity;
        $this->expiration_date = $product->expiration_date;
        $this->storage_conditions = $product->storage_conditions;
        $this->squirrels = $product->squirrels;
        $this->fats = $product->fats;
        $this->carbohydrates = $product->carbohydrates;
        $this->calories = $product->calories;
        $this->image = $product->image;
        $this->category_id = $product->category_id;
        $this->scategory_id = $product->subcategory_id;
        $this->product_id = $product->id;
    }
    public function generateSlug(){
        $this->slug = Str::slug($this->name, '-');
    }
    public function updated($fields){
        $this->validateOnly($fields, [
            'name' => 'required',
            'slug' => 'required|unique:categories',
            'description' => 'required',
            'regular_price' => 'required|numeric',
            'sale_price' => 'nullable|numeric',
            'SKU' => 'required',
            'stock_status' => 'required',
            'quantity' => 'required|numeric',
            'newimage' => 'nullable|image|mimes:jpeg,png',
            'category_id' => 'required'

        ], [
            'name.required' => 'Поле "Название" обязательно для заполнения',
            'slug.required' => 'Поле "Slug" обязательно для заполнения',
            'slug.unique' => 'Такой Slug уже существует',
            'description.required' => 'Поле "Описание" обязательно для заполнения',
            'regular_price.required' => 'Поле "Цена" обязательно для заполнения',
            'regular_price.numeric' => 'Поле "Цена" должно быть числовым',
            'sale_price.numeric' => 'Поле "Цена по акции" должно быть числовым',
            'SKU.required' => 'Поле "SKU" обязательно для заполнения',
            'stock_status.required' => 'Поле "Склад" обязательно для заполнения',
            'quantity.required' => 'Поле "Количество" обязательно для заполнения',
            'quantity.numeric' => 'Поле "Количество" должно быть числовым',
            'newimage.mimes' => 'Изображение должно быть в формате JPEG или PNG',
            'category_id.required' => 'Поле "Категория" обязательно для заполнения'
        ]);

    }
    public function updateProduct()
    {
        $this->validate([
            'name' => 'required',
            'slug' => 'required|unique:categories',
            'description' => 'required',
            'regular_price' => 'required|numeric',
            'sale_price' => 'nullable|numeric',
            'SKU' => 'required',
            'stock_status' => 'required',
            'quantity' => 'required|numeric',
            'newimage' => 'nullable|image|mimes:jpeg,png',
            'category_id' => 'required'
        ], [
            'name.required' => 'Поле "Название" обязательно для заполнения',
            'slug.required' => 'Поле "Slug" обязательно для заполнения',
            'slug.unique' => 'Такой Slug уже существует',
            'description.required' => 'Поле "Описание" обязательно для заполнения',
            'regular_price.required' => 'Поле "Цена" обязательно для заполнения',
            'regular_price.numeric' => 'Поле "Цена" должно быть числовым',
            'sale_price.numeric' => 'Поле "Цена по акции" должно быть числовым',
            'SKU.required' => 'Поле "SKU" обязательно для заполнения',
            'stock_status.required' => 'Поле "Склад" обязательно для заполнения',
            'quantity.required' => 'Поле "Количество" обязательно для заполнения',
            'quantity.numeric' => 'Поле "Количество" должно быть числовым',
            'newimage.required' => 'Изображение товара обязательно для загрузки',
            'newimage.mimes' => 'Изображение должно быть в формате JPEG или PNG',
            'category_id.required' => 'Поле "Категория" обязательно для заполнения'
        ]);
        $product = Product::find($this->product_id);
        $product->name = $this->name;
        $product->slug = $this->slug;
        $product->description = $this->description;
        $product->regular_price = $this->regular_price;
        $product->sale_price = $this->sale_price;
        $product->SKU = $this->SKU;
        $product->stock_status = $this->stock_status;
        $product->featured = $this->featured;
        $product->quantity = $this->quantity;
        $product->expiration_date = $this->expiration_date;
        $product->storage_conditions = $this->storage_conditions;
        $product->squirrels = $this->squirrels;
        $product->fats = $this->fats;
        $product->carbohydrates = $this->carbohydrates;
        $product->calories = $this->calories;
        if($this->newimage)
        {
            $imageName = Carbon::now()->timestamp. '.' . $this->newimage->extension();
            $this->newimage->storeAs('products', $imageName, 'local');
            $product->image = 'img/products/' . $imageName;
        }
        

        $product->category_id = $this->category_id;
        if($this->scategory_id){
            $product->subcategory_id = $this->scategory_id;
        }
        
        $product->save();
        session()->flash('message', 'Товар успешно изменен!');
    }

    public function changeSubcategory(){
        $this->scategory_id = 0;
    }

    public function render()
    {
        $categories = Category::all();
        $scategories = Subcategory::where('category_id', $this->category_id)->get();
        return view('livewire.admin.admin-edit-product-component', ['categories'=>$categories, 'scategories'=>$scategories])->layout('layouts.base');
    }
}
