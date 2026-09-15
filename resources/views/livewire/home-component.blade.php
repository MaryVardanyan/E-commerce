<style>
    .product-slider {
            margin: 0 -15px;
            position: relative;
        }
        .product-slider-new {
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
            left: 50px; /* Позиция стрелки "назад" */
        }

        .slick-next {
            right: 50px; /* Позиция стрелки "вперед" */
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





        .slick-prev-new,
        .slick-next-new {
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

        .slick-prev-new {
            left: 50px; /* Позиция стрелки "назад" */
        }

        .slick-next-new {
            right: 50px; /* Позиция стрелки "вперед" */
        }

        .slick-prev-new:hover,
        .slick-next-new:hover {
            background-color: #5B8C51;
            color: #fff;
        }
        .slick-prev-new:focus,
        .slick-next-new:focus {
            background-color: #5B8C51;
            color: #fff;
        }
        .slick-prev-new:before {
            content: none;
        }
        .slick-next-new:before {
            content: none;
        }
        .slick-prev-new,
        .slick-next-new {
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


<div class="container-fluid px-0 mb-5" style="overflow: hidden;">
    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="{{ asset('img/i.jpg') }}" alt="Image">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-lg-8 text-start">
                                <p class="fs-4 text-white">Добро пожаловать в наш магазин</p>
                                <h1 class="display-1 text-white mb-5 animated slideInRight">Лучшие органические продукты</h1>
                                <a href="" class="btn btn-secondary rounded-pill py-3 px-5 animated slideInRight">О нас</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" src="{{ asset('img/ii.jpg') }}" alt="Image">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-end">
                            <div class="col-lg-8 text-end">
                                <p class="fs-4 text-white">Добро пожаловать в наш магазин</p>
                                <h1 class="display-1 text-white mb-5 animated slideInRight">Настоящие продукты с заботой о природе</h1>
                                <a href="" class="btn btn-secondary rounded-pill py-3 px-5 animated slideInLeft">О нас</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>




<div class="container-xxl py-5" style="overflow: hidden;">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <p class="section-title bg-white text-start text-primary pe-3">Почему мы!</p>
                <h1 class="mb-4">Несколько причин почему выбирают нас!</h1>
                <p class="mb-4">Мы предлагаем только качественные органические продукты, которые помогут вам поддерживать здоровый образ жизни. Наши товары проходят строгий контроль, чтобы вы могли быть уверены в их качестве.</p>
                <p><i class="fa fa-check text-primary me-3"></i>100% органические продукты без добавок</p>
                <p><i class="fa fa-check text-primary me-3"></i>Широкий ассортимент товаров</p>
                <p><i class="fa fa-check text-primary me-3"></i>Честные цены</p>
                <a class="btn btn-secondary rounded-pill py-3 px-5 mt-3" href="{{route('shop')}}">Каталог</a>
            </div>
            <div class="col-lg-6">
                <div class="rounded overflow-hidden">
                    <div class="row g-0">
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                            <div class="text-center bg-primary py-5 px-4">
                                <img class="mb-4" src="{{ asset('img/experience.png') }}" alt="">
                                <h1 class="display-6 text-white" data-toggle="counter-up">10</h1>
                                <span class="fs-5 fw-semi-bold text-secondary">Лет работы</span>
                            </div>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                            <div class="text-center bg-secondary py-5 px-4">
                                <img class="mb-4" src="{{ asset('img/award.png') }}" alt="">
                                <h1 class="display-6" data-toggle="counter-up">20</h1>
                                <span class="fs-5 fw-semi-bold text-primary">Наград</span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<div class="container-fluid banner my-5 py-5" data-parallax="scroll" data-image-src="{{ asset('img/iii.jpg') }}" style="overflow: hidden;">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.3s">
                <div class="row g-4 align-items-center">
                    <div class="col-sm-4">
                        <img class="rounded" src="{{ asset('img/banner-1.jpg') }}" alt="">
                    </div>
                    <div class="col-sm-8">
                        <h2 class="text-white mb-3">Мы продаем лучшие органические молочные продукты</h2>
                        <p class="text-white mb-4">Наши молочные продукты получены от коров, которые пасутся на экологически чистых пастбищах. Мы гарантируем отсутствие искусственных добавок.</p>
                        <a class="btn btn-secondary rounded-pill py-2 px-4" href="{{route('shop')}}">Каталог</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                <div class="row g-4 align-items-center">
                    <div class="col-sm-4">
                        <img class="rounded" src="{{ asset('img/banner-2.jpg') }}" alt="">
                    </div>
                    <div class="col-sm-8">
                        <h2 class="text-white mb-3">Мы доставляем свежие органические продукты</h2>
                        <p class="text-white mb-4">Мы предлагаем широкий ассортимент органических фруктов и овощей, собранных в сезон. Наша команда заботится о том, чтобы каждый продукт был свежим.</p>
                        <a class="btn btn-secondary rounded-pill py-2 px-4" href="{{route('shop')}}">Каталог</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<div class="container-xxl py-5" style="overflow: hidden;">
    <div class="container">
        <div class="text-center mx-auto pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <p class="section-title bg-white text-center text-primary px-3">Наши предложения</p>
            <h1 class="mb-5">Услуги, которые мы предлагаем предпринимателям</h1>
        </div>
        <div class="row gy-5 gx-4">
            <!-- Услуга 1 -->
            <div class="col-lg-4 col-md-6 pt-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item d-flex h-100">
                    <div class="service-img">
                        <img src="{{ asset('img/service-2.jpg') }}" alt="" class="img-fluid">
                    </div>
                    <div class="service-text p-5 pt-0">
                        <div class="service-icon">
                            <img class="rounded-circle h-100 img-fluid" src="{{ asset('img/service-2.jpg') }}" alt="">
                        </div>
                        <h5 class="mb-3">Консультации по выбору органических продуктов</h5>
                        <p class="mb-4">Мы поможем вам подобрать лучшие органические продукты для вашего бизнеса, учитывая потребности ваших клиентов и рыночные тренды.</p>
                        <button class="btn btn-square rounded-circle" data-bs-toggle="modal" data-bs-target="#serviceModal1">
                            <i class="bi bi-chevron-double-right"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Услуга 2 -->
            <div class="col-lg-4 col-md-6 pt-5 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item d-flex h-100">
                    <div class="service-img">
                        <img src="{{ asset('img/service-1.jpg') }}" alt="" class="img-fluid">
                    </div>
                    <div class="service-text p-5 pt-0">
                        <div class="service-icon">
                            <img class="rounded-circle h-100 img-fluid" src="{{ asset('img/service-1.jpg') }}" alt="">
                        </div>
                        <h5 class="mb-3">Партнёрские программы с местными производителями</h5>
                        <p class="mb-4">Создание партнёрских программ с местными фермерами и производителями для расширения ассортимента и поддержки местной экономики.</p>
                        <button class="btn btn-square rounded-circle" data-bs-toggle="modal" data-bs-target="#serviceModal2">
                            <i class="bi bi-chevron-double-right"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Услуга 3 -->
            <div class="col-lg-4 col-md-6 pt-5 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item d-flex h-100">
                    <div class="service-img">
                        <img src="{{ asset('img/service-3.jpg') }}" alt="" class="img-fluid">
                    </div>
                    <div class="service-text p-5 pt-0">
                        <div class="service-icon">
                            <img class="rounded-circle h-100 img-fluid" src="{{ asset('img/service-3.jpg') }}" alt="">
                        </div>
                        <h5 class="mb-3">Консультации по сертификации</h5>
                        <p class="mb-4">Помощь в получении сертификатов для органических продуктов, включая консультации по стандартам и требованиям для бизнеса.</p>
                        <button class="btn btn-square rounded-circle" data-bs-toggle="modal" data-bs-target="#serviceModal3">
                            <i class="bi bi-chevron-double-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Модальные окна -->
<!-- Модальное окно для услуги 1 -->
<div class="modal fade" id="serviceModal1" tabindex="-1" aria-labelledby="serviceModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="serviceModalLabel1">Консультации по выбору органических продуктов</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Мы предоставляем профессиональные консультации по подбору органических продуктов для вашего бизнеса. Наши эксперты помогут вам:</p>
                <ul>
                    <li>Определить наиболее востребованные продукты на рынке</li>
                    <li>Подобрать поставщиков с лучшим качеством</li>
                    <li>Разработать ассортиментную матрицу</li>
                    <li>Проанализировать конкурентов</li>
                </ul>
                <p>Оставьте заявку, и мы свяжемся с вами в ближайшее время.</p>
                <p>Свяжитесь с нами по номеру: +7 (993) 266-60-74<br> или <br> Напишите на почту: farmerorganshop@gmail.com</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                <!-- <button type="button" class="btn btn-primary">Оставить заявку</button> -->
            </div>
        </div>
    </div>
</div>

<!-- Модальное окно для услуги 2 -->
<div class="modal fade" id="serviceModal2" tabindex="-1" aria-labelledby="serviceModalLabel2" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="serviceModalLabel2">Партнёрские программы с местными производителями</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Наши партнёрские программы помогают наладить прямые поставки от местных производителей:</p>
                <ul>
                    <li>Прямые контракты с фермерами</li>
                    <li>Специальные условия ценообразования</li>
                    <li>Гарантия качества продукции</li>
                    <li>Поддержка местного производителя</li>
                </ul>
                <p>Свяжитесь с нами для получения подробной информации.</p>
                <p>Свяжитесь с нами по номеру: +7 (993) 266-60-74<br> или <br> Напишите на почту: farmerorganshop@gmail.com</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                <!-- <button type="button" class="btn btn-primary">Стать партнёром</button> -->
            </div>
        </div>
    </div>
</div>

<!-- Модальное окно для услуги 3 -->
<div class="modal fade" id="serviceModal3" tabindex="-1" aria-labelledby="serviceModalLabel3" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="serviceModalLabel3">Консультации по сертификации</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Наши услуги по сертификации органических продуктов включают:</p>
                <ul>
                    <li>Консультации по международным стандартам</li>
                    <li>Помощь в подготовке документации</li>
                    <li>Сопровождение процесса сертификации</li>
                    <li>Консультации по маркировке продукции</li>
                </ul>
                <p>Получите бесплатную консультацию нашего эксперта.</p>
                <p>Свяжитесь с нами по номеру: +7 (993) 266-60-74<br> или <br> Напишите на почту: farmerorganshop@gmail.com</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                <!-- <button type="button" class="btn btn-primary">Заказать консультацию</button> -->
            </div>
        </div>
    </div>
</div>




<div class="container-xxl py-5" style="overflow: hidden;">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <p class="section-title bg-white text-center text-primary px-3">наши товары</p>
            <h1 class="mb-5">Новинки</h1>
        </div>

        <div class="product-slider-new" style="background: white;">
            @foreach($lproducts as $lproduct)
            <div class="product-item slid_nov">
                <div class="position-relative">
                    <img class="img-fluid-cat" src="{{ $lproduct->image }}" alt="">

                </div>
                <div class="text-center p-4">
                <a class="d-block h5" href="{{route('product.details', ['slug'=>$lproduct->slug])}}">{{ $lproduct->name }}</a>
                <div class="position_pricedet">
									@if($lproduct->sale_price > 0 && $sale->status == 1 && $sale->sale_date > Carbon\Carbon::now())
                                    <span class="text-primary me-1">{{$lproduct->sale_price}}</span>
                                    <span class="text-decoration-line-through">{{$lproduct->regular_price}}</span>
									@else
									<span class="text-primary me-1">{{$lproduct->regular_price}} </span>
									@endif
								</div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="slick-arrows">
                <button class="slick-prev-new">&#10094;</button>
                <button class="slick-next-new">&#10095;</button>
        </div>
    </div>
</div>




@if($sproducts->count() > 0 && $sale->status == 1 && $sale->sale_date > Carbon\Carbon::now())
<div class="container-xxl py-5" style="overflow: hidden;">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <p class="section-title bg-white text-center text-primary px-3">наши товары</p>
            <h1 class="mb-5">Акции</h1>
        </div>
        <!-- Блок обратного отсчета для акции -->
        <div class="wrap-countdown mercado-countdown" 
     data-expire="{{ $saleDateFormatted }}">
</div>

        <div class="product-slider" style="background: white;">
            @foreach($sproducts as $sproduct)
            <div class="product-item slid_nov">
                <div class="position-relative">
                   
				<img class="img-fluid-cat img_rel" src="{{ $sproduct->image }}" alt="">
				<img src="img/res.svg" alt="акция" class="sale_log">
				
				
                    <!-- <div class="product-overlay">
                        <a class="btn btn-square btn-secondary rounded-circle m-1" href=""><i class="bi bi-link"></i></a>
                        <a class="btn btn-square btn-secondary rounded-circle m-1" href=""><i class="bi bi-cart"></i></a>
                    </div> -->
                </div>
                <div class="text-center p-4">
                <a class="d-block h5" href="{{route('product.details', ['slug'=>$sproduct->slug])}}">{{ $sproduct->name }}</a>
                    <div class="position_pricedet"><span class="text-primary me-1">{{$sproduct->sale_price}}</span>
                    <span class="text-decoration-line-through">{{$sproduct->regular_price}}</span></div>
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
@endif


<div class="container-xxl py-5" style="overflow: hidden;">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <p class="section-title bg-white text-center text-primary px-3">наша команда</p>
            <h1 class="mb-5">Руководящий состав</h1>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item rounded p-4">
                    <img class="img-fluid rounded mb-4" src="{{ asset('img/team-1.jpg') }}" alt="">
                    <h5>Арсений Сухов</h5>
                    <p class="text-primary">Владелец</p>

                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="team-item rounded p-4">
                    <img class="img-fluid rounded mb-4" src="{{ asset('img/team-2.jpg') }}" alt="">
                    <h5>Елена Новикова</h5>
                    <p class="text-primary">Генеральный директор</p>
   
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="team-item rounded p-4">
                    <img class="img-fluid rounded mb-4" src="{{ asset('img/team-3.jpg') }}" alt="">
                    <h5>Екатерина Смойлова</h5>
                    <p class="text-primary">Заместитель генералдьного директора</p>

                </div>
            </div>
        </div>
    </div>
</div>




<div class="wrap-show-advance-info-box style-1">
<div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <p class="section-title bg-white text-center text-primary px-3">наша товары</p>
            <h1 class="mb-5">Популярные категории</h1>
        </div>
                
		<div class="wrap-products">
                    
				<div class="wrap-product-tab tab-style-1">
                        
						<div class="tab-control">
							@foreach ($categories as $key=>$category)
							<a href="#category_{{$category->id}}" class="tab-control-item {{$key==0 ? 'active' : ''}}">{{$category->name}}</a>
							@endforeach
						</div>
					<div class="tab-contents">
						@foreach ($categories as $key=>$category)
						<div class="tab-content-item {{$key==0 ? 'active' : ''}}" id="category_{{$category->id}}">
                                
							<div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}' >

									
								@php
								$c_products = DB::table('products')->where('category_id', $category->id)->get()->take($no_of_products);
								@endphp
									@foreach ($c_products as $c_product)
									
									
										<div class="product-item slid_nov">
											<div class="position-relative">
												<img class="img-fluid-cat" src="{{ $c_product->image }}" alt="">
							
											</div>
											<div class="text-center p-4">
											<a class="d-block h5" href="{{route('product.details', ['slug'=>$c_product->slug])}}">{{ $c_product->name }}</a>
												<span class="text-primary me-1">{{$c_product->regular_price}}</span>
												<span class="text-decoration-line-through">{{$c_product->sale_price}}</span>
											</div>
										</div>
										@endforeach
									

							</div>
								
						</div>
						@endforeach
					</div>
				</div>
		</div>
	</div>			

		
        <div class="custom-nav">
        <button class="custom-prev"><i class="fa fa-chevron-left"></i></button>
        <button class="custom-next"><i class="fa fa-chevron-right"></i></button>
        </div>

        @section('scripts')
<script>
    // Дополнительные скрипты для модальных окон при необходимости
    document.addEventListener('DOMContentLoaded', function() {
        // Можно добавить обработчики событий для кнопок в модальных окнах
        document.querySelectorAll('.modal .btn-primary').forEach(button => {
            button.addEventListener('click', function() {
                // Действия при нажатии на кнопки в модальном окне
                alert('Заявка отправлена! Мы свяжемся с вами в ближайшее время.');
                var modal = bootstrap.Modal.getInstance(this.closest('.modal'));
                modal.hide();
            });
        });
    });
</script>

<script>
    $(document).ready(function(){
        $('.product-slider').slick({
            slidesToShow: 4, 
            slidesToScroll: 1, 
            infinite: true, 
            autoplay: true, 
            autoplaySpeed: 3000, 
            responsive: [
                {
                    breakpoint: 1200, 
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 992, 
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 768, 
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });
    });
    
</script>
@endsection