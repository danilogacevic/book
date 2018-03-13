@extends('backLayout.app')
@section('title')
Order
@stop

@section('content')

    <h1>Orders <a href="{{ url('admin/orders/create') }}" class="btn btn-primary pull-right btn-sm">Add New Order</a></h1>
    <div class="table table-responsive">
        <table class="table table-bordered table-striped table-hover" id="tblorders">
            <thead>
                <tr>
                    <th>ID</th><th>Name</th><th>Product</th><th>Delivery Address</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($orders as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td><a href="{{ url('orders', $item->id) }}">{{ $item->name }}</a></td><td>{{ $item->product }}</td><td>{{ $item->delivery_address }}</td>
                    <td>
                        <a href="{{ route('orders.edit',$item->id) }}" class="btn btn-primary btn-xs">Update</a> 
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/orders', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection

@section('scripts')
<script type="text/javascript">
    $(document).ready(function(){
        $('#tblorders').DataTable({
            columnDefs: [{
                targets: [0],
                visible: false,
                searchable: false
                },
            ],
            order: [[0, "asc"]],
        });
    });
</script>
@endsection