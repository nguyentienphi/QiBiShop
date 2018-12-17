<?php

namespace App\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $remember_token=false;
    protected $fillable = [
        'username', 'role_id', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function customer()
    {
        return $this->HasOne(Customer::class, 'id_user', 'id');
    }

    public function profile()
    {
        return $this->hasOne(Profile::class, 'id_user', 'id');
    }

    public function staff()
    {
        return $this->hasOne(Profile::class, 'id_user', 'id');
    }
}
