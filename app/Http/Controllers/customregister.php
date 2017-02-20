<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class customregister extends Controller
{
	public function index()
	{
		return view('customregister');
	}
	public function createuser(Request $request)
	{
		$reg = $request->regno;
		$user = User::where('regno', $reg)->first();
		if($user!=NULL)
		{
			return redirect()->to('registeruser')->with('Warning', "This user already has an ID");
		}
		else
		{
			User::create([
            'name' => $request['name'],
            'regno' => $request['regno'],
            'password' => bcrypt($request['password']),
            //'password' => $data['password'],
            'user_type' => 'normal',
            'loan_number1' => '0',
            'loan_number2' => '0',
        ]);
			return redirect()->to('registeruser')->with('success', "ID creation of ".$request->regno." is successfull");
		}
	}
}
