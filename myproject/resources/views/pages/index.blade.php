@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center space">
        <h1>{{$title}}</h1>
        <p>This is Dead by Daylight fun site!</p>
        <p><a class="btn btn-outline-primary btn-lg active" href="/login" role="button">Login</a>
            <a class="btn btn-outline-success btn-lg active" href="/register" role="button">Register</a></p>
    </div>
@endsection

