{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>


        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />


        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>
    </body>
</html> --}}


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Fermer shop</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

ё
    <link href="{{ asset('img/favicon.ico') }}" rel="icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@700&family=Open+Sans:wght@400;500;600&display=swap" rel="stylesheet">   


    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">


    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">


    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">


    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styleshopp.css') }}" rel="stylesheet">
    <link href="{{ asset('css/chosen.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/color-01.css') }}" rel="stylesheet">
    <link href="{{ asset('css/color-02.css') }}" rel="stylesheet">
    <link href="{{ asset('css/color-03.css') }}" rel="stylesheet">
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
                    <a class="btn btn-link text-light" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-link text-light" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-link text-light" href=""><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-link text-light" href=""><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-6 text-end">
                <div class="h-100 bg-secondary d-inline-flex align-items-center text-dark py-2 px-4">
                    <span class="me-2 fw-semi-bold"><i class="fa fa-phone-alt me-2"></i>Call Us:</span>
                    <span>+7 (993) 266-60-74</span>
                </div>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5">
        <a href="{{route('home')}}" class="navbar-brand d-flex align-items-center">
 
            <img src="logop.svg">
        </a>
        <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
         
                <a href="{{route('shop')}}" class="nav-item nav-link">Каталог</a>
     
                <a href="about.html" class="nav-item nav-link">О нас</a>
               
                <a href="contact.html" class="nav-item nav-link">Контакты</a>
                <a href="{{route('product.cart')}}" class="nav-item nav-link"><img src="{{asset('img/cart.svg')}}" alt="корзина"></a>

                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" id="dropdownMenuLink" aria-expanded="false"><img src="{{ asset('img/person.svg') }}" alt="профиль"></a>
                    <div class="dropdown-menu bg-light m-0 dropdown-menu-end" id="dropdownMenu">
                        @if(Route::has('login'))
                            @auth
                                @if(Auth::user()->utype === 'ADM')
                                    <h4 class="us_name">{{Auth::user()->name}}</h4>
                                    <a href="{{ route('admin.dashboard') }}" class="dropdown-item" title="Dashboard">Панель</a>
                                    <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Выйти</a>
                                    <form id="logout-form" method="POST" action="{{ route('logout')}}">
                                        @csrf
                                        
                                    </form>
                                @else
                                    <h4 class="us_name">{{Auth::user()->name}}</h4>
                                    <a href="{{ route('user.dashboard') }}" class="dropdown-item" title="Dashboard">Панель</a>
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
            <div class="border-start ps-4 d-none d-lg-block">
                <button type="button" class="btn btn-sm p-0"><i class="fa fa-search"></i></button>
            </div>
        </div>
    </nav>



    {{ $slot }}


    <div class="container-fluid bg-dark footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Адрес</h5>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>ул. Нахимова, 10Б, Химки</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+7 (993) 266-60-74</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>fermerkhimki@mail.ru</p>
                    <div class="d-flex pt-3">
                        <a class="btn btn-square btn-secondary rounded-circle me-2" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-secondary rounded-circle me-2" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-secondary rounded-circle me-2" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-secondary rounded-circle me-2" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Ссылки</h5>
                    <a class="btn btn-link" href="">О нас</a>
                    <a class="btn btn-link" href="">Контакты</a>
                    <a class="btn btn-link" href="">Поддержка</a>
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
                    <div class="position-relative w-100">
                       
                        <button type="button" class="btn btn-secondary py-2 position-absolute top-0 end-0 mt-2 me-2">Зарегистрироваться</button>
                    </div>
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



    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('lib/parallax/parallax.min.js') }}"></script>
    <script src="{{ asset('lib/lightbox/js/lightbox.min.js') }}"></script>


    <script src="{{ asset('js/mainn.js') }}"></script>
    <script src="{{ asset('js/jquery-1.12.4.minb8ff.js?ver=1.12.4') }}"></script>
	<script src="{{ asset('js/jquery-ui-1.12.4.minb8ff.js?ver=1.12.4') }}"></script>
	<script src="{{ asset('js/chosen.jquery.min.js') }}"></script>
	<script src="{{ asset('js/functions.js') }}"></script>
    @livewireScripts
</body>

</html>

