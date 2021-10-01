@extends('layouts.app')

@section('title', 'Profiles')

@section('content')

    @if(session('status'))
    <div class="row">
        <p class="alert">{{session('status')}}</p>
    </div>
    @endif

    <div class="mb-3">
        <a href="{{route('profiles.create')}}">
            <button class="btn btn-success">
                <i class="fa fa-plus"></i>
            </button>
        </a>
    </div>

    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">name</th>
            <th scope="col">email</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        @foreach($profiles as $profile)
        <tr>
            <td>{{$profile->name}}</td>
            <td>{{$profile->email}}</td>
            <td class="row float-right">
                <a class="mr-1" style="color:green;" href="{{route('profiles.show', $profile)}}">
                    <button class="btn btn-success">
                        <i class="fa fa-eye"></i>
                    </button>
                </a>
                <a class="mr-1" style="color:green;" href="{{route('profiles.edit', $profile)}}">
                    <button class="btn btn-info">
                        <i class="fa fa-edit"></i>
                    </button>
                </a>
                <form method="POST" action="{{route('profiles.destroy', $profile)}}">
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
