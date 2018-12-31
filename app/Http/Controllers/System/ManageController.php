<?php

namespace App\Http\Controllers\System;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Manage;
class ManageController extends Controller
{
    //
    public function getManage(){
    	return view('System.Manage.Manage');
    }
}
