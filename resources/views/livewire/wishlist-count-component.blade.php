<div class="pos-rel">
    <a href="{{route('product.wishlist')}}" class="nav-item nav-link"><img src="{{asset('img/Heart.svg')}}" alt="избранное"></a>
    @if(Cart::instance('wishlist')->count() > 0)
        <span class="index_icon">{{Cart::instance('wishlist')->count()}}</span>
    @endif
</div>