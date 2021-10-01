@extends('layouts.app')

@section('title', 'Create Profile')

@section('content')

    @if(session('message'))
        <p class="alert alert-info">{{session('message')}}</p>
    @endif

    <form method="POST" action="{{route('profiles.store')}}">

        @csrf
        @method('POST')

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Name" value="{{ old('name')}}">
        </div>
        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Enter email" value="{{old('email')}}">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>

        <button type="submit" class="btn btn-primary">Add</button>
    </form>
@endsection
