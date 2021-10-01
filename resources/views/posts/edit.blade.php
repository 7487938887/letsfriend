@extends('layouts.app')

@section('title', 'Post')

@section('content')

    @if (session('message'))
        <p class="alert alert-info">{{ session('message') }}</p>
    @endif

    <h2>{{ $post->category->name }}</h2>

    <form method="POST" action="{{ route('posts.create') }}">

        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" id="title" value="{{ $post->title }}">
        </div>

        <div class="form-group">
            <label for="title">Content</label>
            <textarea class="form-control" name="content" id="" cols="30" rows="10">{{ $post->content }}</textarea>
        </div>

        <div class="form-group">
            <label for="created_at">Created At</label>
            <input type="date" class="form-control" name="created_at" disabled id="created_at" value="{{ $post->created_at->format('Y-m-d') }}">
        </div>

        <div class="form-group">
            <label for="author">Author</label>
            <input type="text" class="form-control" name="author" id="author" value="{{ $post->user->name }}">
        </div>

        <div class="form-group">
            <label for="author_email">Author Email</label>
            <input type="text" class="form-control" name="author_email" id="author_email" value="{{ $post->user->email }}">
        </div>


    </form>
@endsection
