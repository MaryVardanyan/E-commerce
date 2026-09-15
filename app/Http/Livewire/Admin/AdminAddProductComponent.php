<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Product;
use Livewire\Component;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Livewire\WithFileUploads;

class AdminAddProductComponent extends Component
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
    public $scategory_id;

    public function mount()
    {
        $this->stock_status = 'instock';
        $this->featured = 0;
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
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
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
            'image.required' => 'Изображение товара обязательно для загрузки',
            'image.image' => 'Файл должен быть изображением',
            'image.mimes' => 'Допустимые форматы: jpeg, png, jpg',
            'image.max' => 'Максимальный размер файла - 2MB',
            'category_id.required' => 'Поле "Категория" обязательно для заполнения'
        ]);

    }
    public function addProduct(){
        $this->validate([
            'name' => 'required',
            'slug' => 'required|unique:categories',
            'description' => 'required',
            'regular_price' => 'required|numeric',
            'sale_price' => 'nullable|numeric',
            'SKU' => 'required',
            'stock_status' => 'required',
            'quantity' => 'required|numeric',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
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
            'image.required' => 'Изображение обязательно',
            'image.image' => 'Файл должен быть изображением',
            'image.mimes' => 'Допустимы только JPG, PNG или JPEG',
            'image.max' => 'Максимальный размер файла 2MB',
            'category_id.required' => 'Поле "Категория" обязательно для заполнения'
        ]);
        try {
            $product = new Product();
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
            $imageName = Carbon::now()->timestamp. '.' . $this->image->extension();
            $this->image->storeAs('products', $imageName, 'local');
            $product->image = 'img/products/' . $imageName;


            $product->category_id = $this->category_id;
            if($this->scategory_id){
                $product->subcategory_id = $this->scategory_id;
            }
            $product->save();
            session()->flash('message', 'Товар успешно добавлен!');
        } catch (\Exception $e) {
            session()->flash('error', 'Произошла ошибка: ' . $e->getMessage());
        }
    }

    public function changeSubcategory(){
        $this->scategory_id = 0;
    }

    public function render()
    {
        $categories = Category::all();
        $scategories = Subcategory::where('category_id', $this->category_id)->get();
        return view('livewire.admin.admin-add-product-component', ['categories'=>$categories, 'scategories'=>$scategories])->layout('layouts.base');
    }
}
