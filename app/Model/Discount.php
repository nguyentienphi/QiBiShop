<?php

namespace  App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Product;
use DB;

class Discount extends Model
{
	public $timestamps = true;
    // public function getDiscount()
    // {
    // 	$discount = DB::table('discount')
    // 	->join('products', 'discount.id_product', '=', 'products.id')
    // 	->get();
    // 	return $discount;
    // }
    public function product()
    {
    	return $this->belongsTo(Product::class, 'id_product', 'id');
    }
}
