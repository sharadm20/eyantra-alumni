<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Datatables;
use App\User;
use App\Model\CollegeFacility;
use App\Model\UserDetail;
use App\Model\Feedback;
use Lava;
use Log;
use App\Model\AllFeed;
//Only Accessible with Auth::user()->role=1
//Used this view for datatable generating
/*create view `full_feedback` as SELECT ud.`name`,ud.`email`,ud.`phone`,ud.`college_name`,ud.`address`,ud.`state`,ud.`pincode`,ud.`discipline`,ud.`department`,ud.`eyic`,ud.`eyrc`,ud.`emp_field`,ud.`emp_organization`,ud.`designation`,ud.`salary`,fb.`q1`,fb.`q2`,fb.`q3`,fb.`q4`,fb. `q5`,fb.`q6`,fb.`q7`,fb.`q8`,fb.`q9`,fb.`q10`,fb.`q11`,fb.`q12`,fb.`q13`,fb.`q14`,fb.`q15`,fb.`q16`,fb.`q17` FROM user_details AS ud INNER JOIN feedbacks AS fb ON ud.`id` = fb.`id`;
*/
class AdminController extends Controller
{
    //landing view page
    protected function landresponse(){
    	//return view('datatables.response');
        return view('admin.response_chart');
    }
    //return ajax query of userdetail
    protected function viewresponse(){
    	return Datatables::of(UserDetail::query())->make(true);;
    }
    //return feedback query
    protected function viewfeedback(){

    	return Datatables::of(Feedback::query())->make(true);
    }
    
    //random LineChart using LavaCharts
    protected function drawcharts(){
    	//Log::info("Creating a random chart for example");
    	$feed=AllFeed::all();
    	Log::info('All Feeds'.$feed);
    	$data = Lava::DataTable();
    	$data->addDateColumn('Day of Month')
            ->addNumberColumn('Projected')
            ->addNumberColumn('Official');

		// Random Data For Example
			for ($a = 1; $a < 30; $a++) 
			{
    		$rowData = [
      		"2017-4-$a", rand(800,1000), rand(800,1000)
    		];

    		$data->addRow($rowData);
			}
		Lava::LineChart('Stocks', $data, [
    			'title' => 'Stock Market Trends',
    			'animation' => [
        		'startup' => true,
        		'easing' => 'inAndOut'
    			],
    		'colors' => ['blue', 'red']
			]);
			//Log::info("test-case");
		return view('examples.linechart');

	}
	protected function userFeeds(){
		return view('admin.userdetail');
	}
    protected function responseQ1(Request $request){
        Log::info('in function');
        $q=$request->get('que');
        $sd=Feedback::where('q'.$q,1)->count();
        $d=Feedback::where('q'.$q,2)->count();
        $n=Feedback::where('q'.$q,3)->count();
        $a=Feedback::where('q'.$q,4)->count();
        $sa=Feedback::where('q'.$q,5)->count();
        $data=[$sd,$d,$n,$a,$sa];
        Log::info(print_r($data,true));
        return json_encode($data);
    }

    protected function viewAlumni(){
        $all=UserDetail::all();
        return view('admin.alumni_detail')->with('all',$all);
    }

    protected function eyrc14(){
        $eyrc=DB::table('eyrc14.teamGrades')
                        ->leftjoin('eyrc14.teammemberdetail as tmd','tmd.teamId','=','eyrc14.teamGrades.teamId')
                        ->leftjoin('eyrc14.login as lg','lg.username','=','tmd.email')
                        ->leftjoin('eyrc14.teamcollege as tc','tc.loginId','=','lg.id')
                        ->select('tmd.name','tmd.email','tmd.contact','tc.state','tc.collegeName','tc.pincode','tmd.branch','tmd.year','tmd.gender','tmd.address')
                        ->where('eyrc14.teamGrades.certificate_level',1)
                        ->get();
                        $count=0;
                       foreach($eyrc as $eyr){
                        $user=new UserDetail;
                        $user->name=$eyr->name;
                        $user->email=$eyr->email;
                        $user->phone=$eyr->contact;
                        $user->college_name=$eyr->collegeName;
                        $user->address=$eyr->address;
                        $user->state=$eyr->state;
                        $user->pincode=$eyr->pincode;
                        $user->department=$eyr->branch;
                        $user->gender=$eyr->gender;
                        $user->eyrc='eyrc-2014';
                        $user->save();
                        $count++;
                       } 
                    return $count;
    }

