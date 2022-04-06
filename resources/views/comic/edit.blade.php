@extends('layouts.base')

@section('pageTitle')
    Edit: {{$comic->title}}
@endsection 

@section('content')

    <h1 class="m-5">Edit the details here!</h1>

    <form method="POST" action="{{route('comic.update', ['comic' => $comic->id])}}" class="m-5">

        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="thumb" class="form-label">Cover image</label>
            <input type="text" class="form-control" id="thumb" name="thumb" value="{{$comic->thumb}}">
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{$comic->title}}">
        </div>
        <div class="mb-3">
            <label for="series" class="form-label">Series</label>
            <input type="text" class="form-control" id="series" name="series" value="{{$comic->series}}">
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <input type="text" class="form-control" id="type" name="type" value="{{$comic->type}}">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" class="form-control" id="price" name="price" step="0.01" value="{{$comic->price}}">
        </div>
        <div class="mb-3">
            <label for="sale_date" class="form-label">Sale date</label>
            <input type="text" class="form-control" id="sale_date" name="sale_date" value="{{$comic->sale_date}}">
        </div>
        <div class="form-floating">
            <textarea class="form-control" placeholder="Describe it here!" id="description" name="description">{{$comic->description}}</textarea>
            <label for="description">Description</label>
        </div>

        <div class="d-grid gap-2 col-1 mx-auto mt-5">
            <button class="btn btn-primary" type="submit">Edit</button>
        </div>
    </form>

@endsection