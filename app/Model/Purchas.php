<?php

namespace  App\Model;

use Illuminate\Database\Eloquent\Model;

class Purchas extends Model
{
    protected $table = "purchases";

    public function products()
    {
    	return $this->belongsToMany(Products::class, ' purchases_details', 'id_product', 'id_purchas');
    }

    public function supplie()
    {
    	return $this->belongsTo(Supplier::class, 'id_supplier', 'id');
    }
}
