<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class UserRegistration extends Controller {

	//
	public function postRegister(Request $request){
		$name = $request->input('name');
	    echo 'Name: '.$name;
	    echo '<br>';
	      
	      //Retrieve the username input field
	      $username = $request->username;
	      echo 'Username: '.$username;
	      echo '<br>';
	      
	      //Retrieve the password input field
	      $password = $request->password;
	      echo 'Password: '.$password;
	}

}
