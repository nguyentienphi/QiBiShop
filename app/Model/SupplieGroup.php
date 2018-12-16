<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class SupplieGroup extends Model
{
	protected $table = 'suppliers_group';
    public function suppliers()
    {
    	return $this->hasMany(Supplier::class, 'id_group', 'id');
    }
}
