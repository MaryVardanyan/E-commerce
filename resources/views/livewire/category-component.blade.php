
<div id=main>
	<main id="main" class="main-site left-sidebar">

		<div class="container">
		<div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="section-title bg-white text-center text-primary px-3">наши товары</p>
                <h1 class="mb-5">Продукты правильного питания</h1>
            </div>
			<div class="row">
			<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 sitebar">
					<div class="widget mercado-widget categories-widget">
						<h2 class="widget-title"><a href="{{route('shop')}}">Все категории</a></h2>
						<div class="widget-content">
							<ul class="list-category">
								@foreach ($categories as $category)
								<li class="category-item {{count($category->subCategories) > 0 ? 'has-child-cate' : ''}}">
									<a href="{{route('product.category', ['category_slug'=>$category->slug])}}" class="cate-link">{{$category->name}}</a>
									@if(count($category->subCategories)>0)
										<span class="toggle-control">+</span>
										<ul class="sub-cate">
											@foreach($category->subCategories as $scategory)
												<li class="category-item">
													<a href="{{route('product.category', ['category_slug'=>$category->slug, 'scategory_slug'=>$scategory->slug])}}" class="cat-link"><i class="fa fa-caret-right"></i>{{$scategory->name}}</a>
												</li>
											@endforeach
										</ul>
									@endif
								</li>
								@endforeach
								
							</ul>
						</div>
					</div>

					<div class="widget mercado-widget filter-widget price-filter">
						<h2 class="widget-title">Цена <span class="text-info col_filt">{{$min_price}}р.-{{$max_price}}р.</span></h2>
						<div class="widget-content">
							<div id="slider" wire:ignore></div>
						</div>
					</div>


				</div>
				<div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area">

		

					<div class="wrap-shop-control">

						<h1 class="shop-title">{{$category_name}}</h1>

						<div class="wrap-right">

							<div class="sort-item orderby ">
								<select name="orderby" class="use-chosen" wire:model="sorting">
									<option value="default" selected="selected">По умолчанию</option>
									<option value="date">По новизне</option>
									<option value="price">По возрастанию цены</option>
									<option value="price-desc">По убыванию цены</option>
								</select>
							</div>

							<div class="sort-item product-per-page">
								<select name="post-per-page" class="use-chosen" wire:model="pagesize">
									<option value="12" selected="selected">12 товаров на страницу</option>
									<option value="16">16 товаров на страницу</option>
									<option value="18">18 товаров на страницу</option>
									<option value="21">21 товаров на страницу</option>
									<option value="24">24 товаров на страницу</option>
									<option value="30">30 товаров на страницу</option>
									<option value="32">32 товаров на страницу</option>
								</select>
							</div>


						</div>

					</div>


						<ul class="product-list grid-products equal-container row r-g">
							@php
								$witems = Cart::instance('wishlist')->content()->pluck('id');
							@endphp
							@foreach($products as $product)
							<li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 height_product_item">
                            <div class="product-item pr-mob_it">
								
                                <div class="position-relative">
                                    <img class="img-fluid cat-img-h" src="{{ asset($product->image) }}" alt="">
                                    <div class="product-overlay">
										@if($witems->contains($product->id))
                                        <a class="btn btn-square btn-secondary rounded-circle m-1" href="#" wire:click.prevent="removeFromWishlist({{$product->id}})"><i class="fa fa-heart fill-heart"></i></a>
										@else
										<a class="btn btn-square btn-secondary rounded-circle m-1" href="#" wire:click.prevent="addToWishlist({{$product->id}}, '{{ $product->name }}', {{ $product->regular_price }})"><i class="fa fa-heart"></i></a>
										@endif
										@if($product->sale_price > 0 && $sale->status == 1 && $sale->sale_date > Carbon\Carbon::now())
										<a class="btn btn-square btn-secondary rounded-circle m-1" href="" wire:click.prevent="store({{$product->id}}, '{{ $product->name }}', {{ $product->sale_price }})"><i class="bi bi-cart"></i></a>
										@else
                                        <a class="btn btn-square btn-secondary rounded-circle m-1" href="" wire:click.prevent="store({{$product->id}}, '{{ $product->name }}', {{ $product->regular_price }})"><i class="bi bi-cart"></i></a>
										@endif
                                    </div>
                                </div>
                                <p class="text-center p-4">
                                    <a class="d-block h5" href="{{route('product.details', ['slug'=>$product->slug])}}">{{ $product->name }}</a>
									<div class="position_price">
									@if($product->sale_price > 0 && $sale->status == 1 && $sale->sale_date > Carbon\Carbon::now())
                                    <span class="text-primary me-1">{{$product->sale_price}}</span>
                                    <span class="text-decoration-line-through">{{$product->regular_price}}</span>
									@else
									<span class="text-primary me-1">{{$product->regular_price}} </span>
									@endif
									</div>
								</p>
                            </div>
							</li>
							@endforeach
						</ul>

			

					<div class="wrap-pagination-info">
						{{$products->links()}}
					</div>
				</div>

				

			</div>

		</div>

	</main>
</div>
@push('scripts')
<script>
	var slider = document.getElementById('slider');
	noUiSlider.create(slider, {
		start : [1, 5000],
		connect:true,
		range :{
			'min' : 1,
			'max' : 5000
		},
		pips:{
			mode:'steps',
			stepped:true,
			density:4
		}
	});

	slider.noUiSlider.on('update', function(value){
		@this.set('min_price', value[0]);
		@this.set('max_price', value[1]);
	})
</script>

@endpush