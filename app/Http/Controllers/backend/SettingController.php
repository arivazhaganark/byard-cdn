<?php

namespace App\Http\Controllers\backend;

use App\Model\backend\User;
use App\Model\backend\Setting;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

class SettingController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }
     protected function validator(array $data)
    {
        return Validator::make($data, [
            'firstname' => 'required|max:255',
            'from_email' => 'required|email|max:255|unique:email',
            'support_email' => 'required|email|max:255|unique:email'
        ]);
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $setting = Setting::select('*')->where('id', 1)->get();
        return view('backend.setting', compact('setting'));
    }

    public function store(Request $request) 
    {
        $inputs = $request->all();
        $data = array(
            'from_email' => $inputs['from_email'],
            'from_email_display_name' => $inputs['from_email_display_name'],
            'support_email' => $inputs['support_email'],
            'facebook_link' => $inputs['facebook_link'],
            'twitter_link' => $inputs['twitter_link'],
            'youtube_link' => $inputs['youtube_link'],
            'header_script' => htmlentities($inputs['header_script']),
            'footer_script' => htmlentities($inputs['footer_script'])
        );
        $update_cnt = Setting::select('*')->where('id', 1)->update($data);
        Session::flash('message', 'Admin Settings has been updated successfully.');
        Session::flash('alert-class', 'alert-success');
        return redirect('admin/setting');
    }
    
}
