<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class UriController extends Controller {

	//
	public function index(Request $request){
		$path = $request->path();
		echo "Path Method: ".$path;
		echo "<br/>";

		$pattern = $request->is('foo/*');
		echo "is Method: ".$pattern;
		echo "<br/>";

		$url = $request->url();
		echo "URL Method: ".$url;
	}

}
