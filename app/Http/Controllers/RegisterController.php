<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
    	return view('register');
    }
    public function store(Request $request)
    {
    	$email = $request->email;
    	$name = $request->name;
    	$ns = $request->ngaysinh;
    	dd($email, $name,$ns);
    }
}