    protected function eyrc15(){
                $eyrc=DB::table('eyrc15.team_grades')
                        ->leftjoin('eyrc15.team_member_detail as tmd','tmd.team_id','=','eyrc15.team_grades.team_id')
                        ->leftjoin('eyrc15.team_details as td','td.id','=','tmd.team_id')
                        ->leftjoin('eyrc15.college_list as tc','tc.id','=','td.college_id')
                        ->leftjoin('eyrc15.departments as dep','dep.id','=','tmd.department_id')
                        ->leftjoin('eyrc15.discipline as dis','dis.id','=','tmd.discipline_id')
                        ->select('tmd.name','tmd.email','tmd.contact','tc.state','tc.college_name','tc.pincode','dep.name as department','dis.discipline_name','tmd.year','tmd.gender','tmd.address')
                        ->where('eyrc15.team_grades.certificate_level',1)
                        ->get();
                        $count=0;
                                   
                       foreach($eyrc as $eyr){
                        try{
                            $exist=UserDetail::where('email',$eyr->email)->first();
                            if(!$exist){
                                $user=new UserDetail;
                                $user->name=$eyr->name;
                                $user->email=$eyr->email;
                                $user->phone=$eyr->contact;
                                $user->college_name=$eyr->college_name;
                                $user->address=$eyr->address;
                                $user->state=$eyr->state;
                                $user->pincode=$eyr->pincode;
                                $user->department=$eyr->department;
                                $user->discipline=$eyr->discipline_name;
                                $user->gender=$eyr->gender;
                                $user->eyrc='eyrc-2015';
                                $user->save();
                            $count++;
                            }
                        else{    
                         $user=UserDetail::where('email',$eyr->email)->first();
                                $user->eyrc=$user->eyrc.',eyrc-2015';
                                $user->save();
                            }
                         }
                         catch(Exception $e){
                            Log::debug('Already in DB',$e);
                         }   
                       } 
                    return $count;
            }

    protected function eyrc16(){
        $eyrc=DB::table('eyrc16.team_details')
                        ->leftjoin('eyrc16.team_member_detail as tmd','tmd.team_id','=','eyrc16.team_details.id')
                        ->leftjoin('college_master_list.college_list as tc','tc.clg_code','=','eyrc16.team_details.college_id')
                        ->leftjoin('eyrc16.departments as dep','dep.id','=','tmd.department_id')
                        ->leftjoin('eyrc16.discipline as dis','dis.id','=','tmd.discipline_id')
                        ->select('tmd.name','tmd.email','tmd.contact','tc.state','tc.college_name','tc.pincode','dep.name as department','dis.discipline_name','tmd.year','tmd.gender','tmd.address')
                        ->where('eyrc16.team_details.cert_level',1)
                        ->get();
                        $count=0;
                $predtl=UserDetail::all();             
                       foreach($eyrc as $eyr){
                        try{
                          $exist=UserDetail::where('email',$eyr->email)->first();      
                        if(!$exist){    
                        $user=new UserDetail;
                        $user->name=$eyr->name;
                        $user->email=$eyr->email;
                        $user->phone=$eyr->contact;
                        $user->college_name=$eyr->college_name;
                        $user->address=$eyr->address;
                        $user->state=$eyr->state;
                        $user->pincode=$eyr->pincode;
                        $user->department=$eyr->department;
                        $user->discipline=$eyr->discipline_name;
                        $user->gender=$eyr->gender;
                        $user->eyrc='eyrc-2016';
                        $user->save();
                        $count++;
                        }
                        else{
                                $user=UserDetail::where('email',$eyr->email)->first();
                                $user->eyrc=$user->eyrc.',eyrc-2016';
                                $user->save();
                                }
                         }
                         catch(Exception $e){
                            Log::debug('Already in DB',$e);
                         }   
                     }
                    return $count;
    }  

    protected function eyrc17(){
        $eyrc=DB::table('eyrc17.team_details')
                        ->leftjoin('eyrc17.team_member_detail as tmd','tmd.team_id','=','eyrc17.team_details.id')
                        ->leftjoin('college_master_list.college_list as tc','tc.clg_code','=','eyrc17.team_details.college_id')
                        ->leftjoin('eyrc17.departments as dep','dep.id','=','tmd.department_id')
                        ->leftjoin('eyrc17.discipline as dis','dis.id','=','tmd.discipline_id')
                        ->select('tmd.name','tmd.email','tmd.contact','tc.state','tc.college_name','tc.pincode','dep.name as department','dis.discipline_name','tmd.year','tmd.gender','tmd.address')
                        ->where('eyrc17.team_details.cert_level',1)
                        ->get();
                        $count=0;
                         
                       foreach($eyrc as $eyr){
                        try{
                        $exist=UserDetail::where('email',$eyr->email)->first();        
                            if(!$exist){    
                                $user=new UserDetail;
                                $user->name=$eyr->name;
                                $user->email=$eyr->email;
                                $user->phone=$eyr->contact;
                                $user->college_name=$eyr->college_name;
                                $user->address=$eyr->address;
                                $user->state=$eyr->state;
                                $user->pincode=$eyr->pincode;
                                $user->department=$eyr->department;
                                $user->discipline=$eyr->discipline_name;
                                $user->gender=$eyr->gender;
                                $user->eyrc='eyrc-2017';
                                $user->save();
                                $count++;
                        }
                            else{
                        $user=UserDetail::where('email',$eyr->email)->first();
                        $user->eyrc=$user->eyrc.',eyrc-2017';
                        $user->save();
                            }
                         }
                         catch(Exception $e){
                            Log::debug('Already in DB',$e);
                         }   
                    }     
                    return $count;
    }  

