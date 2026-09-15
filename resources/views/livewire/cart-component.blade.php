
	<main id="main" class="main-site">

		<div class="container">

			
			<div class="main-content-area">
				@if(Cart::instance('cart')->count() > 0)
					<div class="wrap-iten-in-cart m_b_30">
						@if(Session::has('success_message'))
						<div class="alert alert-success">
						{{Session::get('success_message')}}
						</div>
						@endif
						@if(Cart::instance('cart')->count()>0)
						<h3 class="box-title">Товар</h3>
						<ul class="products-cart">
							@foreach (Cart::instance('cart')->content() as $item)
							<li class="pr-cart-item">
								<div class="product-image cart_img_korz">
									<figure><img src="{{ $item->model->image }}" alt="{{$item->model->name}}"></figure>
								</div>
								<div class="product-name">
									<a class="link-to-product" href="{{route('product.details', ['slug'=>$item->model->slug])}}">{{$item->model->name}}</a>
								</div>
								<div class="price-field produtc-price"><p class="price">{{$item->model->regular_price}}</p></div>
								<div class="quantity">
									<div class="quantity-input">
																		
										<a class="btn btn-increase" href="#" wire:click.prevent="increaseQuantity('{{$item->rowId}}')"></a>
										<input type="text" name="product-quatity" value="{{$item->qty}}" data-max="120" pattern="[0-9]*" >	
										<a class="btn btn-reduce" href="#" wire:click.prevent="decreaseQuantity('{{$item->rowId}}')"></a>
									</div>
									<p class="text-center"><a href="#" wire:click.prevent="switchToSaveForLater('{{$item->rowId}}')">в отложенное</a></p>
								</div>
								<div class="price-field sub-total"><p class="price">{{$item->subtotal}}</p></div>
								<div class="delete">
									<a href="#" wire:click.prevent="destroy('{{$item->rowId}}')" class="btn btn-delete" title="">
										<span>Удалить из корзины</span>
										<i class="fa fa-times-circle" aria-hidden="true"></i>
									</a>
								</div>
							</li>
							@endforeach						
						</ul>
						@else
						<p>нет товаров в корзине</p>
						@endif
					</div>

					<div class="summary">
						<div class="order-summary">
							<h4 class="title-box">Краткое описание заказа</h4>
							<p class="summary-info"><span class="title">всего</span><b class="index">{{Cart::instance('cart')->subtotal()}} руб.</b></p>
							@if(Session::has('coupon'))
								<p class="summary-info"><span class="title">Скидка ({{Session::get('coupon')['code']}}) <a href="#" wire:click.prevent="removeCoupon"><i class="fa fa-times text-danger"></i></a></span><b class="index">-{{number_format($discount, 2)}} руб.</b></p>
								{{--<p class="summary-info"><span class="title">Налог ({{config('cart.tax')}}%)</span><b class="index">{{number_format($taxAfterDiscount, 2)}} руб.</b></p>--}}
								<p class="summary-info"><span class="title">Стоимость со скидкой</span><b class="index">{{number_format($subtotalAfterDiscount, 2)}} руб.</b></p>
								<p class="summary-info total-info "><span class="title">Итоговая стоимость</span><b class="index">{{number_format($totalAfterDiscount, 2)}} руб.</b></p>
							@else
							{{--<p class="summary-info"><span class="title">Налог</span><b class="index">{{Cart::instance('cart')->tax()}} руб.</b></p>--}}
								<p class="summary-info"><span class="title">Доставка</span><b class="index">бесплатная доставка</b></p>
								<p class="summary-info total-info "><span class="title">Итоговая стоимость</span><b class="index">{{Cart::instance('cart')->total()}} руб.</b></p>
							@endif
							
						</div>
						
							<div class="checkout-info">
							@if(!Session::has('coupon'))
								<label class="checkbox-field">
									<input class="frm-input " name="have-code" id="have-code" value="1" type="checkbox" wire:model="haveCouponCode"><span>У меня есть купон</span>
								</label>
								@if($haveCouponCode == 1)
									<div class="summary-item">
										<form wire:click.prevent="applyCouponCode">
											@if(Session::has('coupon_message'))
											<div class="alert alert-danger" role="danger">
											{{Session::get('coupon_message')}}
											</div>
											@endif
											<p class="row-in-form">
												<label for="coupon-code">Введите купон:</label>
												<input type="text" name="coupon-code" wire:model="couponCode"/>
											</p>
											<button type="submit" class="btn btn-small">Использовать</button>
										</form>
									</div>
								@endif
							@endif
							<a class="btn btn-checkout" href="#" wire:click.prevent="checkout">Оформить заказ</a>
						
						</div>
						<div class="update-clear">
							<a class="btn btn-clear" href="#" wire:click.prevent="destroyAll()">Отчистить корзину</a>
					
						</div>
					</div>
				@else
					<div class="text-center m_b_30">
						<h1>Корзина пустая!</h1>
						<p>Добавить товары в корзину</p>
						<a href="{{route('shop')}}" class="btn btn-success">Каталог</a>
					</div>
				@endif
				<div class="wrap-iten-in-cart">
					<h3 class="title-box">{{Cart::instance('saveForLater')->count()}} отложенных товара</h3>
					@if(Session::has('s_success_message'))
					<div class="alert alert-success">
						{{Session::get('s_success_message')}}
					</div>
					@endif
					@if(Cart::instance('saveForLater')->count()>0)
					<h3 class="box-title">Товар</h3>
					<ul class="products-cart">
						@foreach (Cart::instance('saveForLater')->content() as $item)
						<li class="pr-cart-item">
							<div class="product-image">
								<figure><img src="{{ $item->model->image }}" alt="{{$item->model->name}}"></figure>
							</div>
							<div class="product-name">
								<a class="link-to-product" href="{{route('product.details', ['slug'=>$item->model->slug])}}">{{$item->model->name}}</a>
							</div>
							<div class="price-field produtc-price"><p class="price">{{$item->model->regular_price}}</p></div>
							<div class="quantity">
								
								<p class="text-center"><a href="#" wire:click.prevent="moveToCart('{{$item->rowId}}')">Переместить в корзину</a></p>
							</div>
							 
							<div class="delete">
								<a href="#" wire:click.prevent="deleteFromSaveForLater('{{$item->rowId}}')" class="btn btn-delete" title="">
									<span>Удалить из отложенного</span>
									<i class="fa fa-times-circle" aria-hidden="true"></i>
								</a>
							</div>
						</li>
						@endforeach						
					</ul>
					@else
					<p>нет товаров в отложенном</p>
					@endif
				</div>



			</div>
		</div>

	</main>
