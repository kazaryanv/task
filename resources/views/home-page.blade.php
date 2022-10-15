@extends('layouts.admi')
@section('title')
    Home
@endsection
@section('content')
    <div class="container">
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <a href="{{route('title')}}">Back</a>
                    <h2>Slug`{{$title->slug}}</h2>
                    <p>Title`{{ $title -> title }}</p>
                    <p>Description`{{ $title -> description }}</p>
                    <button class="btn btn-primary">
                        <a style="color:white; text-decoration: none" href="{{ route('edit-title', $title->id) }}">Edit</a>
                    </button>

                </div>
            </div>
        </div>
    </div>
@endsection