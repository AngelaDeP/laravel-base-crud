@extends('layouts.base')

@section('pageTitle') 
{{$comic->title}}
@endsection

@section('content')

<div class="container">
    <div class="card" style="width: 20rem;">
    <img src="{{$comic->thumb}}" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">{{$comic->title}}</h5>
        <p class="card-text">{{$comic->description}}</p>
        <a href="{{route('comic.index')}}" class="btn btn-primary mt-4">Go back</a>
    </div>
    </div>
</div>

@endsection