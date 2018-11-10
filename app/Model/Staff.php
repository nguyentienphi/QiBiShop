<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    public function bills()
    {
    	return $this->HasMany(Bill::class, 'id_staff', 'id');
    }

    public function stores()
    {
    	return $this->belongsToMany(Store::class, 'staffs_stores', 'id_store', 'id_staff');
    }

    public function user()
    {
    	return $this->belongsTo(User::class, 'id_user', 'id');
    }
}
