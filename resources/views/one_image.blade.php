@extends('layouts.admi')
@section('title')
    Home
@endsection
@section('content')
    <div class="container">
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <a href="{{route('image')}}">Back</a>
                    <img style="display:flex; max-width: 100px;" src="{{asset('storage/' . $image->image)}}">
                    <p>Title`{{ $image -> name }}</p>
                    <p>Description`{{ $image -> content }}</p>
                    <button class="btn btn-primary">
                        <a style="color:white; text-decoration: none" href="{{ route('edit-title', $image->id) }}">Edit</a>
                    </button>
                    <button class="btn btn-danger">
                        <a style="color:white; text-decoration: none" href="{{route('delete-img', $image->id)}}">Delete</a>
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection