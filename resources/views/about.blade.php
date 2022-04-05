@extends('layouts.admi')
@section('title')
    update
@endsection
@section('content')
    <div class="container">
        <form action="{{route('update.update')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">title</label>
                <input value="{{$data->title}}" type="text" name="title" class="form-control" id="$title" placeholder="title">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">description</label>
                <input  value="{{$data->description}}" type="text" name="description" class="form-control" id="description" placeholder="description">
            </div>
            <button class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection