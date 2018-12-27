<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Slide;
use App\Model\Product;
use App\Model\Discount;
use App\Model\Store;
use Session;
use App\Model\Cart;
use App\Model\Customer;
use App\Model\TypeProduct;
use App\Model\User;
use App\Model\Bill;
use App\Http\Requests\OderRequest;
use Auth;
use Carbon\Carbon;

class PageController extends Controller
{
    public function index()
    {
    	$slide = Slide::all();
    	$products = new Product;
    	$discount = $products->product_discount();
    	$product = $products->product();
    	return view('trangchu', compact('slide', 'product', 'discount'));
    }
    public function type_product($id)
    {
    	$product_type = Product::where('id_type',$id)->paginate(15);
    	return view('product_type', compact('product_type'));
    }

    public function ProductDetail($id)
    {
        $product = Product::findOrFail($id);
        return view('product_details', compact('product'));
    }

    public function postCheckout(OderRequest $request)
    {
        $id = Auth::user()->id;
        $id_sp = $request->id_sp;
        $profile = User::findOrFail($id)->profile()->get();
        $product = Product::findOrFail($id_sp);
        $soluong = $request->soluong;
        return view('shop.oder', compact('profile', 'product', 'soluong'));
    }

    public function payProduct(Request $request)
    {
        $id = Auth::user()->id;
        $customer = Customer::where('id_user','=',$id)->get();
        $total = $request->tongtien;
        $id_store = $request->id_store;
        $soluong = $request->soluong;
        $price = $request->price;
        $id_product = $request->id_product;
        $id_customer = json_decode($customer)[0]->id;
        $date = Carbon::today();
        $bill = Bill::create([
            'id_customer' => $id_customer,
            'id_store' => $id_store,
            'date_bill' => $date,
            'total' => $total,
            'payment_type' => $request->payment
        ]);
        $bill->products()->attach($id_product, ['quantity' => $soluong, 'price' => $price]);
        $product = Product::findOrFail($id_product);
        $product_pivot = json_decode($product->stores()->get());
        $pivot_quantity = $product_pivot[0]->pivot->quantity - $soluong;
        foreach ($product->stores as $value) {
            $value->pivot->quantity = $pivot_quantity;
            $value->pivot->save();
        }
         $request->session()->flash('thanhcong', 'Đặt hàng thành công. Chúng tôi sẽ giao hàng sớm cho bạn!');
        return redirect()->route('product-detail',$id_product);
    }

    public function search(Request $request)
    {
        $input = $request->search;
        $slide = Slide::all();
        $type = json_decode(TypeProduct::where('name', $input)->get(['id']), true);
        $product = Product::where('id_type', $type[0]['id'])->paginate(9);
        return view('search', compact('slide', 'product'));
    }
}
