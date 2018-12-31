<?php

namespace App\Http\Controllers\System;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Dashboard;

class DashboardController extends Controller
{
    //
    public function getDashboard(){
    	return view('System.Dashboard.Dashboard');
    }
}
