<div>
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                Детали заказа
                            </div>
                            <div class="col-md-6 fl_end_addCotegory">
                                <a href="{{route('admin.orders')}}" class="btn btn-success pull-right">Все заказы</a>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
        <div class="panel-body">
            <table class="mar_b_20">
                <tr>
                    <th>Id: </th>
                    <td>{{$order->id}}</td>
                </tr>
                <tr>
                    <th>Дата заказа: </th>
                    <td>{{$order->created_at}}</td>
                </tr>
                <tr>
                    <th class="pad_r_10">Статус:</th>
                    @if($order->status == 'delivered')
                        <td>доставлен</td>
                    @elseif($order->status == 'canceled')
                        <td>отменен</td>
                    @else
                        <td>оплачен</td>
                    @endif
                </tr>
                <tr>
                    @if($order->status == 'delivered')
                        <th class="pad_r_10">Дата доставки:</th>
                        <td>{{$order->delivered_date}}</td>
                    @elseif($order->status == 'canceled')
                        <th class="pad_r_10">Дата отмены:</th>
                        <td>{{$order->canceled_date}}</td>
                    @endif
                </tr>
            </table>
        </div>
        <div class="row m_b_30">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                Заказанные товары
                            </div>
                            
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="wrap-iten-in-cart m_b_30">
                            
                            <ul class="products-cart">
                                @foreach ($order->orderItems as $item)
                                <li class="pr-cart-item">
                                    <div class="product-image cart_img_korz">
                                        <figure><img src="{{ asset($item->product->image) }}" alt="{{$item->product->name}}"></figure>
                                    </div>
                                    <div class="product-name">
                                        <a class="link-to-product" href="{{route('product.details', ['slug'=>$item->product->slug])}}">{{$item->product->name}}</a>
                                    </div>
                                    <div class="price-field produtc-price"><p class="price">{{$item->price}}</p></div>
                                    <div class="quantity">
                                       <h5>{{$item->quantity}}</h5>
                                    </div>
                                    <div class="price-field sub-total"><p class="price">{{$item->price * $item->quantity}}</p></div>
                                </li>
                                @endforeach						
                            </ul>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>

        <div class="row m_b_30">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="col-md-6 m-b-15">
                            Стоимость товаров
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="summary">
                                <div class="order-summary">
                                    
                                    <p class="summary-info"><span class="title">Промежуточная сумма</span><b class="index">{{$order->subtotal}} руб.</b></p>
                                    <p class="summary-info"><span class="title">Доставка</span><b class="index">бесплатная</b></p>
                                    <p class="summary-info"><span class="title">Итого</span><b class="index">{{$order->total}} руб.</b></p>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row m_b_30">
            <div class="col-md-12">
                <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="col-md-6 m-b-15">
                    Адресс доставки
                    </div>
                </div>
                    <div class="panel-body">
                      <table>
                        <tr>
                            <th class="pad_r_10">Имя:</th>
                            <td>{{$order->firstname}}</td>
                            
                        </tr>
                        <tr>
                            <th class="pad_r_10">Фамилия:</th>
                            <td>{{$order->lastname}}</td>
                        </tr>
                        <tr>
                            <th class="pad_r_10">Телефон:</th>
                            <td>{{$order->mobile}}</td>
                        </tr>
                        <tr>
                            <th class="pad_r_10">Email:</th>
                            <td>{{$order->email}}</td>
                        </tr>
                        <tr>
                            <th class="pad_r_10">Улица:</th>
                            <td>{{$order->line1}}</td>
                            
                        </tr>
                        <tr>
                            <th class="pad_r_10">Дом, кв.:</th>
                            <td>{{$order->line2}}</td>
                        </tr>
                        <tr>
                            <th class="pad_r_10">Город:</th>
                            <td>{{$order->city}}</td>
                           
                        </tr>
                        <tr>
                            <th class="pad_r_10">Район:</th>
                            <td>{{$order->province}}</td>
                        </tr>
                        <tr>
                            <th class="pad_r_10">Регион:</th>
                            <td>{{$order->country}}</td>
                        </tr>
                        <tr>
                            <th class="pad_r_10">Индекс:</th>
                            <td>{{$order->zipcode}}</td>
                        </tr>
                      </table>
                    </div>
                </div>
            </div>
        </div>

        @if($order->is_shipping_different)
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="col-md-6 m-b-15">
                            Информация о доставке
                        </div>
                    </div>
                    <div class="panel-body">
                    <table>
                        <tr>
                            <th class="pad_r_10">Имя:</th>
                            <td>{{$order->shipping->firstname}}</td>
                            
                        </tr>
                        <tr>
                            <th class="pad_r_10">Фамилия:</th>
                            <td>{{$order->shipping->lastname}}</td>
                        </tr>
                        <tr>
                            <th class="pad_r_10">Телефон:</th>
                            <td>{{$order->shipping->mobile}}</td>
                        </tr>
                        <tr>
                            <th class="pad_r_10">Email:</th>
                            <td>{{$order->shipping->email}}</td>
                        </tr>
                        <tr>
                            <th class="pad_r_10">Улица:</th>
                            <td>{{$order->shipping->line1}}</td>
                            
                        </tr>
                        <tr>
                            <th class="pad_r_10">Дом, кв.:</th>
                            <td>{{$order->shipping->line2}}</td>
                        </tr>
                        <tr>
                            <th class="pad_r_10">Город:</th>
                            <td>{{$order->shipping->city}}</td>
                           
                        </tr>
                        <tr>
                            <th class="pad_r_10">Район:</th>
                            <td>{{$order->shipping->province}}</td>
                        </tr>
                        <tr>
                            <th class="pad_r_10">Регион:</th>
                            <td>{{$order->shipping->country}}</td>
                        </tr>
                        <tr>
                            <th class="pad_r_10">Индекс:</th>
                            <td>{{$order->shipping->zipcode}}</td>
                        </tr>
                      </table>
                    </div>
                </div>
            </div>
        </div>
        @endif
       {{-- <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="col-md-6 m-b-15">
                            Операция
                        </div>
                    </div>
                    <div class="panel-body">
                    <table>
                        <tr>
                            <th class="pad_r_10">Режим</th>
                            <td>{{$order->transaction->mode}}</td>
                        </tr>
                        <tr>
                            <th class="pad_r_10">Статус</th>
                            <td>{{$order->transaction->status}}</td>
                        </tr>
                        <tr>
                            <th class="pad_r_10">Дата заказа</th>
                            <td>{{$order->transaction->created_at}}</td>
                        </tr>
                      </table>
                    </div>
                </div>
            </div>
        </div>--}}
    </div>
</div>
