<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class registerController extends Controller
{
    public function register(){
    	return view ('auth.register');
    }
}
