<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\User;
use Auth;

class LoginController extends Controller
{
    public function index()
    {
    	return view('login');
    }

    public function login(Request $request)
    {
    	$input = [
    		'username' => $request->username,
    		'password' => $request->password
    	];
    	if(Auth::attempt($input) && Auth::user()->role_id == config('shop.member'))
    	{
    		return redirect()->route('trangchu');
    	}
    }

    public function getLogout(Request $request)
    {
    	Auth::logout();
    	return redirect()->route('trangchu');
    }
}
