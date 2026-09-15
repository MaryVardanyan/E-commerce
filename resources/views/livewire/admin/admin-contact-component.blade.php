<div>
    <div class="container" style="padding: 30px 0;">
        <style>
            nav svg{
                height: 20px;
            }
            nav .hidden{
                display: block !important;
            }
            .container-fluid{
                position: absolute;
                bottom: 0px;
            }
        </style>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading admin_name_category">
                        Обращения
                    </div>
                    <div class="panel-body table-responsive mar_t_20" style="overflow-x: auto;">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Имя</th>
                                    <th>Email</th>
                                    <th>Номер телефона</th>
                                    <th>Комментарий</th>
                                    <th>Дата создания</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php 
                                    $i = 1;

                                @endphp
                                @foreach($contacts as $contact)
                                    <tr>
                                        <td>{{$i++}}</td>
                                        <td>{{$contact->name}}</td>
                                        <td>{{$contact->email}}</td>
                                        <td>{{$contact->phone}}</td>
                                        <td>{{$contact->comment}}</td>
                                        <td>{{$contact->created_at}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{$contacts->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
