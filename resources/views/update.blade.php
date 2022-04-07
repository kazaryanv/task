@extends('layouts.admi')
@section('title')
    Home
@endsection
@section('content')
    <div class="container">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @if(isset($data))
            @foreach($data as $row)
                <div class="card-body">
                    <h2>{{ $row -> slug }}</h2>
                    <a href="{{ route('one-title', $row) }}">More</a>
                </div>
            @endforeach
        @endif
    </div>
@endsection