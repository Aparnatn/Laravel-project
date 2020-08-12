@extends('layout')
@section('title','Contact')
@section('content')
<div class="container">
    <h2>Contact Us through</h2>
    
    <form action="customers" method="POST">
      <div class="form-group">
        <label for="usr">Name:</label>
        <input type="text" class="form-control" id="usr" name="username">
      </div>
      <div class="form-group">
        <label for="phone">Phone:</label>
        <input type="phone" class="form-control" id="phone" name="phone">
      </div>
      <div class="form-group">
        <label for="comment">Address:</label>
        <textarea class="form-control" rows="5" id="comment" name="text"></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
  
@endsection