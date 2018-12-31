<?php

namespace App\Http\Controllers\System;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Wallet;

class WalletController extends Controller
{
    //
    public function getWallet(){
    	
    	return view('System.Wallet.Wallet');
    }
}
