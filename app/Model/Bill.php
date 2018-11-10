<?php

namespace  App\Model;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    public function products()
    {
    	return $this->belongsToMany(Product::class, 'build_details');
    }

    public function staff()
    {
    	return $this->belongsTo(Bill::class, 'id_staff', 'id');
    }

    public function customer()
    {
    	return $this->hasMany(Customer::class, 'id_customer', 'id');
    }
}
