@extends('layouts.app')

@section('title', 'Posts')

@section('content')

    @if(session('status'))
        <div class="row">
            <p class="alert">{{session('status')}}</p>
        </div>
    @endif

    <div class="mb-3">
        <a href="{{route('posts.create')}}">
            <button class="btn btn-success">
                <i class="fa fa-plus"></i>
            </button>
        </a>
    </div>

    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">Category</th>
            <th scope="col">Title</th>
            <th scope="col">Content</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)
            <tr>
                <td>{{$post->category->name}}</td>
                <td>{{$post->title}}</td>
                <td>{{$post->content}}</td>
                <td class="row float-right">
                    <a class="mr-1" style="color:green;" href="{{route('posts.show', $post)}}">
                        <button class="btn btn-success">
                            <i class="fa fa-eye"></i>
                        </button>
                    </a>
                    <a class="mr-1" style="color:green;" href="{{route('posts.edit', $post)}}">
                        <button class="btn btn-info">
                            <i class="fa fa-edit"></i>
                        </button>
                    </a>
                    <form method="POST" action="{{route('posts.destroy', $post)}}">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit"><i class="fa fa-trash"></i></button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
