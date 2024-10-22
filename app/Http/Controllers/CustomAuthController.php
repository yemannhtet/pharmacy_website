<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomAuthController extends Controller
{
    //register
    public function registerPage(){
        return view('Authentication.register');
    }
        //register
        public function loginPage(){
            return view('Authentication.login');
        }
    }

