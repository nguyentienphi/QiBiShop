<?php

namespace  App\Model;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    public function user()
    {
        return $this->hasOne(User::class, 'id_user', 'id');
    }
}
