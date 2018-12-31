<?php

namespace App\Http\Controllers\System;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Exchange;

class ExchangeController extends Controller
{
    //
    public function getExchange(){
    	
    	return view('System.Exchange.BTC');
    }
}
