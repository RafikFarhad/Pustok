<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Helper extends Controller
{
    public function index()
    {
    	//$batch[] = fopen("000.txt", "r");// or die("Unable to open file!");
		//echo fread($myfile,filesize("webdictionary.txt"));
		//fclose($myfile);
        return view('basic');
    }
    // public function savethebook(Request $request)
    // {
    // 	Book::create($request->all());
    // 	return view('AddBook/addbook');
    // }
}
