<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\User;
use App\Model\Profile;
use App\Model\Customer;

class UserController extends Controller
{
    public function index()
    {
    	$user = User::where('role_id','!=',0)->get();
    	return view('admin.user.index', compact('user'));
    }

    public function destroy($id)
    {
    	$profile = json_decode(Profile::where('id_user',$id)->get(['id']), true);
    	$customer = json_decode(Customer::where('id_user',$id)->get(['id']),true);	
    	Profile::destroy($profile[0]['id']);
    	Customer::destroy($customer[0]['id']);
    	User::findOrFail($id)->delete();
    	return back()->with('thanhcong', 'Xóa thành công');
    }
}
