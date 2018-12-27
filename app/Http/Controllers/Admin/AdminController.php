<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Model\User;

class AdminController extends Controller
{
   	public function index()
    {
    	$id = Auth::user()->id;
    	$user = User::findOrFail($id);
    	return view('admin.index', compact('user'));
    }
}
