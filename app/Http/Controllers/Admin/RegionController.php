<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Region;

class RegionController extends Controller
{
    public function index()
    {
    	$region = Region::all();
    	return view('admin.region.danhsach', compact('region'));
    }

    public function create()
    {
    	return view('admin.region.them');
    }

    public function store(Request $request)
    {
    	Region::create(
    		[
    			'name' => $request->name
    		]
    	);
    	return back()->with('thanhcong', 'Thêm thành công');
    }

    public function delete($id)
    {
    	Region::findOrFail($id)->delete();
    	return back()->with('thanhcong', 'Xóa thành công');
    }
}
