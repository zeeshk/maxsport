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
}
