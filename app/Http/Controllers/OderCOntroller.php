<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Model\User;
use App\Model\Customer;
use App\Model\Bill;
use Session;
use Carbon\Carbon;

class OderCOntroller extends Controller
{
    public function index()
    {
    	$cart = Session::get('cart');
    	$product = $cart->items;
    	$totalPrice = $cart->totalPrice;
    	$id = Auth::user()->id;
        $profile = User::findOrFail($id)->profile()->get();
       	return view('shop.dat-hang', compact('profile', 'product', 'totalPrice'));
    }

    public function PayCart(Request $request)
    {
    	$cart = Session::get('cart');
    	$product = $cart->items;
    	$id = Auth::user()->id;
    	$customer = Customer::where('id_user','=',$id)->get();
        $id_customer = json_decode($customer)[0]->id;
       	$id_sp = $request->id_sp;
       	$id_store = $request->store_id;
       	$date = Carbon::today();
        $bill = Bill::create([
            'id_customer' => $id_customer,
            'id_store' => $id_store,
            'date_bill' => $date,
            'total' => $cart->totalPrice,
            'payment_type' => $request->payment
        ]);
       	foreach ($product as  $value) {
       		$bill->products()->attach($value['items']['id'], ['quantity' => $value['quanty'], 'price' => $value['items']['price']]);
       	}

       	// $product = Product::findOrFail($id_product);
        // $product_pivot = json_decode($product->stores()->get());
        // $pivot_quantity = $product_pivot[0]->pivot->quantity - $soluong;
        // foreach ($product->stores as $value) {
        //     $value->pivot->quantity = $pivot_quantity;
        //     $value->pivot->save();
        // }
		return back()->with('thanhcong', 'Thành công. Chúng tôi sẽ chuyển hàng cho bạn sớm nhất!');  
    }
}
