<div>
    <style>
        nav svg{
            height: 20px;
        }
        nav .hidden{
            display: block !important;
        }
        .sclist{
            list-style: none;
        }
        .sclist li{
            line-height: 33px;
            border-bottom: 1px solid #ccc;
        }
        .slink i{
            font-size: 16px;
            margin-left: 12px;
        }
    </style>
    <div class="container" style="padding: 30px 0;">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-6">Все категории</div>
                        <div class="col-md-6 fl_end_addCotegory">
                            <a href="{{route('admin.addcategory')}}" class="btn btn-success pull-right">Добавить категорию</a>
                        </div>
                    </div>
                </div>
                <div class="panel-body table-responsive mar_t_20" style="overflow-x: auto;">
                @if (Session::has('message'))
                        <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                @endif
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Категория</th>
                                <th>Slug</th>
                                <th>Подкатегория</th>
                                <th>Действие</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($categories as $category)
                            <tr>
                                <td>{{$category->id}}</td>
                                <td>{{$category->name}}</td>
                                <td>{{$category->slug}}</td>
                                <td>
                                    <ul class="sclist">
                                        @foreach($category->subCategories as $scategory)
                                        <li><i class="fa fa-caret-right"></i>{{$scategory->name}} 
                                            <a href="{{route('admin.editcategory', ['category_slug'=>$category->slug, 'scategory_slug'=>$scategory->slug])}}" class="slink"><i class="fa fa-edit"></i></a>
                                            <a href="#" onclick="confirm('Вы уверены, что хотите удалить подкатегорию?') || event.stopImmediatePropagation()" wire:click.prevent="deleteSubcategory({{$scategory->id}})" class="slink"><i class="fa fa-times text-danger"></i></a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </td>
                                <td>
                                    <a href="{{route('admin.editcategory', ['category_slug'=>$category->slug])}}"><i class="fa fa-edit fa-2x"></i></a>
                                    <a href="#" onclick="confirm('Вы уверены, что хотите удалить категорию?') || event.stopImmediatePropagation()" wire:click.prevent="deleteCategory({{$category->id}})" style="margin-left: 5px;"><i class="fa fa-times fa-2x text-danger"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$categories->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
