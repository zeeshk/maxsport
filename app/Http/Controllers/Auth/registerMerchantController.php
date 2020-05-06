<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\registerMerchant;

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

    public function register_index(){
        return view('auth.register',compact('data'));
    }

}
