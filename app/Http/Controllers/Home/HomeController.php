<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function gethome(){
    	return view('System.Loyouts.Home');
    }
    public function getwallet(){
    	return view('System.Wallet.Wallet')
    }
    public function getDashboard(){
    	return view('System.Dashboard.Dashboard')
    }
    public function getBTC(){
        return view('System.Exchange.BTC')
    }
    public function getProfile(){
        return view('System.Profile.Profile')
    }
    public function getManage(){
        return view('System.Manage.Manage')
    public function getTransfer(){
        return view('System.Transfer.Transfer')

}
