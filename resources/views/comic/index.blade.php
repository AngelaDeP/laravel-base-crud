@extends('layouts.base')

@section('pageTitle', 'Archivio dei fumetti')

@section('content')

  <div class="container">

    <h1>Comic List</h1>

    <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-5">
      <a href="{{route('comic.create')}}" class="btn btn-outline-info">Add you comic</a>
    </div>

    <table class="table">
      <thead>
        <tr>
          <th scope="col">Comic Cover</th>
          <th scope="col">Title</th>
          <th scope="col">Series</th>
          <th scope="col">Type</th>
          <th scope="col">Price</th>
          <th scope="col">Description</th>
          <th scope="col">Go to details</th>
        </tr>
      </thead>
      <tbody>

        @foreach ($comics as $comic)
          <tr>
            <td>
              <img src="{{$comic->thumb}}" alt="">
            </td>
            <td>{{$comic->title}}</td>
            <td>{{$comic->series}}</td>
            <td>{{$comic->type}}</td>
            <td>{{$comic->price}}</td>
            <td>{{$comic->description}}</td>
            <td>
              <a href="{{route('comic.show', $comic->id )}}" class="btn btn-primary mt-4">Details</a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>

  </div>

@endsection