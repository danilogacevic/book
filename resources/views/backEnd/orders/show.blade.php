@extends('backLayout.app')
@section('title')
Order
@stop

@section('content')

    <h1>Order</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Name</th><th>Product</th><th>Delivery Address</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $order->id }}</td> <td> {{ $order->name }} </td><td> {{ $order->product }} </td><td> {{ $order->delivery_address }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection