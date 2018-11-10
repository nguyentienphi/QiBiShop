<?php

namespace  App\Model;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    public function stores()
    {
    	return $this->hasMany(Store::class, 'id_region', 'id');
    }
}
