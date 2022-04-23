@extends('layouts.admi')
@section('title')
    image
@endsection
@section('content')
    <form action="{{route('store-image')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label style="display: flex; justify-content: center" for="image" class="form-label">File and Image</label>
            <input style="height: unset" class="form-control" type="file" id="image" multiple />
        </div>
        <div class="form-outline mb-4">
            <label style="display: flex; justify-content: center" class="form-label" for="name">Name</label>
            <input type="text" id="name" class="form-control" />
        </div>
        <div class="form-outline mb-4">
            <label style="display: flex; justify-content: center" class="form-label" for="content">contents</label>
            <textarea class="form-control" id="content" rows="4"></textarea>
        </div>
        <button type="submit" class="btn btn-primary btn-block">
            Send
        </button>
    </form>
@endsection