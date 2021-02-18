@extends('layout')

@section('content')
<form>
<div class="container">
  <h2>Add student</h2>
  <form action="addstudent" method="POST">
  
   {{ csrf_field() }}
  	
    <div class="form-group">
      <label for="id"> Id:</label>
      <input type="text" class="form-control" placeholder="Enter ID" name="student_id" size="1">
    </div>
    <div class="form-group">
      <label for="name"> Name:</label>
      <input type="text" class="form-control" placeholder="Enter Name" name="student_name">
    </div>
     <div class="form-group">
      <label for="phone">Phone:</label>
      <input type="text" class="form-control"  placeholder="Enter phone" name="student_phone">
    </div>
    <div class="form-group">
      <label for="pwd">Email:</label>
      <input type="text" class="form-control" placeholder="Enter Email" name="student_email">
    </div>
    <div class="form-group">
      <label for="email">Address:</label>
      <input type="text" class="form-control"  placeholder="Enter Address" name="student_address">
    </div>
    <div class="form-group">
      <label for="session">Session:</label>
      <input type="text" class="form-control" placeholder="Enter Session" name="student_session">
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>
</form>

@endsection