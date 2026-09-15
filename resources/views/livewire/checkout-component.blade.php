<main id="main" class="main-site">

<div class="container">

    <div class="text-center mx-auto wow fadeInUp m_b_30" data-wow-delay="0.1s" style="max-width: 500px;">
        <p class="section-title bg-white text-center text-primary px-3">оформить заказ</p>

    </div>
    <div class="main-content-area">
        <form wire:submit.prevent="placeOrder">
            <div class="row">
                <div class="col-md-12">
                    <div class="wrap-address-billing">
                        <h3 class="box-title">Адресс доставки</h3>
                        <div class="billing-address">
                            <div class="row-in-form">
                                <label for="fname">Имя<span>*</span></label>
                                <input type="text" name="fname" value="" placeholder="Ваше имя" wire:model="firstname">
                                @error('firstname') <p class="text-danger">{{$message}}</p>@enderror
                            </div>
                            <div class="row-in-form">
                                <label for="lname">Фамилия<span>*</span></label>
                                <input type="text" name="lname" value="" placeholder="Ваша фамилия" wire:model="lastname">
                                @error('lastname') <p class="text-danger">{{$message}}</p>@enderror
                            </div>
                            <div class="row-in-form">
                                <label for="email">Email:</label>
                                <input type="email" name="email" value="" placeholder="Email" wire:model="email">
                                @error('email') <p class="text-danger">{{$message}}</p>@enderror
                            </div>
                            <div class="row-in-form">
                                <label for="phone">Номер телефона<span>*</span></label>
                                <input type="number" name="phone" value="" placeholder="Номер телефона" wire:model="mobile">
                                @error('mobile') <p class="text-danger">{{$message}}</p>@enderror
                            </div>
                            <div class="row-in-form">
                                <label for="add">Улица<span>*</span></label>
                                <input type="text" name="add" value="" placeholder="Улица" wire:model="line1">
                                @error('line1') <p class="text-danger">{{$message}}</p>@enderror
                            </div>
                            <div class="row-in-form">
                                <label for="add">Дом, квартира<span>*</span></label>
                                <input type="text" name="add" value="" placeholder="Дом, квартира" wire:model="line2">
                                @error('line2') <p class="text-danger">{{$message}}</p>@enderror
                            </div>
                            <div class="row-in-form">
                                <label for="country">Регион<span>*</span></label>
                                <input type="text" name="country" value="" placeholder="Регион" wire:model="country">
                                @error('country') <p class="text-danger">{{$message}}</p>@enderror
                            </div>
                            <div class="row-in-form">
                                <label for="city">Город<span>*</span></label>
                                <input type="text" name="city" value="" placeholder="Город" wire:model="city">
                                @error('city') <p class="text-danger">{{$message}}</p>@enderror
                            </div>
                            <div class="row-in-form">
                                <label for="add">Район:</label>
                                <input type="text" name="add" value="" placeholder="Район" wire:model="province">
                                @error('province') <p class="text-danger">{{$message}}</p>@enderror
                            </div>
                            <div class="row-in-form">
                                <label for="zip-code">Индекс:</label>
                                <input type="number" name="zip-code" value="" placeholder="Почтовый индекс" wire:model="zipcode">
                                @error('zipcode') <p class="text-danger">{{$message}}</p>@enderror
                            </div>
                            <!-- <div class="row-in-form fill-wife">
                                <label class="checkbox-field">
                                    <input name="different-add" id="different-add" value="1" type="checkbox" wire:model="ship_to_different">
                                    <span>Отправить по другому адрессу?</span>
                                </label>
                            </div> -->
                        </div>
                    </div>
                </div>
                @if($ship_to_different)
                    <div class="col-md-12">
                        <div class="wrap-address-billing">
                            <h3 class="box-title">Адресс доставки</h3>
                            <div class="billing-address">
                                <div class="row-in-form">
                                    <label for="fname">Имя<span>*</span></label>
                                    <input type="text" name="fname" value="" placeholder="Ваше имя" wire:model="s_firstname">
                                    @error('s_firstname') <p class="text-danger">{{$message}}</p>@enderror
                                </div>
                                <div class="row-in-form">
                                    <label for="lname">Фамилия<span>*</span></label>
                                    <input type="text" name="lname" value="" placeholder="Ваша фамилия" wire:model="s_lastname">
                                    @error('s_lastname') <p class="text-danger">{{$message}}</p>@enderror
                                </div>
                                <div class="row-in-form">
                                    <label for="email">Email:</label>
                                    <input type="email" name="email" value="" placeholder="Email" wire:model="s_email">
                                    @error('s_email') <p class="text-danger">{{$message}}</p>@enderror
                                </div>
                                <div class="row-in-form">
                                    <label for="phone">Номер телефона<span>*</span></label>
                                    <input type="number" name="phone" value="" placeholder="Номер телефона" wire:model="s_mobile">
                                    @error('s_mobile') <p class="text-danger">{{$message}}</p>@enderror
                                </div>
                                <div class="row-in-form">
                                    <label for="add">Улица<span>*</span></label>
                                    <input type="text" name="add" value="" placeholder="Улица" wire:model="s_line1">
                                    @error('s_line1') <p class="text-danger">{{$message}}</p>@enderror
                                </div>
                                <div class="row-in-form">
                                    <label for="add">Дом, квартира<span>*</span></label>
                                    <input type="text" name="add" value="" placeholder="Дом, квартира" wire:model="s_line2">
                                    @error('s_line2') <p class="text-danger">{{$message}}</p>@enderror
                                </div>
                                <div class="row-in-form">
                                    <label for="country">Регион<span>*</span></label>
                                    <input type="text" name="country" value="" placeholder="Регион" wire:model="s_country">
                                    @error('s_country') <p class="text-danger">{{$message}}</p>@enderror
                                </div>
                                <div class="row-in-form">
                                    <label for="city">Город<span>*</span></label>
                                    <input type="text" name="city" value="" placeholder="Город" wire:model="s_city">
                                    @error('s_city') <p class="text-danger">{{$message}}</p>@enderror
                                </div> 
                                <div class="row-in-form">
                                    <label for="add">Район:</label>
                                    <input type="text" name="add" value="" placeholder="Район" wire:model="s_province">
                                    @error('s_province') <p class="text-danger">{{$message}}</p>@enderror
                                </div>
                                <div class="row-in-form">
                                    <label for="zip-code">Индекс:</label>
                                    <input type="number" name="zip-code" value="" placeholder="Почтовый индекс" wire:model="s_zipcode">
                                    @error('s_zipcode') <p class="text-danger">{{$message}}</p>@enderror
                                </div>
                                
                            </div>
                        </div>
                    </div>
                @endif
            </div>
            
            <div class="summary summary-checkout">
                <div class="summary-item payment-method">
                    <h4 class="title-box">Способы оплаты</h4>
                    <!-- <p class="summary-info"><span class="title">Денежный перевод</span></p>
                    <p class="summary-info"><span class="title">Карта</span></p> -->
                    <div class="choose-payment-methods">
                        <label class="payment-method">
                            <input name="payment-method" id="payment-method-bank" value="cod" type="radio" wire:model="paymentmode">
                            <span>Наложенный платеж</span>
                            <span class="payment-desc">Закажите сейчас и оплатите при доставке</span>
                        </label>
                        {{--<label class="payment-method">
                            <input name="payment-method" id="payment-method-visa" value="card" type="radio" wire:model="paymentmode">
                            <span>Оплата картой</span>
                        </label>--}}
                        {{--<label class="payment-method">
                            <input name="payment-method" id="payment-method-paypal" value="paypal" type="radio" wire:model="paymentmode">
                            <span>Paypal</span>
                        </label>--}}
                        @error('paymentmode') <p class="text-danger">{{$message}}</p> @enderror
                    </div>
                    @if(Session::has('checkout'))
                        <p class="summary-info grand-total"><span>Стоимость</span> <span class="grand-total-price">{{Session::get('checkout')['total']}} р.</span></p>
                    @endif
                    <button type="submit" class="btn btn-medium">Заказать</button>
                </div>
               
            </div>
        </form>


    </div>
</div>

</main>