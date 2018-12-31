<?php

namespace App\Http\Controllers\System;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Profile;
class ProfileController extends Controller
{
    //
    public function getProfile(){
    	return view('System.Profile.Profile');
    }
}
