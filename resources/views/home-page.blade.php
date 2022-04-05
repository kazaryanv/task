@extends('layouts.admi')
@section('title')
    Home
@endsection
@section('content')
    @if(isset($data))
        @foreach($data as $row)
            <div class="container">
                <div class="card">
                    <div class="card-body">
                        <a href="{{route('update.index')}}">Back</a>
                        <h2>{{ $row -> title }}</h2>
                        <form class="d-inline" action="{{ route('update.edit', $data) }}" method="get">
                            @csrf
                            <button class="btn btn-success">Edit</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    @endif
@endsection