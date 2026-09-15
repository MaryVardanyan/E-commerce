<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Fermer shop</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@700&family=Open+Sans:wght@400;500;600&display=swap" rel="stylesheet">   

 
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    


    <link href="{{ asset('lib/animate/animate.css') }}" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/flexslider.css')}}">



    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">


    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styleshop.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('css/flexslider.css') }}" rel="stylesheet">
    <link href="{{ asset('css/chosen.min.css') }}" rel="stylesheet">

  
    <link href="{{ asset('css/color-03.css') }}" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.6.3/nouislider.min.css" integrity="sha512-KRrxEp/6rgIme11XXeYvYRYY/x6XPGwk0RsIC6PyMRc072vj2tcjBzFmn939xzjeDhj0aDO7TDMd7Rbz3OEuBQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.10.0/css/bootstrap-datepicker.min.css" integrity="sha512-34s5cpvaNG3BknEWSuOncX28vz97bRI59UnVtEEpFX536A7BtZSJHsDyFoCl8S7Dt2TPzcrCEoHBGeM4SUBDBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    @livewireStyles
</head>

<body>


    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>




    <div class="container-fluid bg-dark px-0">
        <div class="row g-0 d-none d-lg-flex">
            <div class="col-lg-6 ps-5 text-start">
                <div class="h-100 d-inline-flex align-items-center text-light">
                    <span>Наши соц. сети:</span>
                    <a class="btn btn-link text-light" href="https://vk.com/ваша_страница" target="_blank" rel="noopener noreferrer">
                        <i class="fab fa-vk"></i>
                    </a>
                    <a class="btn btn-link text-light" href="https://ok.ru/ваша_страница" target="_blank" rel="noopener noreferrer">
                        <i class="fab fa-odnoklassniki"></i>
                    </a>
                    <a class="btn btn-link text-light" href="https://t.me/ваш_канал" target="_blank" rel="noopener noreferrer">
                        <i class="fab fa-telegram-plane"></i>
                    </a>
                    <a class="btn btn-link text-light" href="https://www.youtube.com/ваш_канал" target="_blank" rel="noopener noreferrer">
                        <i class="fab fa-youtube"></i>
                    </a>
                    <a class="btn btn-link text-light" href="https://zen.yandex.ru/ваш_канал" target="_blank" rel="noopener noreferrer">
                        <i class="fab fa-yandex"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-6 text-end">
                <div class="h-100 bg-secondary d-inline-flex align-items-center text-dark py-2 px-4">
                    <span class="me-2 fw-semi-bold"><i class="fa fa-phone-alt me-2"></i>Связаться:</span>
                    <span>+7 (993) 266-60-74</span>
                </div>
            </div>
        </div>
    </div>



   
    <nav class="navbar navbar-expand-lg navbar-light sticky-top px-4 px-lg-5 header_color">
        <a href="{{route('home')}}" class="navbar-brand d-flex align-items-center">
       
            <img src="{{ asset('logop.svg')}}" width="100px">
        </a>
        <div class="wrap-search center-section d-none_search m_l_150_search">
							<div class="wrap-search-form">
                            @livewire('header-search-component')
							</div>
						</div>
        <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
              
                <a href="{{route('shop')}}" class="nav-item nav-link">Каталог</a>
               
                <a href="{{route('contact')}}" class="nav-item nav-link">Обратная связь</a>

                <a href="{{route('org')}}" class="nav-item nav-link">О продуктах</a>
        
                @livewire('wishlist-count-component')
                @livewire('cart-count-component')
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" id="dropdownMenuLink" aria-expanded="false"><img src="{{ asset('img/person.svg') }}" alt="профиль"></a>
                    <div class="dropdown-menu bg-light m-0 dropdown-menu-end" id="dropdownMenu">
                        @if(Route::has('login'))
                            @auth
                                @if(Auth::user()->utype === 'ADM')
                                    <h4 class="us_name">{{Auth::user()->name}}</h4>
                                    <a href="{{ route('admin.dashboard') }}" class="dropdown-item" title="Dashboard">Панель</a>
                                    <a class="dropdown-item" title="Categories" href="{{route('admin.categories')}}">Категории</a>
                                    <a class="dropdown-item" title="Products" href="{{route('admin.products')}}">Товары</a>
                                    <a class="dropdown-item" title="Manage Home Categories" href="{{route('admin.homecategories')}}">Категории на главной</a>
                                    <a class="dropdown-item" title="Sale Setting" href="{{route('admin.sale')}}">Акции</a>
                                    <a class="dropdown-item" title="Coupons" href="{{route('admin.coupons')}}">Купоны</a>
                                    <a class="dropdown-item" title="Orders" href="{{route('admin.orders')}}">Заказы</a>
                                    <a class="dropdown-item" title="Contact Messages" href="{{route('admin.contact')}}">Обращения</a>
                                    {{--<a class="dropdown-item" title="Settings" href="{{route('admin.settings')}}">Настройки</a>--}}
                                    <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Выйти</a>
                                    <form id="logout-form" method="POST" action="{{ route('logout')}}">
                                        @csrf
                                        
                                    </form>
                                @else
                                    <h4 class="us_name">{{Auth::user()->name}}</h4>
                                    <a href="{{ route('user.dashboard') }}" class="dropdown-item" title="Dashboard">Личный кабинет</a>
                                    <a href="{{ route('user.orders') }}" class="dropdown-item" title="My orders">Мои заказы</a>
                                    <a href="{{ route('user.changepassword') }}" class="dropdown-item" title="Change password">Изменить пароль</a>
                                    <a href="{{ route('user.profile') }}" class="dropdown-item" title="My profile">Профиль</a>
                                    <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Выйти</a>
                                    <form id="logout-form" method="POST" action="{{ route('logout')}}">
                                        @csrf
                                        
                                    </form>
                                @endif
                            @else    
                                <a href="{{route('register')}}" class="dropdown-item">Зарегистрироваться</a>
                                <a href="{{route('login')}}" class="dropdown-item">Войти</a>
                            @endif
                        @endif
                        
                    </div>
                </div>
            </div>
          
        </div>
        
    </nav>
   
