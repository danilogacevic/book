@extends('backLayout.app')
@section('title')
Edit Photo
@stop

@section('content')

    <h1>Edit Photo</h1>
    <hr/>

    {!! Form::model($photo, [
        'method' => 'PATCH',
        'url' => ['admin/photos', $photo->id],
        'class' => 'form-horizontal'
    ]) !!}

    

    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit('Update', ['class' => 'btn btn-primary form-control']) !!}
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