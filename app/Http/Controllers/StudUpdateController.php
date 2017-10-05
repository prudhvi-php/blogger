<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use DB;

class StudUpdateController extends Controller {

	//
	public function index(){
      $users = DB::select('select * from student');
      return view('stud_edit_view',['users'=>$users]);
   }
   public function show($id) {
      $users = DB::select('select * from student where Id = ?',[$id]);
      return view('stud_update',['users'=>$users]);
   }
   public function edit(Request $request,$id) {
      $name = $request->input('stud_name');
      DB::update('update student set Name = ? where Id = ?',[$name,$id]);
      echo "Record updated successfully.<br/>";
      echo '<a href = "/edit-records">Click Here</a> to go back.';
   }

}
