<?php
use App\Department;
use App\Discipline;
use App\State;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::any('/', function () {
	if(Auth::check())
	{
		$dept=Department::all();
		$disc=Discipline::all();
		$st=State::all();
    return view('home')->with(['msg'=>'','departments'=>$dept,'disciplines'=>$disc,'states'=>$st]);
}
return view('welcome')->with('fail','');
})->name('land');




Route::any('/home', 'HomeController@index')->name('home');

//Common
Route::group(['middleware'=>'web'],function(){


Route::any('/sendinit',['as'=>'sendinit',
		'uses'=>'Auth\RegisterController@sendinitialmail']);

Route::any('/activate',[
	'as'=>'activate',
	'uses'=>'Auth\RegisterController@postactivate'
	]);

Route::post('/signin', [
	'as' => 'login1',
	'uses' => 'Auth\LoginController@signin'
	]);

Route::any('/signup',[
	'as' => 'signup',
	'uses'=>'Auth\RegisterController@signup'
]);

Route::any('/signupland',[
'as'=>'signupland',
'uses'=>'Auth\RegisterController@signupland'
]);

Route::any('/logout', [
	'as' => 'logout',
	'uses' => 'Auth\LoginController@logout'
]);
});
Auth::routes();
Route::any('send_p',['as'=>'send_p',
	'uses'=>'Auth\RegisterController@sendprofile']);

Route::get('/forgot',['as'=>'forgot','uses'=>'Auth\RegisterController@getforgot']);
Route::post('/forgot',['as'=>'forgot','uses'=>'Auth\RegisterController@postforgot']);


Route::any('/hash/{pass}',function($pass){
        
        return Hash::make($pass);

    });
//Admin

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/email',function(){
	
	return view('email.notify')->with(['user'=>'omg.noh@gmail.com','password'=>'hahaha']);
});

//CLI Clear cache
Route::get('/clear', function() {
    $exitCode = Artisan::call('cache:clear');
    // return what you want
    return 'Done';
});