<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Model\User;
class RegisterController extends Controller
{
    public function index()
    {
    	return view('register');
    }
    public function store(RegisterRequest $request)
    {
    	$user = User::create([
    		'username' => $request->username,
    		'password' => bcrypt($request->password),
    		'role_id' => 1
    	]);
    	return redirect()->route('profile.index', with(['user' => $user]));
    }
}
