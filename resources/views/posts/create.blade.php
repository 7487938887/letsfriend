@extends('layouts.app')

@section('title', 'Create Post')

@section('content')

    @if (session('message'))
        <p class="alert alert-info">{{ session('message') }}</p>
    @endif


    <form method="POST" action="{{ route('posts.store') }}">

        @csrf
        @method('POST')

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" id="title" value="{{ old('title') }}">
        </div>

        <div class="form-group">
            <label for="content">Content</label>
            <textarea id="content" class="form-control" name="content" id="" cols="30" rows="10">{{ old('content') }}</textarea>
        </div>

        <div class="form-group">
            <label for="category_id">Category</label>
            <select class="form-control" required name="category_id" id="category_id">
                @foreach ($categories as $category)
                    <option value="{{ $category->id}}">{{$category->name }}</option>
                @endforeach
            </select>
        </div>

    </form>
@endsection
