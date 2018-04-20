<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Model\Discipline;
use App\Model\Department;
use App\Model\State;
use Input;
use Log;
use Validator;
use Auth;
use Session;

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
    protected $redirectTo = '/';

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
    $valid=$this->validator(request()->all());
    if($valid->fails())
    {
       return redirect()->route('index')->withErrors($valid)->withInput();
    }
    
    $state=State::all();
    $discipline=Discipline::all();
    $department=Department::all();
       try{
            if(Auth::attempt(['email' => request()->get('email'), 'password' => request()->get('password'), 'role' => 0])){
            return view('home')->with(['msg'=>'','disciplines'=>$discipline,'departments'=>$department,'states'=>$state]);
            }

            if(Auth::attempt(['email' => request()->get('email'), 'password' => request()->get('password'), 'role' => 1])){
                //Log::info('Role 1');
            return view('admin.index')->with('msg',"");
            }
    return redirect()->back()->withErrors(['email'=>'invalid email/password']);
        }
    catch(Exception $err){
       $this->logout();
        }
    }
    
    public function logout(){
        Auth::logout();
        Session::flush();
        return view('logout')->with('success', 'You have been logged out.');
        }
    //end 
}