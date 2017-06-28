@extends('backLayout.app')
@section('title')
Newsletter
@stop

@section('content')

    <h1>Newsletter</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Title</th><th>Body</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $newsletter->id }}</td> <td> {{ $newsletter->title }} </td><td> {{ $newsletter->body }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection