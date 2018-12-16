<?php

namespace  App\Model;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public function bills()
    {
    	return $this->hasMany(Bill::class, 'id_customer', 'id');
    }

    public function user()
    {
    	return $this->belongsTo(User::class, 'id_user', 'id');
    }

     public function stores()
    {
    	return $this->HasMany(Store::class, 'bills', 'id_store', 'id_customer');
    }
}
