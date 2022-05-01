@extends('layouts.admi')
@section('title')
    update
@endsection
@section('content')
    <div class="container">
        <form action="{{route('update-img' ,$image -> id)}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <label style="display: flex; justify-content: center" for="old_image" class="form-label">File and Image</label>
                <input style="height: unset" class="form-control" type="file" id="old_image" name="old_image" multiple />
            </div>
            <div class="form-outline mb-4">
                <label style="display: flex; justify-content: center" class="form-label" for="name">Name</label>
                <input type="text" value="{{$image->name}}" id="name" name="name" class="form-control" />
            </div>
            <div class="form-outline mb-4">
                <label style="display: flex; justify-content: center" class="form-label" for="content">contents</label>
                <textarea class="form-control" id="content" name="content" rows="4">{{$image->content}}</textarea>
            </div>
            <button type="submit" class="btn btn-primary btn-block">
                Send
            </button>
        </form>
    </div>
@endsection