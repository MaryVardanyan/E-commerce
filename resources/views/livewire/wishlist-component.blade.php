<main id="main" class="main-site left-sidebar">

    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="section-title bg-white text-center text-primary px-3">избранные товары</p>
                <h1 class="mb-5">Продукты правильного питания</h1>
        </div>
        @if(Cart::instance('wishlist')->content()->count() > 0)
        <ul class="product-list grid-products equal-container row r-g g-wish">
							@foreach(Cart::instance('wishlist')->content() as $item)
							<li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 height_product_item">
                            <div class="product-item wish-img-h">
								
                                <div class="position-relative">
                                    <img class="img-fluid cat-img-h" src="{{ $item->model->image }}" alt="">
                                    <div class="product-overlay">
                                        <a class="btn btn-square btn-secondary rounded-circle m-1" href="#" wire:click.prevent="removeFromWishlist({{$item->model->id}})"><i class="fa fa-heart fill-heart"></i></a>
                                        <a class="btn btn-square btn-secondary rounded-circle m-1" href="" wire:click.prevent="moveProductFromWishlistToCart('{{$item->rowId}}')"><i class="bi bi-cart"></i></a>
                                    </div>
                                </div>
                                <p class="text-center p-4">
                                    <a class="d-block h5" href="{{route('product.details', ['slug'=>$item->model->slug])}}">{{ $item->model->name }}</a>
									<div class="position_price">
                                    <span class="text-primary me-1">{{$item->model->regular_price}}</span>
                                    <span class="text-decoration-line-through">{{$item->model->sale_price}}</span>
									</div>
								</p>
                            </div>
							</li>
							@endforeach
		</ul>
        @else
        <h4>В избранном нет товаров</h4>
        @endif
    </div>

</main>