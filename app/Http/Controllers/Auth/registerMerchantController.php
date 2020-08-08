<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\registerMerchant;
use App\Post;
// use View as View;
// use Mail as Mail;
// use Route;
// use Auth;
// use URL;
// use Session;

class registerMerchantController extends Controller
{
    public function __construct(){
        $this->_register = new registerMerchant();
    }

    public function register_index(Request $request){
        echo 'came her in register '.$request->input('id');exit;
        return view('auth.register',compact('data'));
    }

    public function register_merchant(Request $request, $d,$fcmid){
        echo $d.' '.$fcmid;
        print_r($request);
        echo $request->input('id');exit;
    }

    public function register_merchant_post(Request $request){        
        //echo $request->method();
        print_r($request->input());exit;
    }    

    public function api_register_merchant(Request $request){
        //print_r($this->_register);exit;
        //print_r($request->input('mobile_no'));exit;

        $this->postdata['name'] = $request->input('name');
        $this->postdata['mobile_no'] = $request->input('mobile_no');
        $this->postdata['email'] = $request->input('email');
        $this->postdata['created_date'] = date('Y-m-d H:i:s');
        $this->postdata['updated_date'] = date('Y-m-d H:i:s');

        //print_r($this->postdata);exit;
        $last_id = $this->_register->registermerchantapi($this->postdata);
        $data = $this->_register->getrec($last_id);
        $res_set = [
            "id"=>$data[0]->id,
            "name"=>$data[0]->msm_name,
            "email"=>$data[0]->msm_email_id,
            "mobile_no"=>$data[0]->msm_mobile_no
        ];
        
        $response = array("status"=>"false", "message"=>"Successfully Inserted", "data"=>$res_set);
        echo json_encode($response,JSON_PRETTY_PRINT);
        exit;

        //print_r($data);exit;
        /* $request->session()->put('success_msg', 'Added Successfully.');
        return redirect()->back()->with('message','1'); */
    }


}
