<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CollegeFacility;
use App\Feedback;
use App\Department;
use App\Discipline;
use App\State;
use App\UserDetail;
use Illuminate\Support\Facades\Validator;
use Auth;
use Log;
class ProfileController extends Controller
{
    
    protected function viewprofile(){
    	return view('profile.display');
    }
protected function validateprofile(array $data)
    {
    	Log::info('validateprofile');
        $message=[
        'required'=>'The :attribute must not be left blank',
        'numeric'=>'The :attribute must be valid numbers'
        ];
        $rules=['phone' => 'required|numeric',
            'college_name' => 'required',
            'address' => 'required',
            'state' => 'required',
            'pincode' => 'required',
            'discipline' => 'required',
            'department' => 'required',
            
            ];
        return Validator::make($data,$rules,$message);
    }

    protected function createuserprofile(array $data)
    {
      //$key=str_random(8);
    	Log::info('createprofile');
        return UserDetail::firstOrNew([
            
        	'id'=>$data['id'],
            'name' => $data['name'],
            
            
            'email' => $data['email'],
            'phone' => $data['phone'],
            'college_name' => $data['college_name'],
            'address' => $data['address'],
            'state' => $data['state'],
            'pincode' => $data['pincode'],
            'discipline' => $data['discipline'],
            'department'=>$data['department'],
            'eyrc'=>$data['eyrc'],
            'eyic'=>$data['eyic'],
            
            'emp_field'=>$data['emp_field'],
            'emp_organization'=>$data['emp_organization'],
            'designation'=>$data['designation'],
            'salary'=>$data['salary'],
            
        ]);
    }
    
    protected function validateclgfaq(array $data)
    {
        $message=[
        'required'=>'The :attribute must not be left blank',
        
        ];
        $rules=['activity' => 'required',
            'elsi_clg' => 'required',
            'clg_faciltate'=>'required,'];
        return Validator::make($data,$rules,$message);
    }

    protected function createclgfac(array $data)
    {
      //$key=str_random(8);
        Log::info('createclgfacility');
        return CollegeFacility::firstOrNew([
            
            'id'=>$data['id'],
            'activity' => $data['activity'],
            
            
            'scenario' => $data['scenario'],
            'clg_facilitate' => $data['clg_facilitate'],
            'elsi_clg' => $data['elsi_clg'],
            'lab_timing' => $data['lab_timing'],
            'lab_incharge' => $data['lab_incharge'],
            'lab_about' => $data['lab_about'],
            
            
        ]);
    }

    protected function validatefeedback(array $data)
    {
        $message=[
        'required'=>'The :attribute must not be left blank',
        
        ];
        $rules=['q1' => 'required',
            'q2' => 'required',
            'q3' => 'required',
            'q4' => 'required',
            'q5' => 'required',
            'q6' => 'required',
            'q7' => 'required',
            'q8' => 'required',
            'q9' => 'required',
            'q10' => 'required',
            'q11' => 'required',
            'q12' => 'required',
            'q13' => 'required',
            ];
        return Validator::make($data,$rules,$message);
    }

    protected function createfeedback(array $data){
        return Feedback::firstOrNew([
                'id' => $data['id'],
                'q1'=>$data['q1'],
            'q2' => $data['q2'],
            'q3' => $data['q3'],
            'q4' => $data['q4'],
            'q5' => $data['q5'],
            'q6' => $data['q6'],
            'q7' => $data['q7'],
            'q8' => $data['q8'],
            'q9' => $data['q9'],
            'q10' => $data['q10'],
            'q11' => $data['q11'],
            'q12' => $data['q12'],
            'q13' => $data['q13'],
            'q14' => $data['q14'],
            'q15' => $data['q15'],
            'q16' => $data['q16'],
            'q17' => $data['q17'],


            ]);
    }

