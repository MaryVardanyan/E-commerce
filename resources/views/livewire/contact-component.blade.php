<div>
<main id="main" class="main-site left-sidebar">

<div class="container">

    <div class="text-center mx-auto wow fadeInUp m_b_30" data-wow-delay="0.1s" style="max-width: 500px;">
        <p class="section-title bg-white text-center text-primary px-3">Свяжитесь с нами</p>
        <h1 class="mb-5">Обратная связь</h1>
    </div>
    <div class="row">
        <div class=" main-content-area">
            <div class="wrap-contacts ">
                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                    <div class="contact-box contact-form">
                        <h2 class="box-title">Оставьте сообщение</h2>
                        @if (Session::has('message'))
                            <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                        @endif
                        <form name="frm-contact" wire:submit.prevent="sendMessage">

                            <label for="name">Имя<span>*</span></label>
                            <input type="text" value="" id="name" name="name" wire:model="name">
                            @error('name') <p class="text-danger">{{$message}}</p>@enderror

                            <label for="email">Email<span>*</span></label>
                            <input type="text" value="" id="email" name="email" wire:model="email">
                            @error('email') <p class="text-danger">{{$message}}</p>@enderror

                            <label for="phone">Номер телефона</label>
                            <input type="text" value="" id="phone" name="phone" wire:model="phone">
                            @error('phone') <p class="text-danger">{{$message}}</p>@enderror

                            <label for="comment">Комментарий</label>
                            <textarea name="comment" id="comment" wire:model="comment"></textarea>
                            @error('comment') <p class="text-danger">{{$message}}</p>@enderror

                            <input type="submit" name="ok" value="Отправить" >
                            
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                    <div class="contact-box contact-info">
                        <div class="wrap-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2237.4238961077267!2d37.467847477627096!3d55.890007373135255!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b5384e26fbf55f%3A0x39c37a0674c6e74b!2z0YPQuy4g0J3QsNGF0LjQvNC-0LLQsCwgMTDQkSwg0KXQuNC80LrQuCwg0JzQvtGB0LrQvtCy0YHQutCw0Y8g0L7QsdC7LiwgMTQxNDA2!5e0!3m2!1sru!2sru!4v1749378649416!5m2!1sru!2sru" width="100%" height="400px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                        <h2 class="box-title">Контактная информация</h2>
                        <div class="wrap-icon-box">

                            <div class="icon-box-item">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <div class="right-info">
                                    <b>Email</b>
                                    <p>farmerorganshop@gmail.com</p>
                                </div>
                            </div>

                            <div class="icon-box-item">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <div class="right-info">
                                    <b>Телефон</b>
                                    <p>+7 (993) 266-60-74</p>
                                </div>
                            </div>

                            <div class="icon-box-item">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                <div class="right-info">
                                    <b>Адрес</b>
                                    <p>ул. Нахимова, 10Б, Химки</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

</main>
</div>
