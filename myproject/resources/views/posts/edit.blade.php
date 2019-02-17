@extends('layouts.app')

@section('content')
    <h1 class="post-space">Edit Post</h1>
    {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST']) !!}
        <div class="form-group">
            <p>{{Form::label('title', 'Title')}}</p>
            {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' =>'Title'])}}
        </div>
        <div class="form-group">
            {{Form::label('body', 'Body')}}
            {{Form::textarea('body', $post->body, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' =>'Body Text'])}}
        </div>
        {{Form::hidden('_method', 'POST')}}
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection