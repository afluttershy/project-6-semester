@extends('layout')

@section('content')
<div class='myorders-page'>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Главная</a></li>
            <li class="breadcrumb-item active" aria-current="page">Мои заказы</li>
        </ol>
    </nav>
    <h1>Мои заказы</h1>
    <div class="col-md-12 table">
        <table class="table">
            <tbody>
            <tr>
                <th>
                    #
                </th>
                <th>
                    Имя
                </th>
                <th>
                    Телефон
                </th>
                <th>
                    Когда отправлен
                </th>
                <th>
                    Адрес
                </th>
            </tr>
            @foreach($myorders as $order)
                <tr>
                    <td>{{ $order->id}}</td>
                    <td>{{ $order->name }}</td>
                    <td>{{ $order->tel }}</td>
                    <td>{{ $order->created_at->format('H:i d/m/Y') }}</td>
                    <td>{{ $order->street }} {{ $order->house }}, {{ $order->flat }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    {{ $myorders->links() }}
</div>
@endsection
