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
                    <div class="panel-body table-responsive" style="overflow-x: auto;">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <!-- <th>Id</th> -->
                                    <th>Промежуточная стоимость</th>
                                    <th>Скидка</th>
                                    <!-- <th>Налог</th> -->
                                    <th>Всего</th>
                                    <th>Имя</th>
                                    <th>Фамилия</th>
                                    <th>Телефон</th>
                                    <th>Email</th>
                                    <th>Индекс</th>
                                    <th>Статус</th>
                                    <th>Дата покупки</th>
                                    <th>Действие</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $order)
                                    <tr>
                                        <!-- <td>{{$order->id}}</td> -->
                                        <td>{{$order->subtotal}} р.</td>
                                        <td>{{$order->discount}} р.</td>
                                        {{--<td>{{$order->tax}} р.</td>--}}
                                        <td>{{$order->total}} р.</td>
                                        <td>{{$order->firstname}}</td>
                                        <td>{{$order->lastname}}</td>
                                        <td>{{$order->mobile}}</td>
                                        <td>{{$order->email}}</td>
                                        <td>{{$order->zipcode}}</td>
                                        @if($order->status == 'delivered')
                                        <td>доставлен</td>
                                        @elseif($order->status == 'canceled')
                                        <td>отменен</td>
                                        @else
                                        <td>оплачен</td>
                                        @endif
                                        <td>{{$order->created_at}}</td>
                                        <td><a href="{{route('user.orderdetails', ['order_id'=>$order->id])}}" class="btn btn-info btn-sm">Детали</a></td>
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
