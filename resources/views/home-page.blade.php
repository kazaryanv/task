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
                <div>
                    <h2>{{ $row -> title }}</h2>
                    <form class="d-inline" action="{{ route('update.edit', $data) }}" method="get">
                        @csrf
                        <button class="btn btn-success">Edit</button>
                    </form>
                </div>
            @endforeach
        @endif
    </div>
@endsection