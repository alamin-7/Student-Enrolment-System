<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\http\Requests;
use DB;
use Illuminate\Support\Facades\Redirect;
use App\User;
use Session;
session_start();

class AdminController extends Controller
{
   public function admin_dashboard()
	{
       return view('admin.dashboard');
	}

   public function login_dashboard(Request $req)
   {
       //return view('admin.dashboard');
   	   $email = $req->admin_email;
   	   $password = $req->admin_password;
   	   $result = DB::table('admin')
   	   ->where('admin_email',$email)
   	   ->where('admin_password',$password)
   	   ->first();
   	   //print_r($result);

   	   if($result)
   	   {
   	   	 //return redirect::to('/admin.dashboard');
   	   	 //echo "Welcome";
   	   	 Session::put('admin_email', $result->admin_email);
   	   	 Session::put('admin_id', $result->admin_id);
   	   	 return Redirect::to('/admin_dashboard');
   	   }

   	   else
   	   {
   	   	 Session::put('exception', 'Email or Password Invalid');
   	   	 return redirect::to('/admin');
   	   }
   }

    
   public function allstudent()
   {
   	  $data = User::all();
   	  return view('admin.allstudent',['data'=>$data]);

   }

      public function show_add_student()
     {
     	return view('admin.addstudent');
     }

   public function edit($student_id)
   {
      $user = User::find($student_id);
      return view('admin.edit', compact('user'));
   }
   public function add_student(Request $req)
   {   	

    $user = new User();
  	$user->student_id = $req->student_id;
   	$user->student_name = $req->student_name;
   	$user->student_phone = $req->student_phone;
   	$user->student_email = $req->student_email;
   	$user->student_address = $req->student_address;
   	$user->student_session = $req->student_session;

   	$user->save(); 
   	print_r($req->input());
   }


   public function update(Request $req, $student_id)
   {
   	 $data = User::find($student_id);
   	 $user = $req->all();
   	 $data->update($user);
   	 return redirect('/addstudent');
   }
}
