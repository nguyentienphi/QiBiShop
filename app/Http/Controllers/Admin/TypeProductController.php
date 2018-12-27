<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\TypeProduct;
use App\Model\Product;
use App\Http\Requests\TypeRequest;

class TypeProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $type = TypeProduct::where('id_parent','>',0)->get();
        return view('admin.producttype.danhsach', compact('type'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $type_parent = TypeProduct::where('id_parent', 0)->get();
        return view('admin.producttype.them', compact('type_parent'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TypeRequest $request)
    {
        $type = $request->except('_token');
        TypeProduct::create([
            'name' => $request->name,
            'description' => $request->description,
            'id_parent' => $request->id_parent
        ]);
        return back()->with('thanhcong', 'Thêm thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(TypeProduct $id)
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
        $type = TypeProduct::where('id', $id)->get();
        return view('admin.producttype.sua', compact('type'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TypeRequest $request, $id)
    {
        $type = TypeProduct::findOrFail($id);
        $type->name = $request->name;
        $type->description = $request->description;
        $type->id_parent = $request->id_parent;
        $type->save();
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
        $product = json_decode(Product::where('id_type', $id)->get(['id']), true);
        Product::destroy($product[0]['id']);
        TypeProduct::findOrFail($id)->delete();
        return back()->with('thanhcong', 'Xóa thành công');   
    }
}
