@extends('layouts.admi')
@section('title')
    about
@endsection
@section('content')
    <div class="container">
        <form action="" method="post">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Product name</label>
                <input value="" type="text" name="name" class="form-control" id="name" placeholder="Product name">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Product price</label>
                <input  value="" type="text" name="price" class="form-control" id="price" placeholder="Product price">
            </div>
            <div class="mb-3">
                <label for="qt" class="form-label">Product quantity</label>
                <input  value="" type="number" name="qt" min="1" class="form-control" id="qt" placeholder="Product quantity">
            </div>

            <button class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection