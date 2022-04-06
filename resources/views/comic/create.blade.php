@extends('layouts.base')

@section('pageTitle', 'Add a comic!') 

@section('content')

    <h1 class="m-5">Add here your comic!</h1>

    <form method="POST" action="{{route('comic.store')}}" class="m-5">

        @csrf

        <div class="mb-3">
            <label for="thumb" class="form-label">Cover image</label>
            <input type="text" class="form-control" id="thumb" name="thumb">
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="mb-3">
            <label for="series" class="form-label">Series</label>
            <input type="text" class="form-control" id="series" name="series">
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <input type="text" class="form-control" id="type" name="type">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" class="form-control" id="price" name="price" step="0.01">
        </div>
        <div class="mb-3">
            <label for="sale_date" class="form-label">Sale date</label>
            <input type="text" class="form-control" id="sale_date" name="sale_date">
        </div>
        <div class="form-floating">
            <textarea class="form-control" placeholder="Describe it here!" id="description" name="description"></textarea>
            <label for="description">Description</label>
        </div>

        <div class="d-grid gap-2 col-1 mx-auto mt-5">
            <button class="btn btn-primary" type="submit">Save</button>
        </div>
    </form>

@endsection