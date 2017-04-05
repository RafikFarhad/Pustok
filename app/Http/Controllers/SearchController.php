<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Book;

class SearchController extends Controller
{
    public function index()
    {
    	$books = Book::all();
        return view('Search/search', compact('books'));
    }
}
