<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Auth;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $loan1 = \Auth::user()->loan_number1;
        $loan2 = \Auth::user()->loan_number2;
        $book1 = NULL;
        $single_loan1 = NULL;
        $book2 = NULL;
        $single_loan2 = NULL;


        return view('home', ["book1" => $book1,
            "book2" => $book2,
            "single_loan1" => $single_loan1,
            "single_loan2" => $single_loan2,]);
    }

    public function index2()
    {
        $loan1 = \Auth::user()->loan_number1;
        $loan2 = \Auth::user()->loan_number2;
        $book1 = NULL;
        $single_loan1 = NULL;
        $book2 = NULL;
        $single_loan2 = NULL;

        if ($loan1 != 0) {
            $single_loan1 = DB::table('loans')->where('loan_number', $loan1)->first();
            $book1 = DB::table('books')->where('id', $single_loan1->bookid)->first();
        }
        if ($loan2 != 0) {
            $single_loan2 = DB::table('loans')->where('loan_number', $loan2)->first();
            $book2 = DB::table('books')->where('id', $single_loan2->bookid)->first();
        }

        return view('home', ["book1" => $book1,
            "book2" => $book2,
            "single_loan1" => $single_loan1,
            "single_loan2" => $single_loan2,]);
    }

    public function lendinfo()
    {
        $loan = array(Auth::user()->loan_number1, Auth::user()->loan_number2);

        return view('home', compact('loan'));
    }

}
