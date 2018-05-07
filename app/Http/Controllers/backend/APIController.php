<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image as Image;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\Model\backend\CustomerModel;
use App\Model\backend\SchoolModel;
use Redirect;
use Session;
use DB;


class APIController extends Controller
{
   

   public function cdnTest(Request $request)  
   {

    return response()->json(['status'=>1, 'message'=>'Success.','err'=>'']);

  }  

   
}
