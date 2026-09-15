<div>
    <style>
        nav svg{
            height: 20px;
        }
        nav .hidden{
            display: block !important;
        }
    </style>
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Все заказы
                    </div>
                    <div class="panel-body table-responsive mar_t_20" style="overflow-x: auto;">
                        @if (Session::has('order_message'))
                            <div class="alert alert-success" role="alert">{{Session::get('order_message')}}</div>
                        @endif
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Промежуточная стоимость</th>
                                    <th>Скидка</th>
                                    <th>Всего</th>
                                    <th>Имя</th>
                                    <th>Фамилия</th>
                                    <th>Телефон</th>
                                    <th>Email</th>
                                    <th>Индекс</th>
                                    <th>Статус</th>
                                    <th>Дата покупки</th>
                                    <th colspan="2" class="text-center">Действие</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $order)
                                    <tr>
                                        <td>{{$order->id}}</td>
                                        <td>{{$order->subtotal}} р.</td>
                                        <td>{{$order->discount}} р.</td>
                                        <td>{{$order->total}} р.</td>
                                        <td>{{$order->firstname}}</td>
                                        <td>{{$order->lastname}}</td>
                                        <td>{{$order->mobile}}</td>
                                        <td>{{$order->email}}</td>
                                        <td>{{$order->zipcode}}</td>
                                        <td>{{$order->status}}</td>
                                        <td>{{$order->created_at}}</td>
                                        <td><a href="{{route('admin.orderdetails', ['order_id'=>$order->id])}}" class="btn btn-info btn-sm">Детали</a></td>
                                        <td>
                                            <div class="dropdown">
                                            <button class="btn btn-success btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown">
                                                Статус
                                                <span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#" wire:click.prevent="updateOrderStatus({{$order->id}}, 'delivered')">Доставлен</a></li>
                                                <li><a class="dropdown-item" href="#" wire:click.prevent="updateOrderStatus({{$order->id}}, 'canceled')">Отменен</a></li>
                                            </ul>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{$orders->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
