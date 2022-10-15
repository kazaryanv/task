@extends('layouts.admi')
@section('title')
    update
@endsection
@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="container">
        <form action="{{route('update-img' ,$image -> id)}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <label style="display: flex; justify-content: center" for="image" class="form-label">File and Image</label>
                <input style="height: unset" value="{{$image->image}}" class="form-control" type="file" id="image" name="image" multiple />
            </div>
            <div class="form-outline mb-4">
                <label style="display: flex; justify-content: center" class="form-label" for="name">Name</label>
                <input type="text" value="{{$image->name}}" id="name" name="name" class="form-control" />
            </div>
            <div class="form-outline mb-4">
                <label style="display: flex; justify-content: center" class="form-label" for="content">contents</label>
                <textarea class="form-control" id="content" name="content" rows="4">{{$image->content}}</textarea>
            </div>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                update
            </button>
            <a href="{{ route('one-image', $image->id) }}">Back</a>

            <!-- Modal -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">entry</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div style="cursor: default"  class="modal-body">
                            Are you sure you want to Update this entry?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary btn-block" data-dismiss="modal">No</button>
                            <button type="submit" class="btn btn-primary btn-block">
                                Yes
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection