<?php

namespace App\Http\Controllers\backend;

//use App\User;
use App\Model\backend\CustomerModel;
use App\Model\backend\CustomerKeyMapModel;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    
    public function home()
    {        
         $user = CustomerModel::get();
         $userCnt = CustomerModel::get()->count();
 
          $voice=CustomerKeyMapModel::where('lin_id',1)->sum('package_max_cnt')  ;  
         $voiceScreen=CustomerKeyMapModel::where('lin_id',2)->sum('package_max_cnt')  ;    
          $voiceVideo=CustomerKeyMapModel::where('lin_id',3)->sum('package_max_cnt')  ;  
        return view('backend.home', compact('user','userCnt','voice','voiceScreen','voiceVideo'));        
    }
    
}
