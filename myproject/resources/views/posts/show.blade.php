@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-default post-space">Go Back</a>
    <h1 class="post-space">{{$post->title}}</h1>
    <div>
        {!!$post->body!!}
    </div>
    <hr>
    <small>Written on {{$post->created_at}}</small>
@endsection