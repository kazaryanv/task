@extends('layouts.admi')
@section('title')
    update
@endsection
@section('content')
    <div class="container">
        <h2>{{$title->slug}}</h2>
        <form action="{{ route("update-title") }}" method="post">
            @csrf
            <input type="hidden" name="id" value="{{$title->id}}">
            <div class="mb-3">
                <label for="title" class="form-label">title</label>
                <input value="{{ $title->title  }}" name="title" type="text" class="form-control" id="title" placeholder="title">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">description</label>
                <input value="{{ $title->description  }}" name="description" type="text" class="form-control" id="description" placeholder="description">
            </div>
            <button class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection