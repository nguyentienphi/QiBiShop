<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Product;
use App\Model\TypeProduct;
use App\Model\Store;
use App\Model\Unit;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::all();
        return view('admin.product.danhsach', compact('product')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $type_product = TypeProduct::all();
        $store = Store::all();
        $unit = Unit::all();
        return view('admin.product.them', compact('type_product', 'store', 'unit'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        $input = $request->only('id_type', 'name', 'price', 'id_unit');
        $store_id = $request->store;
        $image = "";
        if($request->has('image'))
        {
            $file = $request->image;
            $image = time().'-'.$file->getClientOriginalName();
            $file->storeAs('public/image/product', $image);
        }
        $input['image'] = $image;
        $product = Product::create($input);
        $product->stores()->attach($store_id);
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('admin.product.sua', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, $id)
    {
        $image = "";
        if(!$request->has('image'))
        {
            $image = $request->image_old;
        } else {
            $file = $request->image;
            $image = time().'-'.$file->getClientOriginalName();
            $file->storeAs('public/image/product', $image);
        }
        $input = $request->except('_token', '_method', 'image_old');
        $input['image'] = $image;
        Product::findOrFail($id)->update($input);
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
        $product = Product::findOrFail($id);
        $product->stores()->detach($product->id);
        $product->delete();
        return back()->with('thanhcong', 'Xóa thành công');
    }
}
