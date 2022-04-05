@extends('layouts.base')

@section('pageTitle', 'Archivio dei fumetti')

@section('content')

  <div class="container">

    <table class="table">
      <thead>
        <tr>
          <th scope="col">Comic Cover</th>
          <th scope="col">Title</th>
          <th scope="col">Series</th>
          <th scope="col">Type</th>
          <th scope="col">Price</th>
          <th scope="col">Description</th>
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
          </tr>
        @endforeach
      </tbody>
    </table>

  </div>

@endsection