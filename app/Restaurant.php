<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    protected $fillable = [
        'name', 'user_id', 'address', 'p_iva', 'phone'
    ];

    public function types() {
        return $this->belongsToMany('App\Type');
    }

      public function dishes() {
        return $this->hasMany('App\Dish');
    }

    public function user() {
        return $this->belongsTo('App\User');
    }
}
