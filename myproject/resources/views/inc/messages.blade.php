@if(count($errors) > 0)
    @foreach($errors->all() as $error)
        <div class="alert alert-danger space">
            {{$error}}
        </div>
    @endforeach
@endif

@if(session('success'))
    <div class="alert alert-success space">
        {{session('success')}}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger space">
        {{session('error')}}
    </div>
@endif
