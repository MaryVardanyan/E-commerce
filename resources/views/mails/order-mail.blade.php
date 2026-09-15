<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Confirmation</title>
</head>
<body>
    <p>Здравствуйте {{$order->firstname}} {{$order->lastname}}</p>
    <p>Ваш заказ успешно оформлен!</p>
    <br>
    <table style="width: 600px; text-align: right;">
        <thead>
            <tr>
                <th>Фото</th>
                <th>Название</th>
                <th>Количество</th>
                <th>Цена</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($order->orderItems as $item)
                <tr>
                    <td><img src="{{ asset($item->product->image) }}" width="100"></td>
                    <td>{{ $item->product->name }}</td>
                    <td>{{ $item->quantity }}</td>
                    <td>{{ $item->price * $item->quantity}} р.</td>
                </tr>
            @endforeach
           {{-- <tr>
                <td colspan="3"></td>
                <td style="font-size: 15px; font-weight: bold;">Промежуточная стоимость: {{$order->subtotal}} р.</td>
            </tr>
            <tr>
                <td colspan="3"></td>
                <td style="font-size: 15px; font-weight: bold;">Налог: {{$order->tax}} р.</td>
            </tr>--}}
            <tr>
                <td colspan="3"></td>
                <td style="font-size: 15px; font-weight: bold;">Бесплатная доставка</td>
            </tr>
            <tr>
                <td colspan="3"></td>
                <td style="font-size: 22px; font-weight: bold;">{{$order->total}} р.</td>
            </tr>
        </tbody>
    </table>
</body>
</html>