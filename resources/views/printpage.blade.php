<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Еда.ру</title>
    <link rel="stylesheet" href="/css/css.css">
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
</head>
<body class="print-page">
    <h1>Детали заказа:</h1>

    <ul>
        <li>ID заказа: {{ $order->id }}</li>
        <li>Имя клиента: {{ $order->name }}</li>
        <li>ID заказа:{{ $order->tel }}</li>
        <li>Адрес доставки: {{ $order->street }} {{ $order->house }}, {{ $order->flat }}</li>
        <li>Сумма заказа: {{ $order->payment }} рублей</li>
        <li>Дата создания заказа: {{ $order->created_at->format('H:i d/m/Y') }}</li>
        <li>Товары в заказе: 
            @foreach($order->products as $product)
                <li style="margin-left: 20px;">{{ $product->name }}</li>
            @endforeach
        </li>
        

    </ul>

    <p>Страница для печати. При возникших трудностях можно обратиться на почту help@eda.ru.</p>
</body>
</html>