    protected function details(Request $request){
    	$user=Auth::user();
    	Log::info("phone=>".$request->phone);
    	$valid=self::validateprofile($request->all());
    	if($valid->fails()){
    		Log::info('validation fails');
			return back()->withErrors($valid);
    	}
    	$eyrc='No';
    	$eyic='No';
    	if(isset($request->eyrc)){
    		$eyrc=implode(',',$request->eyrc);
    	}
    	if(isset($request->eyic)){
    		$eyic=implode(',',$request->eyic);
    	}
    	
    	$data=['id'=>$user->id,
            'name' => $user->name,
            
            
            'email' => $user->email,
            'phone' => $request->phone,
            'college_name' => $request->college_name,
            'address' => $request->address,
            'state' => $request->state,
            'pincode' =>$request->pincode,
            'discipline' => $request->discipline,
            'department'=>$request->department,
            'eyrc'=>$eyrc,
            'eyic'=>$eyic,
            
            'emp_field'=>$request->emp_field,
            'emp_organization'=>$request->emp_organization,
            'designation'=>$request->designation,
            'salary'=>$request->salary];
            $user->profile=1;
            $user_profile=self::createuserprofile($data);
            Log::info('send data=>');
            if(!$user_profile->save()){
                $user->profile=0;
            	Log::info('error in user profile save');
				return back('msg','profile not saved please fill again');
        	}
			if(!$user->save()){
				Log::info('error in user save');
				return back('msg','something went wrong please try again');
			}
			Log::info('dont know what happened');
			return view('home')->with('msg','Saved Profile!!');
        }
	


    protected function clgfaq(Request $request){
        $user=Auth::user();
        $valid=$this->validateclgfaq($request->all());
        if($valid->fails()){
            return back()->withErrors($valid)->withInput();
        }
        $clg_facilitate="Null";
    	if(isset($request->clg_facilitate)){
            $clg_facilitate=implode(',',$request->clg_facilitate);
        }
        $lab_timing="Null";
        if(isset($request->lab_timing)){
            $lab_timing=implode(',',$request->lab_timing);
        }
        $data=['id'=>$user->id,
                'activity'=>$request->activity,
                'scenario'=>$request->scenario,
                'clg_facilitate'=>$clg_facilitate,
                'elsi_clg' => $request->elsi_clg,
            'lab_timing' => $lab_timing,
            'lab_incharge' => $request->lab_incharge,
            'lab_about' => $request->lab_about,
            ];
            $clgprof=$this->createclgfac($data);
            $user->clg_f=1;
            if(!$clgprof->save()){
                $user->clg_f=0;
                Log::info('error in user clgfac save');
                return back('msg','profile not saved please fill again');
            }
            if(!$user->save()){
                Log::info('error in user save after success of clgfac save update clg_f in users table');
                return back('msg','something went wrong please try again');
            }
            Log::info('I know what i did there xD');
            return view('home')->with('msg','Saved Collge Facilitate Feedback!!');

    }
    protected function feedback(Request $request){
    	$user=Auth::user();
        $valid=$this->validatefeedback($request->all());
        if($valid->fails()){
            return back()->withErrors($valid)->withInput();
        }
        $data=[
        'id' => $user->id,
                'q1'=>$request->q1,
            'q2' => $request->q2,
            'q3' => $request->q3,
            'q4' => $request->q4,
            'q5' => $request->q5,
            'q6' => $request->q6,
            'q7' => $request->q7,
            'q8' => $request->q8,
            'q9' => $request->q9,
            'q10' => $request->q10,
            'q11' => $request->q11,
            'q12' => $request->q12,
            'q13' => $request->q13,
            'q14' => $request->q14,
            'q15' => $request->q15,
            'q16' => $request->q16,
            'q17' => $request->q17,

        ];
        $feedback=$this->createfeedback($data);
        $user->feedback=1;
        if(!$feedback->save()){
            $user->feedback=0;
            return back()->with('msg', 'Sorry something went wrong please fill again' );
        }
        if(!$user->save()){
            Log::info('In feedback user save please update manually feedback column in db');
            return back()->with('msg','');
        }
        return back()->with('msg','Thank you!. The feedback has been submited successfully');
    }
}
