<div>
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Профиль
                </div>
                <div class="panel-body">
                    <div class="col-md-4">
                        @if($user->profile->image)
                            <img src="{{asset('img/profile')}}/{{$user->profile->image}}" width="100%" />
                        @else
                            <img src="{{asset('img/profile/default.png')}}" width="100%" />
                        @endif
                    </div>
                    <div class="col-md-8">
                        <p><b>Имя: </b>{{$user->name}}</p>
                        <p><b>Email: </b>{{$user->email}}</p>
                        <p><b>Номер телефона: </b>{{$user->profile->mobile}}</p>
                        <hr>
                        <p><b>Улица: </b>{{$user->profile->line1}}</p>
                        <p><b>Дом, кв.: </b>{{$user->profile->line2}}</p>
                        <p><b>Город: </b>{{$user->profile->city}}</p>
                        <p><b>Район: </b>{{$user->profile->province}}</p>
                        <p><b>Регион: </b>{{$user->profile->country}}</p>
                        <p><b>Индекс: </b>{{$user->profile->zipcode}}</p>
                        <a href="{{route('user.editprofile')}}" class="btn btn-info pull-right">Обновить</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
