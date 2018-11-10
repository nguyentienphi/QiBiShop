<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Slide;
use App\Model\Product;
use App\Model\Discount;


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
}
