<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Discipline;
use App\Department;
use Input;
use Log;
use Validator;
use Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    protected function validator(array $data)
    {
        $message=[
        'required'=>'The :attribute must not be left blank',
        
        ];
        $rules=['email' => 'required|email',
            'password' => 'required',];
        return Validator::make($data,$rules,$message);
    }

    protected function signin(){
       //Log::info("data".var_dump(request()->all()));
        $valid=$this->validator(request()->all());
    if($valid->fails())
    {
        Log::info("inside valid if");
       return redirect()->route('land')->withErrors($valid)->withInput();
    
    }
    //$us=New User();
   // $us->email=request()->get('email');
   // $us->password=request()->get('password');
    $discipline=Discipline::all();
        Log::info("discipline :".$discipline);
        $department=Department::all();
        Log::info("dept :".$department);
    try{
     if(Auth::attempt(['email' => request()->get('email'), 'password' => request()->get('password')])){
    }
    Log::info("Auth attempt if".Auth::user());
        if(Auth::user()->reset==0){
            Log::info("reset password #if section#");
            return view('profile.reset');
        }
    return view('home')->with(['msg','','discilines'=>$disciline,'departments'=>$department]);
    }
    catch(Exception $err){
        Auth::logout();
        return redirect()->route('land');
    }
    
   // Log::info("debug");
   // return view('welcome')->with('fail','Incorrect Username/Password');
    }
    public function logout(){
        Auth::logout();
        
        return view('logout')->with('success', 'You have successfully logged out.');
    }
    //end of
}
