<?php

namespace App\Http\Controllers\System;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Transfer;

class TransferController extends Controller
{
    //
    public function getTransfer(){
    	
    	return view('System.Transfer.Transfer');
    }
}
