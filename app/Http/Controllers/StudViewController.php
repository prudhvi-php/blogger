<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use DB;

class StudViewController extends Controller {

	//
	public function index(){
		$users = DB::select('select * from student');
		return view('stud_view',['users'=>$users]);
	}

}