    protected function eyic16(){
        $ids=DB::table('eyic2016.eyic_project_dtls as epd')->where('epd.project_status',9)->get();
        $id=array();
        foreach($ids as $stu ){
            $a=array_push($id,$stu->student1_id);
            $a=array_push($id,$stu->student2_id);
            $a=array_push($id,$stu->student3_id);
            if($stu->student4_id!=null){
            $a=array_push($id,$stu->student4_id);
            }
        }
        //Log::info(print_r($id,true));
        $eyic=DB::table('eyic2016.elsi_students_dtls as esd')
                ->leftjoin('college_master_list.college_list as cl','cl.elsi_clg_id','=','esd.clg_id')
                ->select('esd.name','esd.email_id','esd.contact_num','esd.address','esd.branch','esd.degree','esd.gender','cl.college_name','cl.pincode','cl.state')
                ->whereIn('esd.id',$id)
                ->get();
                //Log::info($eyic);
          foreach($eyic as $ey){
            $exist=UserDetail::where('email',$ey->email_id)->first();
            if(!$exist){
               $user=new UserDetail;
                $user->name=$ey->name;
                $user->email=$ey->email_id;
                $user->phone=$ey->contact_num;
                $user->college_name=$ey->college_name;
                $user->address=$ey->address;
                $user->state=$ey->state;
                $user->pincode=$ey->pincode;
                $user->department=$ey->branch;
                $user->discipline=$ey->degree;
                $user->gender=$ey->gender;
                $user->eyic='eyic-2016';
                $user->save();
            }
            else{
                $exist->eyic='eyic-2016';
                $exist->save();
            }

          }  
          return $eyic;    
    }

    protected function eyic17(){
              $ids=DB::table('eyic2017.eyic_project_dtls as epd')->where('epd.project_status',12)->pluck('id');
       
           // Log::info($ids);
                $eyic=DB::table('eyic2017.elsi_students_dtls as esd')
                        ->leftjoin('college_master_list.college_list as cl','cl.elsi_clg_id','=','esd.clg_id')
                        ->select('esd.name','esd.email_id','esd.contact_num','esd.address','esd.branch','esd.degree','esd.gender','cl.college_name','cl.pincode','cl.state')
                        ->whereIn('esd.project_id',$ids)
                        ->get();
                        //Log::info($eyic);
                  foreach($eyic as $ey){
                    $exist=UserDetail::where('email',$ey->email_id)->first();
                    if(!$exist){
                       $user=new UserDetail;
                        $user->name=$ey->name;
                        $user->email=$ey->email_id;
                        $user->phone=$ey->contact_num;
                        $user->college_name=$ey->college_name;
                        $user->address=$ey->address;
                        $user->state=$ey->state;
                        $user->pincode=$ey->pincode;
                        $user->department=$ey->branch;
                        $user->discipline=$ey->degree;
                        $user->gender=$ey->gender;
                        $user->eyic='eyic-2017';
                        $user->save();
                         }
                    else{
                        if($exist->eyic=='No'){
                        $exist->eyic='eyic-2017';
                        $exist->save();
                            }
                        else{
                            $exist->eyic=$exist->eyic.',eyic-2017';
                        $exist->save();
                         }
                        }

                    }  
                  return $eyic; 
    }

    protected function eyic18(){
            $ids=DB::table('eyic2018.eyic_project_dtls as epd')->where('epd.project_status',14)->pluck('id');
       
           // Log::info($ids);
            $eyic=DB::table('eyic2018.eyic_students_dtls as esd')
                ->leftjoin('college_master_list.college_list as cl','cl.elsi_clg_id','=','esd.clg_id')
                ->select('esd.name','esd.email_id','esd.contact_num','esd.address','esd.branch','esd.degree','esd.gender','cl.college_name','cl.pincode','cl.state')
                ->whereIn('esd.proj_id',$ids)
                ->get();
                //Log::info($eyic);
          foreach($eyic as $ey){
            $exist=UserDetail::where('email',$ey->email_id)->first();
            if(!$exist){
               $user=new UserDetail;
                $user->name=$ey->name;
                $user->email=$ey->email_id;
                $user->phone=$ey->contact_num;
                $user->college_name=$ey->college_name;
                $user->address=$ey->address;
                $user->state=$ey->state;
                $user->pincode=$ey->pincode;
                $user->department=$ey->branch;
                $user->discipline=$ey->degree;
                $user->gender=$ey->gender;
                $user->eyic='eyic-2018';
                $user->save();
                 }
            else{
                if($exist->eyic=='No'){
                $exist->eyic='eyic-2018';
                $exist->save();
                }
                else{
                    $exist->eyic=$exist->eyic.',eyic-2017';
                $exist->save();
                }
            }

          }  
          return $eyic; 
    }
}