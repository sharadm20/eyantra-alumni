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
// Route::any('/',[
// 	'as'=>'index',
// 	'uses'=>'HomeController@index'
// 	]);
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
Route::group(['middleware'=>'auth','middleware'=>'web'],function(){

Route::any('/activate',[
	'as'=>'activate',
	'uses'=>'Auth\RegisterController@postactivate'
	]);

/*Route::any('/getdetails',[
	'as' => 'opdetails',
	'uses'=>'ProfileController@opdetails'
]);

Route::any('/getclgfaq',[
'as'=>'opclgfaq',
'uses'=>'ProfileController@opclgfaq'
]);

Route::any('/getfeedback',[
'as'=>'opfeedback',
'uses'=>'ProfileController@opfeedback'
]);*/

Route::any('/profile',[
'as'=>'viewprofile',
'uses'=>'ProfileController@viewprofile'

	]);

Route::any('/details',[
	'as' => 'details',
	'uses'=>'ProfileController@details'
]);

Route::any('/clgfaq',[
'as'=>'clgfaq',
'uses'=>'ProfileController@clgfaq'
]);

Route::any('/feedback',[
'as'=>'feedback',
'uses'=>'ProfileController@feedback'
]);

Route::any('/logout', [
	'as' => 'logout',
	'uses' => 'Auth\LoginController@logout'
]);
});

Route::any('/signin', [
	'as' => 'login1',
	'uses' => 'Auth\LoginController@signin'
	]);

Route::any('send_p',['as'=>'send_p',
	'uses'=>'Auth\RegisterController@sendprofile']);

Route::get('/forgot',['as'=>'forgot','uses'=>'Auth\RegisterController@getforgot']);

Route::post('/forgot',['as'=>'forgot','uses'=>'Auth\RegisterController@postforgot']);

Route::any('/getstr',function(){
	return str_random(8);
});

//Admin

Route::group(['middleware'=>'admin'],function(){
	
Route::any('/sendemail',[
		'as'=>'sendinit',
		'uses'=>'Auth\RegisterController@sendinitialmail'
		]);

Route::get('/checktestemail',function(){	
	return view('email.notify')->with(['email'=>'testmail@gmail.com','password'=>'hahaha']);
	});

//CLI Clear cache
Route::get('/clear', function() {
    $exitCode = Artisan::call('cache:clear');
    // return what you want
    return 'Done';
	});


Route::any('/response',[
	'as'=>'response',
	'uses'=>'Admin\AdminController@landresponse'
	]);

Route::any('/datauserdetail',[
	'as'=>'viewresponse',
	'uses'=>'Admin\AdminController@viewresponse'
	]);

Route::any('/datauserfeedback',[
	'as'=>'viewfeedback',
	'uses'=>'Admin\AdminController@viewfeedback'
	]);

Route::any('/draw',[
	'as'=>'draw',
	'uses'=>'Admin\AdminController@drawcharts'
	]);
Route::any('/userdetail',[
	'as'=>'usrdtls',
	'uses'=>'Admin\AdminController@userFeeds'
	]);

Route::any('/response_q1',[
	'as'=>'res_q1',
	'uses'=>'Admin\AdminController@responseQ1'
	]);
/*Route for alumni data fetching from DB

Route::any('/eyrc14',[
	'as'=>'eyrc14',
	'uses'=>'Admin\AdminController@eyrc14'
	]);
	
Route::any('/eyrc15',[
	'as'=>'eyrc15',
	'uses'=>'Admin\AdminController@eyrc15'
	]);
Route::any('/eyrc16',[
	'as'=>'eyrc16',
	'uses'=>'Admin\AdminController@eyrc16'
	]);
Route::any('/eyrc17',[
	'as'=>'eyrc17',
	'uses'=>'Admin\AdminController@eyrc17'
	]);			
Route::any('/eyic16',[
	'as'=>'eyic16',
	'uses'=>'Admin\AdminController@eyic16'
	]);	
Route::any('/eyic17',[
	'as'=>'eyic17',
	'uses'=>'Admin\AdminController@eyic17'
	]);	
Route::any('/eyic18',[
	'as'=>'eyic18',
	'uses'=>'Admin\AdminController@eyic18'
	]);	
*/
Route::any('/viewAlumni',[
	'as'=>'viewalumni',
	'uses'=>'Admin\AdminController@viewAlumni'
	]);

});
Route::any('/hash/{pass}',function($pass){
        return Hash::make($pass);
    });

//Route::get('/home', 'HomeController@index')->name('home');
