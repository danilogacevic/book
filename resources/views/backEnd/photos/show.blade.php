@extends('backLayout.app')
@section('title')
Photo
@stop

@section('content')

    <h1>Photo</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> 
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $photo->id }}</td> 
                </tr>
            </tbody>    
        </table>
    </div>

@endsection