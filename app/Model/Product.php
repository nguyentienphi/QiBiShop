<?php

namespace  App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Discount;
use DB;

class Product extends Model
{
	public $timestamps = true;
    protected $fillable = ['id_type', 'name', 'image', 'price', 'id_unit'];
    public function discounts()
    {
    	return $this->hasMany(Discount::class, 'id_product', 'id');
    }
    public function product_discount()
    {
    	$discount = DB::table('products')
    	->join('discounts', 'products.id', '=', 'discounts.id_product')
    	->paginate(15);
    	return $discount;
    }
    public function product()
    {
    	$product = DB::table('products')
    	->leftjoin('discounts', 'products.id', '=', 'discounts.id_product')
    	->where('discounts.id', '=',NULL)
        ->select('products.*')
    	->paginate(15);
    	return $product;
    }

    public function bills()
    {
    	return $this->belongsToMany(Bill::class, 'bill_details', 'id_product', 'id_bill')->withPivot('quantity', 'price');
    }

    public function storeInventories()
    {
    	return $this->belongsToMany(Store::class, 'inventories', 'id_product', 'id_store');
    }

    public function unit()
    {
    	return $this->belongsTo(Unit::class, 'id_unit', 'id');
    }

    public function stores()
    {
    	return $this->belongsToMany(Store::class, 'product_store', 'id_product', 'id_store')->withPivot('quantity', 'import_price');
    }

    public function typeProduct()
    {
    	return $this->belongsTo(TypeProduct::class, 'id_type', 'id');
    }

    public function purchas()
    {
    	return $this->belongsToMany(Purchas::class, ' purchases_details', 'id_purchas', 'id_product');
    }
}
