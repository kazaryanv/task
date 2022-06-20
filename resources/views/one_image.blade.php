@extends('layouts.admi')
@section('title')
    Home
@endsection
@section('content')
    <div class="container">
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <a href="{{route('image')}}">Back</a>
                    <img style="display:flex; max-width: 100px;" src="{{asset('storage/' . $image->image)}}">
                    <p>Title`{{ $image -> name }}</p>
                    <p>Description`{{ $image -> content }}</p>
                    <button class="btn btn-primary">
                        <a style="color:white; text-decoration: none" href="{{ route('edit-img', $image->id) }}">Edit</a>
                    </button>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCenter">
                       Dellete
                    </button>

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
                                    Are you sure you want to delete this entry?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                                    <button class="btn btn-danger">
                                        <a style="color:white; text-decoration: none" href="{{route('delete-img', $image->id)}}">Yes</a>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection