<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];

    public function location()
    {
        return $this->belongsTo(Location::class);
    }
    
    public function items() {
        return $this->hasMany(Item::class);
    }
}
