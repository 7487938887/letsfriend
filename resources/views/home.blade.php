@extends('layouts.app')

@section('content')
    <main role="main" class="inner cover">
        <h1 class="cover-heading">Welcome to LetsFriend</h1>
        <p class="lead">This is test wep app</p>
        <p class="lead">
            <a href="{{route('posts.index')}}" class="btn btn-lg btn-secondary">Check Posts</a>
        </p>
    </main>
@endsection
