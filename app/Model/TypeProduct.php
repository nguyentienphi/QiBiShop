<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class TypeProduct extends Model
{
    public function products()
    {
    	return $this->hasMany(Product::class, 'id_type', 'id');
    }
}
