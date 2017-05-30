<?php

namespace App\Http\Controllers\Auth;
use Input;
use Request;
use Hash;
use Mail;
use Log;
use Auth;
use App\Discipline;
use App\Department;
use App\State;
use App\User;
use App\Mail\AccountCreate;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('guest');
    // }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        //Log::info("data".var_dump($data));
    $messages = ['required' => 'The :attribute must not be left blank',
    
    
    'alpha_num' => 'This :attribute field must contain a number or a letter',
    
    'min'=> 'This :attribute must be atleast :min size',
                ];
          $rules=[
            'name' => 'required|string|max:255',
            
            'password' => 'required|alpha_num|min:6',
            'repass'=>'required|alpha_num|min:6|same:password',
            
          ];
        return Validator::make($data,$rules,$messages);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function createuser(array $data)
    {
      //$key=str_random(8);
        return User::create([
            'name' => $data['name'],
            
            
            'password' => bcrypt($data['password']),
            'reset' =>1,
            'email_sent'=>1,
            
        ]);
    }
    //****DEPRECATED**********//
/*
    protected function  signup()
    {
        return view('profile.signup');
    }*/

    /*protected function signupland()
    {
        //var data=[];
        $valid=$this->validator(request()->all());
        
      //dd($valid->fails());
        if($valid->fails()){
            return redirect()->route('signup')->withErrors($valid)->withInput();
        }
        else
        {
            //$category=implode(",",request()->get('category'));
        
        //dd($category);
        $data=array('name'=>request()->get('name'),
            
            'password'=>request()->get('password'));
            
            
              self::createuser($data)->save();
              return view('home')->with('msg','The Password for your profile successfully set');
          }
      }*/

      protected function postactivate()
      {
        Log::info('post activate');
        $discipline=Discipline::all();
        Log::info("discipline :".$discipline[0]);
        $department=Department::all();
        Log::info("dept :".$department[0]);
        $state=State::all();
        //$string = implode(';', Input::get('name'));
        Log::info("request param::".Input::get('name'));
        $data=['name'=>Input::get('name'),'password'=>Input::get('password'),'repass'=>Input::get('repass')];
        $valid=$this->validator($data);
        if($valid->fails()){
            return view('profile.reset')->withErrors($valid);
        }
        else{
          $user=Auth::user();
          $user->name=$data['name'];
          $user->reset=1;
          $user->password=bcrypt($data['password']);
          if(!$user->save()){
            return redirect()->route('logout');
          }
        return view('home')->with(['disciplines'=>$discipline,'departments'=>$department,'msg'=>'Password Set Succesfully','states'=>$state]);
        }
        //
      }    

          //landing page for forgot pwd/email
      protected function getforgot()
      {
        $flag=0;
        return view('profile.forgot')->with('flag');
      }
      //after submitting email
      protected function postforgot()
      {
        //return view('profile.forgot');
        $flag=1;
        $email=request()->get('email');
        //variables to be always if added in response is attached with "with" in quotes
        return view('profile.forgot')->with('flag');
        
      }   

/**************************************************************
***************Send Email From Our Databases to Alumni ******
*************************************************************
*/
protected function sendinitialmail()
{
  Log::info("initmail");
  if(Auth::user()->role!=1){
    Log::info("if:role not admin");
    return view('home')->with('msg','Not authorised to do this');
  }
  $users=User::where('email_sent',0)->get();
  //dd($users);
 // Log::info("dump".$users[0]['email']);
  Log::info("Users".count($users));
  if(count($users) == 0){
      return view('home')->with('msg','Email Already sent to all members');
    }
    $count=0;
  foreach ($users as $user) {
# send mail to user 1 by 1...
    $password=str_random(8);
    //Log::info("pass".$password);
    Log::info("for".$user->email);
    $user->password=Hash::make($password);
    //if($user->verify_token == Null || empty($user->verify_token)){
      $new_token = str_random(50);
      $user->remember_token = $new_token;
    
    if(self::sendmail($user,$password)){
      $count++;
      Log::info("Email sent to".$user->email);
      $user->email_sent=1;
      if(!$user->save()){
        Log::error('User not save to database'.$user->email);
        //return redirect()->route('home')->with('error','Unable to save the user to db');
      }
    }
  }
  Log::info("Number of emails sent".$count);
return view('home')->with('msg','The email has been sent');
}

//send mail to the user
protected function sendmail($user,$password){
  //dd($password);
  Log::info("pass ".$password);
  Log::info('for '.$user->email);
  $flag=0;
  try{
    //dd($user);
    $data=['email'=>$user->email,'password'=>$password];
  Mail::to($user)->send(new AccountCreate($data));
  $flag=1;
  Log::info("flag".$flag);
}
catch(Exception $e){
Log::info('Mail not sent to'.$user->email);

}
return $flag;

}

    }
