<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Book;

class addbookcontroller extends Controller
{
    //

    /// for  Main view 
    public function index()
    {
        // return 'reched';
        return view('AddBook/addbook');
    }
    public function savethebook(Request $request)
    {
    	Book::create($request->all());
    	return view('AddBook/addbook')->with('msg', "Book is saved!");
    }
}

