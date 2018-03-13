@extends('backLayout.app')
@section('title')
Create new Order
@stop

@section('content')

    <h1>Create New Order</h1>
    <hr/>

    {!! Form::open(['url' => 'orders', 'class' => 'form-horizontal']) !!}

                <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
                {!! Form::label('name', 'Name: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('product') ? 'has-error' : ''}}">
                {!! Form::label('product', 'Product: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('product', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('product', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('delivery_address') ? 'has-error' : ''}}">
                {!! Form::label('delivery_address', 'Delivery Address: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('delivery_address', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('delivery_address', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('language') ? 'has-error' : ''}}">
                {!! Form::label('language', 'Language: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('language', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('language', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('order_transaction') ? 'has-error' : ''}}">
                {!! Form::label('order_transaction', 'Order Transaction: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('order_transaction', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('order_transaction', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('order_curency') ? 'has-error' : ''}}">
                {!! Form::label('order_curency', 'Order Curency: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('order_curency', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('order_curency', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('order_status') ? 'has-error' : ''}}">
                {!! Form::label('order_status', 'Order Status: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('order_status', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('order_status', '<p class="help-block">:message</p>') !!}
                </div>
            </div>


    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit('Create', ['class' => 'btn btn-primary form-control']) !!}
        </div>
    </div>
    {!! Form::close() !!}

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

@endsection