<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Product;
use Session;
use App\Model\Cart;

class CartController extends Controller
{
	public function index(){
		if(!Session::has('cart')){
			return view('shop.index', ['products' => null]);
		} else {
			$oldCart = Session::get('cart');
			$cart = new Cart($oldCart);
			return view('shop.index', ['product' => $cart->items, 'totalPrice' => $cart->totalPrice]);
		}
	}

    public function addToCart($id, Request $request)
    {
        $product = Product::findOrFail($id);
        $oldCart = Session::has('cart')? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $product->id);
        $request->session()->put('cart', $cart);
        return back();
    }

    public function deleteCart($id)
    {
    	$oldCart = Session::has('cart')?Session::get('cart'): null;
    	$cart = new Cart($oldCart);
    	$cart->removeItem($id);
    	if(count($cart->items) > 0){
    		Session::put('cart', $cart);
    	} else {
    		Session::forget('cart');
    	}
    	return back()->with('success', 'Xóa thành công');
    }
}
