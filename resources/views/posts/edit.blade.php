@extends('welcome')

@section('content')
<div class="container mt-5">
    <h3>Create</h3>
<form action="/posts/{{$post->id}}" method="POST">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
      <div class="form-group">
        <input type="text" class="form-control" id="name" placeholder="{{$post->name}}" name="name">
      </div>
      <div class="form-group"> 
        <input type="text" class="form-control" id="about" placeholder="{{$post->about}}" name="about">
      </div>
      <button type="submit" class="btn btn-success">Update</button>
    </form>
  </div>
@endsection