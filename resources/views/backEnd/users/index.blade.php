@extends('backLayout.app')
@section('title')
User
@stop

@section('content')

    <h1>Users <a href="{{ url('admin/users/create') }}" class="btn btn-primary pull-right btn-lg">Add New User</a></h1>
    <div class="table table-responsive">
        <table class="table table-bordered table-striped table-hover" id="tbladmin/users">
            <thead>
                <tr>
                    <th>ID</th><th>Name</th><th>Email</th><th>Role</th><th>Verified</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($users as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td><a href="{{ url('admin/users', $item->id) }}">{{ $item->name }}</a></td><td>{{ $item->email }}</td><td>{{ $item->role }}</td><td>{{ $item->verified }}</td>
                    <td>
                        <a href="{{ url('admin/users/' . $item->id . '/edit') }}" class="btn btn-primary btn-lg">Update</a> 
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/users', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-lg']) !!}
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
        $('#tbladmin/users').DataTable({
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