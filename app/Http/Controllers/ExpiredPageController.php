<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Loan;

class ExpiredPageController extends Controller
{
    public function index()
    {
    	$current_date = date("Y/m/d");
    	$loans = Loan::where('expiry_date', '<',  $current_date)->where('retturn', 1)->orderBy('expiry_date', 'DES')->paginate(10);
    	return view('Expired/ExpiredPage', compact('loans'));
    	//return $loans;
    }
    public function loanhistory()
    {
    	$loans = Loan::orderBy('expiry_date', 'DES')->paginate(10);
    	return view('LoanHistory/loanhistory', compact('loans'));
    	//return $loans;
    }

}
