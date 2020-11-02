@extends('welcome')

@section('content')
<div class="container mt-5">
    <h3>Create</h3>
    <form action="/posts" method="POST">
        {{ csrf_field() }}
      <div class="form-group">
        <input type="text" class="form-control" id="name" placeholder="Enter fullname" name="name">
      </div>
      <div class="form-group"> 
        <input type="text" class="form-control" id="about" placeholder="Tell us more about this poll" name="about">
      </div>
    
      <button type="submit" class="btn btn-default">Create</button>
    </form>
  </div>
@endsection