<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    public function suppliers()
    {
    	return $this->belongsTo(SupplieGroup::class, 'id_group', 'id');
    }

    public function purchas()
    {
    	return $this->hasMany(Purchas::class, 'id_supplier', 'id');
    }
}
