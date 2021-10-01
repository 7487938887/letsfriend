@extends('layouts.app')

@section('title', 'Post')

@section('content')

    <form>
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" id="title" disabled value="{{ $post->title }}">
        </div>

        <div class="form-group">
            <label for="content">Content</label>
            <textarea class="form-control" disabled name="content" id="content" cols="30" rows="10">{{ $post->content }}</textarea>
        </div>

        <div class="form-group">
            <label for="created_at">Created At</label>
            <input type="text" class="form-control" name="created_at" id="created_at" disabled value="{{ $post->created_at->format('Y-m-d') }}">
        </div>

        <div class="form-group">
            <label for="author">Author</label>
            <input type="text" class="form-control" name="author" id="author" disabled value="{{ $post->user->name }}">
        </div>

        <div class="form-group">
            <label for="author_email">Author Email</label>
            <input type="text" class="form-control" name="author_email" id="author_email" disabled value="{{ $post->user->email }}">
        </div>

        <ul>
        @foreach ($post->comments as $comment)
            <li>
                <small>{{ $comment->profile->name }}</small>
                <p>{{ $comment->content }}</p>
            </li>
        @endforeach
        </ul>

    </form>
@endsection
