<?php

namespace  App\Model;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    protected $table = "units";
 	
 	public function products()
 	{
 		return $this->HasMany(Product::class, 'id_unit', 'id');
 	}   
}
