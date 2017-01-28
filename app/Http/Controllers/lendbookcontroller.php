<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class lendbookcontroller extends Controller
{
    
    public function index()
    {
    	$request = NULL;
        return view('LendBook/lendbook', compact('request'));
    }
    public function showstatusoflendingbook(Request $request)
    {
    	// Loan::create($request->all());
    	// $us = $request->all;
    	return view('LendBook/lendbook', compact('request'));
    }
}
