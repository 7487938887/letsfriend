@extends('layouts.app')

@section('title', 'Edit Profile')

@section('content')

    @if(session('message'))
        <p class="alert alert-info">{{session('message')}}</p>
    @endif

    <form method="POST" action="{{route('profiles.update', $profile)}}">

        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Name" value="{{$profile->name}}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" value="{{$profile->email}}">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
