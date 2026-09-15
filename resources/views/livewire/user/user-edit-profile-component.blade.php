<div>
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Обновить профиль
                </div>
                <div class="panel-body">
                    @if (Session::has('message'))
                        <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                    @endif
                    <form wire:submit.prevent="updateProfile">
                        <div class="col-md-4">
                            @if($newimage)
                                <img src="{{$newimage->temporaryUrl()}}" width="100%" />
                            @elseif($image)
                                <img src="{{asset('img/profile/'.$image)}}" width="100%" />
                            @else
                                <img src="{{asset('img/profile/default.png')}}" width="100%" />
                            @endif
                            <input type="file" class="form-control" wire:model="newimage" />
                        </div>
                        <div class="col-md-8">
                            <p><b>Имя: </b> <input type="text" class="form-control" wire:model="name" /></p>
                            <p><b>Email: </b>{{$email}}</p>
                            <p><b>Номер телефона: </b><input type="text" class="form-control" wire:model="mobile" /></p>
                            <hr>
                            <p><b>Улица: </b><input type="text" class="form-control" wire:model="line1" /></p>
                            <p><b>Дом, кв.: </b><input type="text" class="form-control" wire:model="line2" /></p>
                            <p><b>Город: </b><input type="text" class="form-control" wire:model="city" /></p>
                            <p><b>Район: </b><input type="text" class="form-control" wire:model="province" /></p>
                            <p><b>Регион: </b><input type="text" class="form-control" wire:model="country" /></p>
                            <p><b>Индекс: </b><input type="text" class="form-control" wire:model="zipcode" /></p>
                            <button type="submit" class="btn btn-info pull-right">Обновить</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>