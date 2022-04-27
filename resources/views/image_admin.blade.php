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
                <div class="d-flex">
                    <div>
                    <h2>{{ $row -> name }}</h2>
                    <p>{{ $row -> content}}</p>
                    </div>
                    <div style="width: 15%;height: 70px;display: flex;align-items: center;justify-content: center;">
                        <img style="width: 50px;height: 50px;" src="{{asset('storage/' . $row -> image)}}">
                    </div>
                </div>
                    <a href="{{ route('one-image', $row) }}">More</a>
                <div style="border-bottom-style: ridge;"></div>
                @endforeach
        @endif
    </div>
@endsection