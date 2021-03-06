<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use DB;

class StudDeleteController extends Controller {

	//
	public function index(){
      $users = DB::select('select * from student');
      return view('stud_delete_view',['users'=>$users]);
   }
   public function destroy($id) {
      DB::delete('delete from student where Id = ?',[$id]);
      echo "Record deleted successfully.<br/>";
      echo '<a href="/delete-records">Click Here</a> to go back.';
   }
}
