<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
Route::get('/', function () {
   return 'Hello World';
});
Route::get('ID/{id}',function($id){
   echo 'ID: '.$id;
});
Route::get('/user/{name?}',function($name = 'Virat Gandhi'){
   echo "Name: ".$name;
});
Route::get('/role',[
   'middleware' => 'Role:editor',
   'uses' => 'TestController@index',
]);
Route::get('/usercontroller/path',[
	'middleware' => 'First',
	'uses' => 'UserController@showPath'
]);
Route::resource('my', 'MyController');
Route::controller('test', 'ImplicitController');
class MyClass{
	public $foo = 'bar';
}
Route::get('/myclass', 'ImplicitController@index');
Route::get('/foo/bar', 'UriController@index');
Route::get('/register', function(){
	return view('register');
});
Route::post('/user/register', array('uses' => 'UserRegistration@postRegister'));
Route::get('/basic_response', function(){
	return 'Hello World';
});
Route::get('/header', function(){
	return response("Hello", 200)->header('Content-Type', 'text/html');
});
Route::get('/cookie', function(){
	return response('Hello', 200)->header('Content-Type', 'text/html')
	->withcookie('name', 'Virat Gandhi');
});
Route::get('json',function(){
   return response()->json(['name' => 'Virat Gandhi', 'state' => 'Gujarat']);
});
Route::get('test', ['as'=>'testing',function(){
	return view('test2');
}]);
Route::get('/test2', function(){
	return view('test2');
});
Route::get('blade', function () {
   return view('page',array('name' => 'Virat Gandhi'));
});
Route::get('redirect',function(){
   return redirect()->route('testing');
});
Route::get('rr','RedirectController@index');
Route::get('/redirectcontroller',function(){
   return redirect()->action('RedirectController@index');
});
Route::get('insert','StudInsertController@insertform');
Route::post('create','StudInsertController@insert');
Route::get('view-records','StudViewController@index');
Route::get('edit-records','StudUpdateController@index');
Route::get('edit/{id}','StudUpdateController@show');
Route::post('edit/{id}','StudUpdateController@edit');
Route::get('delete-records','StudDeleteController@index');
Route::get('delete/{id}','StudDeleteController@destroy');

Route::get('/form',function(){
   return view('form');
});

Route::get('session/get','SessionController@accessSessionData');
Route::get('session/set','SessionController@storeSessionData');
Route::get('session/remove','SessionController@deleteSessionData');
Route::get('/validation','ValidationController@showform');
Route::post('/validation','ValidationController@validateform');

Route::get('testuser/profile', ['as' => 'profile', function () {
    //
    return 'profile page';
}]);