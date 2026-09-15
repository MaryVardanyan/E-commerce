<div class="pos-rel">
    <a href="{{route('product.cart')}}" class="nav-item nav-link"><img src="{{asset('img/cart.svg')}}" alt="корзина"></a>
    @if(Cart::instance('cart')->count() > 0)
        <span class="index_icon">{{Cart::instance('cart')->count()}}</span>
    @endif
</div>