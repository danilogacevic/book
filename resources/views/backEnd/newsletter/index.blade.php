@extends('backLayout.app')
@section('title')
Newsletter
@stop

@section('content')

    <h1>Newsletter <a href="{{ url('admin/newsletter/create') }}" class="btn btn-primary pull-right btn-sm">Add New Newsletter</a></h1>
    <div class="table table-responsive">
        <table class="table table-bordered table-striped table-hover" id="tbladmin/newsletter">
            <thead>
                <tr>
                    <th>ID</th><th>Title</th><th>Body</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($newsletter as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td><a href="{{ url('admin/newsletter', $item->id) }}">{{ $item->title }}</a></td><td>{{ $item->body }}</td>
                    <td>
                        <a href="{{ url('admin/newsletter/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs">Update</a> 
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/newsletter', $item->id],
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
        $('#tbladmin/newsletter').DataTable({
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