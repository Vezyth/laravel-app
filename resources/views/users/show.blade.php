@extends('layout.master')
@section('content')
<div class="container">
    <div class="mb-4">
        <a href="{{route('users.index')}}" class="text-primary">Back</a>
    </div>
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" value="{{$user->name}}" disabled>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="text" class="form-control" value="{{$user->email}}" disabled>
    </div>

</div>
@endsection
