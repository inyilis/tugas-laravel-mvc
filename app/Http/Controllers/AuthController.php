<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(){
		return view('register');
	}

	public function reg_post(Request $req){
		$firstName 	= $req["firstName"];
		$lastName	= $req["lastName"];

		// return "$firstName $lastName";
		return view('welcome', ["firstName" => $firstName], ["lastName" => $lastName]);
	}
}
