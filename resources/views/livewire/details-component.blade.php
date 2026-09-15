<style>
    .product-slider {
            margin: 0 -15px;
            position: relative;
        }

        .product-item {
            padding: 0 15px;
        }

        .product-item img {
            width: 100%;
            height: auto;
            border-radius: 10px;
        }

        .product-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5);
            opacity: 0;
            transition: opacity 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
        }


            .product-item:hover .product-overlay {
            opacity: 1;
        }

        .btn-square {
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .slick-arrows {
            position: absolute;
            left: 0;
            right: 0;
            transform: translateY(-50%);
            z-index: 10;
            text-align: center;
        }
        .slick-prev,
        .slick-next {
            background-color: #5B8C51;
            color: white;
            border: none;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            font-size: 20px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            position: absolute;
        }

        .slick-prev {
            left: 50px;
        }

        .slick-next {
            right: 50px; 
        }

        .slick-prev:hover,
        .slick-next:hover {
            background-color: #5B8C51;
            color: #fff;
        }
        .slick-prev:focus,
        .slick-next:focus {
            background-color: #5B8C51;
            color: #fff;
        }
        .slick-prev:before {
            content: none;
        }
        .slick-next:before {
            content: none;
        }


        .custom-nav {
    text-align: center;
    margin-top: 20px;
    display: flex;
    justify-content: space-between;
 
}

.custom-nav button {
    background-color: #4CAF50; 
    color: white;
    border: none;
    padding: 10px 15px;
    margin: 0 5px;
    font-size: 16px;
    cursor: pointer;
    border-radius: 50%;
    transition: background-color 0.3s ease;
}

.custom-nav button:hover {
    background-color: #45a049; 
}

.custom-nav button i {
    font-size: 20px;
}
.owl-prev{
    display: none !important;
}
.owl-next{
    display: none !important;
}


.pos-rel{
    position: relative;
}
</style>
<main id="main" class="main-site">
<div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="section-title bg-white text-center text-primary px-3">карточка товара</p>
                <h1 class="mb-5">Продукты правильного питания</h1>
            </div>
<div class="container">

    <div class="row">

        <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area">
            <div class="wrap-product-detail">
                <div class="detail-media">
                    <div class="product-gallery">
       

                        <li data-thumb="{{ $product->image }}">
                            <img src="{{ asset($product->image) }}" alt="товар" />
                        </li>

                       


                    </div>
                </div>
                <div class="detail-info">
                    <div class="product-rating">

                    @php
                        $avgrating = 0;
                    @endphp
                    @php
						$witems = Cart::instance('wishlist')->content()->pluck('id');
					@endphp
                    @foreach($product->orderItems->where('rstatus', 1) as $orderItem)
                        @php
                            $avgrating = $avgrating + $orderItem->review->rating;
                        @endphp
                    @endforeach
                    @for($i=1; $i<=5; $i++)
                        @if($i<=$avgrating)
                            <i class="fa fa-star" aria-hidden="true"></i>
                        @else
                            <i class="fa fa-star color-gray" aria-hidden="true"></i>
                        @endif
                    @endfor
                        <a href="#" class="count-review">({{$product->orderItems->where('rstatus', 1)->count()}} отзывов)</a>
                    </div>
                    <h2 class="product-name">{{$product->name}}</h2>
                    <div class="short-desc">
                        {{$product->description}}
                    </div>
                    <div class="wrap-social">
                        <a class="link-socail" href="#"><img src="assets/images/social-list.png" alt=""></a>
                    </div>
                    @if($product->sale_price > 0 && $sale->status == 1 && $sale->sale_date > Carbon\Carbon::now())
                    <div class="wrap-price"><span class="product-price">{{$product->sale_price}} руб.</span>
                    <del><span class="product-price c-r text-decoration-line-through">{{$product->regular_price}} руб.</span></del>
                </div>
                    @else

                    <div class="wrap-price"><span class="product-price">{{$product->regular_price}} руб.</span></div>
                    @endif
                    @if($product->stock_status = "instock")
                    <div class="stock-info in-stock">
                        <p class="availability">В наличии</b></p>
                    </div>
                    @else
                    <div class="stock-info in-stock">
                        <p class="availability">Товар закончился</b></p>
                    </div>
                    @endif
                    <div class="quantity">
                        <span>Количество:</span>
                        <div class="quantity-input">
                            <input type="text" name="product-quatity" value="1" data-max="120" pattern="[0-9]*" wire:model="qty" >
                            
                            <a class="btn btn-reduce" href="#" wire:click.prevent="decreseQuantity"></a>
                            <a class="btn btn-increase" href="#" wire:click.prevent="increaseQuantity"></a>
                        </div>
                    </div>
                    <div class="wrap-butons">
                    @if($product->sale_price > 0 && $sale->status == 1 && $sale->sale_date > Carbon\Carbon::now())
                        <a href="#" class="btn add-to-cart" wire:click.prevent="store({{$product->id}}, '{{ $product->name }}', '{{ $product->sale_price }}')">Добавить в корзину</a>
                    @else
                        <a href="#" class="btn add-to-cart" wire:click.prevent="store({{$product->id}}, '{{ $product->name }}', '{{ $product->regular_price }}')">Добавить в корзину</a>
                    @endif
                        <div class="wrap-btn">
                
       
                           @if($witems->contains($product->id))

                                <a class="btn" href="#" wire:click.prevent="removeFromWishlist({{$product->id}})"><i class="fa fa-heart fill-heart"></i>Добавить в избранное</a>
							@else
								<a class="btn" href="#" wire:click.prevent="addToWishlist({{$product->id}}, '{{ $product->name }}', {{ $product->regular_price }})"><i class="fa fa-heart"></i>Добавить в избранное</a>
							@endif
                        </div>
                    </div>
                </div>
                <div class="advance-info">
                    <div class="tab-control normal">
                        <a href="#description" class="tab-control-item active">Описание</a>
                        <a href="#add_infomation" class="tab-control-item">Дополнительная информация</a>
                        <a href="#review" class="tab-control-item">Отзывы</a>
                    </div>
                    <div class="tab-contents">
                        <div class="tab-content-item active" id="description">
                        {{$product->description}}
                        </div>
                        <div class="tab-content-item " id="add_infomation">
                            <table class="shop_attributes">
                                <tbody>
                                    @if($product->expiration_date)
                                    <tr>
                                        <th>Срок годности</th><td class="product_weight">{{$product->expiration_date}}</td>
                                    </tr>
                                    @endif
                                    @if($product->storage_conditions)
                                    <tr>
                                        <th>Условия хранения</th><td class="product_dimensions">{{$product->storage_conditions}}</td>
                                    </tr>
                                    @endif
                                    @if($product->squirrels)
                                    <tr>
                                        <th>Белки</th><td><p>{{$product->squirrels}}</p></td>
                                    </tr>
                                    @endif
                                    @if($product->fats)
                                    <tr>
                                        <th>Жиры</th><td><p>{{$product->fats}}</p></td>
                                    </tr>
                                    @endif
                                    @if($product->carbohydrates)
                                    <tr>
                                        <th>Углеводы</th><td><p>{{$product->carbohydrates}}</p></td>
                                    </tr>
                                    @endif
                                    @if($product->calories)
                                    <tr>
                                        <th>Калории</th><td><p>{{$product->calories}}</p></td>
                                    </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-content-item " id="review">
                            
                            <div class="wrap-review-form">
                                
                                <div id="comments">
                                    <h2 class="woocommerce-Reviews-title">{{$product->orderItems->where('rstatus', 1)->count()}} отзыв на <span>{{$product->name}}</span></h2>
                                    <ol class="commentlist">
                                    @foreach($product->orderItems->where('rstatus', 1) as $orderItem)
                                        <li class="comment byuser comment-author-admin bypostauthor even thread-even depth-1" id="li-comment-20">
                                            <div id="comment-20" class="comment_container"> 
                                            @if($orderItem->order && $orderItem->order->user && $orderItem->order->user->profile)
                                                <img alt="{{$orderItem->order->user->profile->image ?? 'User image'}}" 
                                                    src="{{$orderItem->order->user->profile->image ? asset('img/profile/'.$orderItem->order->user->profile->image) : asset('img/profile/default.png')}}" 
                                                    height="80" width="80">
                                            @else
                                                <img alt="Default user image" 
                                                    src="{{asset('img/profile/default.png')}}" 
                                                    height="80" width="80">
                                            @endif
                                                <div class="comment-text">
                                                    <div class="star-rating">
                                                        <span class="width-{{$orderItem->review->rating * 20}}-percent">Рейтинг <strong class="rating">{{$orderItem->review->rating * 20}}</strong> из 5</span>
                                                    </div>
                                                    <p class="meta"> 
                                                        <strong class="woocommerce-review__author">{{$orderItem->order->user->name}}</strong> 
                                                        <span class="woocommerce-review__dash">–</span>
                                                        <time class="woocommerce-review__published-date" datetime="{{ $orderItem->review->created_at->format('Y-m-d H:i') }}">
                                                        {{ Carbon\Carbon::parse($orderItem->review->created_at)->locale('ru')->isoFormat('D MMMM YYYY, HH:mm') }}
                                                        </time>
                                                    </p>
                                                    <div class="description">
                                                        <p>{{$orderItem->review->comment}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 sitebar">
            <div class="widget widget-our-services ">
                <div class="widget-content">
                    <ul class="our-services">

                        <li class="service">
                            <a class="link-to-service" href="#">
                                <i class="fa fa-truck" aria-hidden="true"></i>
                                <div class="right-content">
                                    <b class="title">Бесплатная доставка</b>
                                    <p class="desc">Доставляем заказы по всей России курьером</p>
                                </div>
                            </a>
                        </li>
                        <li class="service">
                            <a class="link-to-service" href="#">
                                <i class="fa fa-reply" aria-hidden="true"></i>
                                <div class="right-content">
                                    <b class="title">Поддержка 24/7</b>
                                    <span class="subtitle">Всегда на связи</span>
                                    <p class="desc">Наши операторы готовы помочь вам с 9:00 до 21:00 без выходных</p>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

           {{-- <div class="widget mercado-widget widget-product">
                <h2 class="widget-title">Популярные продукты</h2>
                <div class="widget-content">
                    <ul class="products">
                        @foreach($popular_products as $p_product)
                        <li class="product-item">
                            <div class="product product-widget-style">
                                <div class="thumbnnail">
                                    <a href="{{route('product.details', ['slug'=>$product->slug])}}" title="{{$p_product->name}}">
                                        <figure><img src="{{ asset($p_product->image) }}" alt="{{$p_product->name}}"></figure>
                                    </a>
                                </div>
                                <div class="product-info">
                                    <a href="{{route('product.details', ['slug'=>$product->slug])}}" class="product-name"><span>{{$p_product->name}}</span></a>
                                    <div class="wrap-price"><span class="product-price">{{$p_product->regular_price}}</span></div>
                                </div>
                            </div>
                        </li>
                        @endforeach
                        

                    </ul>
                </div>
            </div>--}}

        </div>

      <div class="container-xxl py-5" style="overflow: hidden;">
            <div class="container">
                <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                    <p class="section-title bg-white text-center text-primary px-3">новинки</p>
                </div>
                <div class="product-slider" style="background: white;">
                    @foreach ($related_products as $r_product)
                        <div class="product-item slid_nov">
                            <div class="position-relative">
                                <img class="img-fluid-cat" src="{{  asset($r_product->image) }}" alt="">
                            </div>
                            <div class="text-center p-4">
                                <a class="d-block h5" href="{{route('product.details', ['slug'=>$r_product->slug])}}">{{ $r_product->name }}</a>
                                <div class="position_pricedet">
									@if($r_product->sale_price > 0 && $sale->status == 1 && $sale->sale_date > Carbon\Carbon::now())
                                    <span class="text-primary me-1">{{$r_product->sale_price}}</span>
                                    <span class="text-decoration-line-through">{{$r_product->regular_price}}</span>
									@else
									<span class="text-primary me-1">{{$r_product->regular_price}} </span>
									@endif
								</div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="slick-arrows">
                    <button class="slick-prev">&#10094;</button>
                    <button class="slick-next">&#10095;</button>
                </div>
            </div>
        </div>

    </div>

</div>

</main>

