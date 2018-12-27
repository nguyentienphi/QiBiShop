<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Store;
use App\Model\Region;
use App\Model\Product;
use App\Http\Requests\StoreRequest;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $store = Store::all();
        return view('admin.store.danhsach', compact('store'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $region = Region::all();
        return view('admin.store.them', compact('region'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        $image = "";
        if($request->has('image'))
        {
            $file = $request->image;
            $image = time().'-'.$file->getClientOriginalName();
            $file->storeAs('public/image/store', $image);
        }
        $input = $request->except('_token');
        $input['image'] = $image;
        Store::create($input);
        return back()->with('thanhcong', 'Thêm thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $store = Store::findOrFail($id);
        return view('admin.store.sua', compact('store'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreRequest $request, $id)
    {
        $image = "";
        if(!$request->has('image'))
        {
            $image = $request->old_image;
        } else {
            $file = $request->image;
            $image = time().'-'.$file->getClientOriginalName();
            $file->storeAs('public/image/store', $image);
        }
        $input = $request->except('_token', '_method', 'old_image');
        $input['image'] = $image;
        Store::findOrFail($id)->update($input);
        return back()->with('thanhcong', 'Cập nhật thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $store = Store::findOrFail($id);
        $input = json_decode($store->products()->get(['products.id'])->makeHidden('pivot'), true);
        Product::destroy($input);
        $store->products()->detach();
        $store->delete();
        return back()->with('thanhcong', 'Xóa thành công');
    }
}
