<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function do_logout(){
    	return view('auth.login');
    }
}
