<?php

namespace  App\Model;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
	protected $fillable = ['id_user', 'name', 'nic_number', 'address', 'phone_number', 'birthday', 'gender'];
    public function user()
    {
        return $this->hasOne(User::class, 'id_user', 'id');
    }
}
