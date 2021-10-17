<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function items() {
        return $this->hasMany(Item::class);
    }

    public function types() {
        return $this->hasMany(Type::class);
    }

    public function groups() {
        return $this->hasMany(Group::class);
    }

    public function places() {
        return $this->hasMany(Place::class);
    }

    public function locations() {
        return $this->hasMany(Location::class);
    }

    public function modes() {
        return $this->hasMany(Mode::class);
    }


}
