<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class recievebookcontroller extends Controller
{
    public function index()
    {
    	$request = NULL;
        return view('RecieveBook/recievebook', compact('request'));
    }
    public function recieveacknowledgment(Request $request)
    {
    	// Loan::create($request->all());
    	// $us = $request->all;
    	return view('RecieveBook/recievebook', compact('request'));
    }
}
