<div>
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6 admin_name_category">
                                Добавить новый товар
                            </div>
                            <div class="col-md-6">
                                <a href="{{route('admin.products')}}" class="btn btn-success pull-right">Все товары</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                    @if (Session::has('message'))
                        <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                    @endif
                        <form class="form-horizontal flex_column_category" enctype="multipart/form-data" wire:submit.prevent="addProduct">
                            <div class="form-group">
                                <label class="col-md-4 control-label">Название</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Название" class="form-control input-md" wire:model="name" wire:keyup="generateSlug" />
                                    @error('name') <p class="text-danger">{{$message}}</p>@enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Slug</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Slug" class="form-control input-md" wire:model="slug" />
                                    @error('slug') <p class="text-danger">{{$message}}</p>@enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Описание</label>
                                <div class="col-md-4">
                                    <textarea class="form-control" placeholder="Описание" wire:model="description" ></textarea>
                                    @error('description') <p class="text-danger">{{$message}}</p>@enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Цена</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Цена" class="form-control input-md" wire:model="regular_price" />
                                    @error('regular_price') <p class="text-danger">{{$message}}</p>@enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Скидочная цена</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Скидочная цена" class="form-control input-md" wire:model="sale_price" />
                                    @error('sale_price') <p class="text-danger">{{$message}}</p>@enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">SKU</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="SKU" class="form-control input-md" wire:model="SKU" />
                                    @error('SKU') <p class="text-danger">{{$message}}</p>@enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Склад</label>
                                <div class="col-md-4">
                                    <select class="form-control" wire:model="stock_status">
                                        <option value="instock">есть на складе</option>
                                        <option value="outofstock">нет на складе</option>
                                    </select>
                                    @error('stock_status') <p class="text-danger">{{$message}}</p>@enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Рекомендуемый</label>
                                <div class="col-md-4">
                                    <select class="form-control" wire:model="featured">
                                        <option value="0">Нет</option>
                                        <option value="1">Да</option>
                                    </select>
                                    @error('featured') <p class="text-danger">{{$message}}</p>@enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Количество</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Количество" class="form-control input-md" wire:model="quantity" />
                                    @error('quantity') <p class="text-danger">{{$message}}</p>@enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Фото</label>
                                <div class="col-md-4">
                                <input type="file" wire:model="image" accept="image/jpeg,image/png,image/jpg">
                                @error('image') <p class="text-danger">{{ $message }}</p> @enderror
                                    @if($image)
                                    <img src="{{$image->temporaryUrl()}}" width="120" />
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Категория</label>
                                <div class="col-md-4">
                                    <select class="form-control" wire:model="category_id" wire:change="changeSubcategory">
                                        <option value="">Выберите категорию</option>
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('category_id') <p class="text-danger">{{$message}}</p>@enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Подкатегория</label>
                                <div class="col-md-4">
                                    <select class="form-control" wire:model="scategory_id">
                                        <option value="">Выберите подкатегорию</option>
                                        @foreach($scategories as $scategory)
                                            <option value="{{$scategory->id}}">{{$scategory->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('scategory_id') <p class="text-danger">{{$message}}</p>@enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Срок годности</label>
                                <div class="col-md-4">
                                    <textarea class="form-control" placeholder="Срок годности" wire:model="expiration_date" ></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Условия хранения</label>
                                <div class="col-md-4">
                                    <textarea class="form-control" placeholder="Условия хранения" wire:model="storage_conditions" ></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Белки</label>
                                <div class="col-md-4">
                                    <textarea class="form-control" placeholder="Белки" wire:model="squirrels" ></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Жиры</label>
                                <div class="col-md-4">
                                    <textarea class="form-control" placeholder="Жиры" wire:model="fats" ></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Углеводы</label>
                                <div class="col-md-4">
                                    <textarea class="form-control" placeholder="Углеводы" wire:model="carbohydrates" ></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Калории</label>
                                <div class="col-md-4">
                                    <textarea class="form-control" placeholder="Калории" wire:model="calories" ></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label"></label>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary">Добавить</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
