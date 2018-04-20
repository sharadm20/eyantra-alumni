<?php

namespace App\Http\Controllers;
use Auth;
use App\Model\Department;
use App\Model\Discipline;
use App\Model\State;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        if(Auth::user()->role==1){
        return view('admin.index');
        }
        else{
           if(Auth::check())
            {
         $dept=Department::all();
         $disc=Discipline::all();
         $st=State::all();
            return view('home')->with(['msg'=>'','departments'=>$dept,'disciplines'=>$disc,'states'=>$st]);
            }
            return view('welcome')->with('fail','');
        }
    }
}
