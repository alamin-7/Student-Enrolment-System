@extends('layout')

@section('content')
<htm>
	<head>
		<link rel="stylesheet" href="{{asset('css/allstudenttable.css')}}">
	</head>


<div class="container">
    
    <div class="row">
        <div class="panel panel-primary filterable">
            <div class="panel-heading">
                <h3 class="panel-title">Admin</h3>
                <div class="pull-right">
                    <button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> Filter</button>
                </div>
            </div>
            <table class="table">
                <thead>
                    <tr class="filters">
                        <th><input type="text" class="form-control" placeholder="#" disabled></th>
                        <th><input type="text" class="form-control" placeholder="First Name" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Last Name" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Username" disabled></th>
                    </tr>
                </thead>
                <tbody>
                 <tr>
		           <th>Student ID</th><th>Student Name</th><th>Student Email</th><th>Student Phone</th><th>Student Address</th><th>Student Session</th><th>Perform Action</th>
	            </tr>
	            @foreach($data as $d){
                <tr>
                  <td>{{ $d -> student_id}}</td>
                  <td>{{ $d -> student_name}}</td>
                  <td>{{ $d -> student_email}}</td>
                  <td>{{ $d -> student_phone}}</td>
                  <td>{{ $d -> student_address}}</td>
                  <td>{{ $d -> student_session}}</td>
                  <td><a href="/addstudent/{{$d->student_id}}/edit">Edit</a>
                  <a href="/addstudent/{{$d->student_id}}/edit">View</a>
                  <a href="/addstudent/{{$d->student_id}}/edit">Delete-</a>
                 </td>
                  </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection