<?php

namespace  App\Model;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    public function productInventorys()
    {
    	return $this->belongsToMany(Product::class, 'inventories', 'id_product', 'id_store');
    }

    public function staffs()
    {
    	return $this->belongsToMany(Staff::class, 'staffs_stores', 'id_staff', 'id_store');
    }

    public function products()
    {
    	return $this->belongsToMany(Product::class, 'products_stores', 'id_product', 'id_store');
    }

    public function region()
    {
    	return $this->belongsTo(Region::class, 'id_region', 'id');
    }

    public function bills()
    {
    	return $this->HasMany(Customer::class, 'bills', 'id_customer', 'id_store');
    }
}
