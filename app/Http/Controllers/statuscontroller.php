<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class statuscontroller extends Controller
{
    //
    public function index()
    {
    	$request = NULL;
        return view('Status/status', compact('request'));
    }
    public function showstatus(Request $request)
    {
    	$us = $request->all;
    	return view('Status/status', compact('request'));
    }
}
