<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\User;
use Auth;
use Session;

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
    	if(Auth::attempt($input))
    	{
            if(Auth::user()->role_id == config('shop.member')){
                return redirect()->route('trangchu');
            } else{
                return redirect()->route('admin');
            }
    	} else {
            return back()->with('errors', 'Sai tên tài khoản hoặc mật khẩu!');
        }
    }

    public function getLogout(Request $request)
    {
    	if(Auth::check() && Auth::user()->role_id == 1)
        {
            Auth::logout();
            Session::forget('cart');
            return redirect()->route('trangchu');
        } else {
            Auth::logout();
            return redirect()->route('login');
        }
    }
}
