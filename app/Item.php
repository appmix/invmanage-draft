<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'user_id', 'tags'
    ];

    public function types()
    {
        return $this->belongsTo(Type::class);
    }

    public function places()
    {
        return $this->belongsTo(Place::class);
    }

    public function group()
    {
        return $this->belongsTo(Group::class);
    }
}
