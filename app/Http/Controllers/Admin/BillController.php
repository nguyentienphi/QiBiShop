<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Bill;
use App\Model\User;

class BillController extends Controller
{
    public function index()
    {
    	$bill = Bill::all();
    	$user = User::all();
    	return view('admin.bill.danhsach', compact('bill','user'));
    }

    public function show($id)
    {
    	$bill = Bill::findOrFail($id);
    	return view('admin.bill.details', compact('bill'));
    }

    public function destroy($id)
    {
    	$bill = Bill::findOrFail($id);
    	$bill->products()->detach();
    	$bill->delete();
    	return back()->with('thanhcong', 'Xóa thành công');
    }
}
