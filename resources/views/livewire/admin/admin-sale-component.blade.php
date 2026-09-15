<div>
    <style>
        nav svg{
            height: 20px;
        }
        nav .hidden{
            display: block !important;
        }
    </style>
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Акции
                    </div>
                    <div class="panel-body">
                        @if(Session::has('message'))
                        <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                        @endif
                        <form class="form-horizontal" wire:submit.prevent="updateSale">
                            <div class="form-group">
                                <label class="col-md-4 control-label">Статус</label>
                                <div class="col-md-4">
                                    <select class="form-control" wire:model="status">
                                        <option value="0">Не активно</option>
                                        <option value="1">Активно</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Дата акции</label>
                                <div class="disp-ruby">
                                    <input type="text" id="sale-date" placeholder="YYYY/MM/DD HH:MM:SS" class="form-control input-md" data-input wire:model="sale_date" />
                                </div>
                            </div>
                                <div class="form-group">
                                <label class="col-md-4 control-label"></label>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary">Обновить</button>
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
        $('#sale-date').datetimepicker({
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
            var data = $('#sale-date').val();
            @this.set('sale_date', data);
        });
    })
    flatpickr("#sale-date", {
        enableTime: true,
        dateFormat: "Y/m/d H:i:S",
        time_24hr: true,
        locale: "ru",
        position: "below",
        static: true
    });
</script>
@endpush