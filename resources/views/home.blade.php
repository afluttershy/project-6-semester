@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
      
            <div class="card" style="width:1200px;">
                <div class="card-header">Дашборд - все заказы</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                
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
                                <th>
                                    Сумма
                                </th>
                                <th>
                                    Товары
                                </th>
                            </tr>
                            @foreach($allorders as $order)
                                <tr>
                                    <td>{{ $order->id}}</td>
                                    <td>{{ $order->name }}</td>
                                    <td>{{ $order->tel }}</td>
                                    <td>{{ $order->created_at->format('H:i d/m/Y') }}</td>
                                    <td>{{ $order->street }} {{ $order->house }}, {{ $order->flat }}</td>
                                    <td>{{ $order->payment }}</td>
                                    <td> 
                                        <ul>
                                            @foreach($order->products as $product)
                                                <li>{{ $product->name }}</li>
                                            @endforeach
                                        </ul>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                   
                </div>
            </div>
        
    </div>
</div>
@endsection
