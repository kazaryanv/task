@extends('layouts.admi')
@section('title')
    image
@endsection
@section('content')
    <div class="container">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <a href="{{ route('new-image') }}">Create new post</a>
        @if(isset($data))
            @foreach($data as $row)
                <div>
                    <h2>{{ $row -> name }}</h2>
                    <p>{{ $row -> content}}</p>
                </div>
            @endforeach
        @endif
    </div>
@endsection