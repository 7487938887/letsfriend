@extends('layouts.app')

@section('title', 'Profile')

@section('content')
    <div class="row">
        <p>Name: {{$profile->name}}</p>
    </div>
    <div class="row">
        <p>Email: {{$profile->email}}</p>
    </div>
@endsection
