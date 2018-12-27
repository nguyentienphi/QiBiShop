<?php

namespace  App\Model;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
	protected $fillable = ['name'];
    public function stores()
    {
    	return $this->hasMany(Store::class, 'id_region', 'id');
    }
}
