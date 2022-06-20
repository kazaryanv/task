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
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCenter">
                update
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
                            Are you sure you want to Update this entry?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                            <button class="btn btn-danger">yes</button>
                        </div>
                    </div>
                </div>
            </div>

        </form>
    </div>
@endsection