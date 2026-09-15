<div>
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6 admin_name_category">
                                Редактировать купон
                            </div>
                            <div class="col-md-6">
                                <a href="{{route('admin.coupons')}}" class="btn btn-success pull-right">Купоны</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        @if (Session::has('message'))
                        <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                        @endif
                        <form class="form-horizontal flex_column_category" wire:submit.prevent="updateCoupon">
                            <div class="form-group">
                                <label class="col-md-4 control-label">Код купона</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Код купона" class="form-control input-md" wire:model="code" />
                                    @error('code') <p class="text-danger">{{$message}}</p>@enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Тип</label>
                                <div class="col-md-4">
                                    <select class="form-control" wire:model="type">
                                        <option value="">Выберите тип</option>
                                            <option value="fixed">Фиксированный</option>
                                            <option value="percent">Процентный</option>
                                    </select>
                                    @error('type') <p class="text-danger">{{$message}}</p>@enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Ценность купона</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Ценность купона" class="form-control input-md" wire:model="value"/>
                                    @error('value') <p class="text-danger">{{$message}}</p>@enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Стоимость корзины</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Стоимость корзины" class="form-control input-md" wire:model="cart_value"/>
                                    @error('cart_value') <p class="text-danger">{{$message}}</p>@enderror
                                </div>
                            </div>
                            <div class="form-group m_b_30">
                                <label class="col-md-4 control-label">Дата истечения</label>
                                <div class="disp-ruby" wire:ignore>
                                    <input type="text" id="expiry-date" placeholder="YYYY/MM/DD HH:MM:SS" class="form-control input-md" data-input wire:model="expiry_date"/>
                                    @error('expiry_date') <p class="text-danger">{{$message}}</p>@enderror
                                </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary">Редактировать</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@push('scripts')
<script>
    $(function(){
        $('#expiry-date').datetimepicker({
            format: 'YYYY/MM/DD HH:mm:ss',
            sideBySide: true,
            icons: {
                time: 'fa fa-clock',
                date: 'fa fa-calendar',
                up: 'fa fa-chevron-up',
                down: 'fa fa-chevron-down',
                previous: 'fa fa-chevron-left',
                next: 'fa fa-chevron-right',
                today: 'fa fa-crosshairs',
                clear: 'fa fa-trash',
                close: 'fa fa-times'
            }
        })
        .on('dp.change', function(ev){
            var data = $('#expiry-date').val();
            @this.set('expiry_date', data);
        });
    })
    flatpickr("#expiry-date", {
        enableTime: true,
        dateFormat: "Y/m/d H:i:S",
        time_24hr: true,
        locale: "ru",
        position: "below",
        static: true
    });
</script>
@endpush