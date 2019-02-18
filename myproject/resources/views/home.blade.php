@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-success">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <p class="text-center"><a href="/posts/create" class="btn btn-primary mb-5 mt-5">Create Post</a></p>
                    <h3 class="text-center">Your Blog Posts</h3>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
