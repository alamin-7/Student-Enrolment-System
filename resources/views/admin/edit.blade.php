@extends('layout')

@section('content')

<form>
<div class="container">
  <h2>Update</h2>
  <form action="edit" method="POST">
  
   {{ csrf_field() }}
  	
    <div class="form-group">
      <label for="id"> Id:</label>
      <input type="text" class="form-control" placeholder="Enter ID" name="student_id" value="{{$user->student_id}}">
    </div>
    <div class="form-group">
      <label for="name"> Name:</label>
      <input type="text" class="form-control" placeholder="Enter Name" name="student_name" value="{{$user->student_name}}">
    </div>
     <div class="form-group">
      <label for="phone">Phone:</label>
      <input type="text" class="form-control"  placeholder="Enter phone" name="student_phone" value="{{$user->student_phone}}">
    </div>
    <div class="form-group">
      <label for="pwd">Email:</label>
      <input type="text" class="form-control" placeholder="Enter Email" name="student_email" value="{{$user->student_email}}">
    </div>
    <div class="form-group">
      <label for="email">Address:</label>
      <input type="text" class="form-control"  placeholder="Enter Address" name="student_address" value="{{$user->student_address}}">
    </div>
    <div class="form-group">
      <label for="session">Session:</label>
      <input type="text" class="form-control" placeholder="Enter Session" name="student_session" value="{{$user->student_session}}">
    </div>
    <button type="submit" class="btn btn-default">Update</button>
  </form>

@endsection