<div class="wrap-search center-section d-none_search_mob">
    <div class="center_search_mob">
							<div class="wrap-search-form margin_auto_search">
                                
                            @livewire('header-search-component')
                            </div>
							</div>
						</div>

    {{ $slot }}


    <div class="container-fluid bg-dark footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Адрес</h5>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>ул. Нахимова, 10Б, Химки</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+7 (993) 266-60-74</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>farmerorganshop@gmail.com</p>
                    <div class="d-flex pt-3">
                        <a class="btn btn-square btn-secondary rounded-circle me-2" href=""><i class="fab fa-vk"></i></a>
                        <a class="btn btn-square btn-secondary rounded-circle me-2" href=""><i class="fab fa-odnoklassniki"></i></a>
                        <a class="btn btn-square btn-secondary rounded-circle me-2" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-secondary rounded-circle me-2" href=""><i class="fab fa-telegram-plane"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Ссылки</h5>
                    <a class="btn btn-link" href="">О нас</a> 
                    <a href="{{route('contact')}}" class="btn btn-link">Обратная связь</a>
                    <a href="{{route('shop')}}" class="btn btn-link">Каталог</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">График</h5>
                    <p class="mb-1">Понидельник - Пятница</p>
                    <h6 class="text-light">09:00 - 23:00</h6>
                    <p class="mb-1">Суббота - Воскресенье</p>
                    <h6 class="text-light">09:00 - 00:00</h6>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Здоровье</h5>
                    <p>Присоединяйтесь к нашему сообществу любителей органических продуктов — войдите в свой аккаунт и наслаждайтесь здоровым выбором!</p>
                  
                </div>
            </div>
        </div>
    </div>




   <div class="container-fluid bg-secondary text-body copyright py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="fw-semi-bold" href="#">Фермер</a>
                </div>
               
            </div>
        </div>
    </div> 

    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>

    <script src="{{ asset('js/jquery-1.12.4.minb8ff.js?ver=1.12.4') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    
    <script src="{{ asset('js/jquery.countdown.min.js') }}"></script>
    
    <script src="{{ asset('js/jquery.flexslider.js') }}"></script>
    
    <script src="{{ asset('js/jquery.sticky.js') }}"></script>

   

    <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>

    <script src="{{ asset('lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('lib/parallax/parallax.min.js') }}"></script>



    <script src="{{ asset('js/functions.js') }}"></script>
    <script src="{{ asset('js/mainn.js') }}"></script>

	<script src="{{ asset('js/jquery-ui-1.12.4.minb8ff.js?ver=1.12.4') }}"></script>
    <script src="{{ asset('js/chosen.jquery.min.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
	

    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>


    
    <script>
$(document).ready(function(){
    $(".owl-carousel").owlCarousel({
        loop: false,
        nav: false, 
        dots: false,
        responsive: {
            0: { items: 1 },
            480: { items: 2 },
            768: { items: 3 },
            992: { items: 4 },
            1200: { items: 5 }
        }
    });


    $(".custom-next").click(function(){
        $(".owl-carousel").trigger("next.owl.carousel");
    });
    $(".custom-prev").click(function(){
        $(".owl-carousel").trigger("prev.owl.carousel");
    });
});
        $(document).ready(function(){
            $('.product-slider').slick({
                slidesToShow: 4,
                slidesToScroll: 1,
                infinite: true,
                autoplay: true,
                autoplaySpeed: 3000,
                arrows: true,
                prevArrow: '.slick-prev',
                nextArrow: '.slick-next',
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

        $(document).ready(function(){
            $('.product-slider-new').slick({
                slidesToShow: 4,
                slidesToScroll: 1,
                infinite: true,
                autoplay: true,
                autoplaySpeed: 3000,
                arrows: true,
                prevArrow: '.slick-prev-new',
                nextArrow: '.slick-next-new',
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.6.3/nouislider.min.js" integrity="sha512-EnXkkBUGl2gBm/EIZEgwWpQNavsnBbeMtjklwAa7jLj60mJk932aqzXFmdPKCG6ge/i8iOCK0Uwl1Qp+S0zowg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.30.1/moment.min.js" integrity="sha512-hUhvpC5f8cgc04OZb55j0KNGh4eh7dLxd/dPSJ5VyzqDWxsayYbojWyl5Tkcgrmb/RVKCRJI1jNlRbVP4WWC4w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.10.0/js/bootstrap-datepicker.min.js" integrity="sha512-LsnSViqQyaXpD4mBBdRYeP6sRwJiJveh2ZIbW41EBrNmKxgr/LFZIiWT6yr+nycvhvauz8c2nYMhrP80YhG7Cw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @livewireScripts

    @stack('scripts')
</body>

</html>