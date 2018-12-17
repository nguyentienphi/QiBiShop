<?php

namespace  App\Model;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $fillable = ['id_staff', 'id_customer', 'id_store', 'date_bill', 'total', 'payment_type', 'debit'];
    
    public function products()
    {
    	return $this->belongsToMany(Product::class, 'bill_details', 'id_bill', 'id_product')->withPivot('quantity', 'price');
    }

    public function staff()
    {
    	return $this->belongsTo(Bill::class, 'id_staff', 'id');
    }

    public function customer()
    {
    	return $this->belongsTo(Customer::class, 'id_customer', 'id');
    }
}
