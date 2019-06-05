<?php

namespace App\Models\Portfolio;

use Illuminate\Database\Eloquent\Model;

class Cat extends Model
{
    protected $table='cats';

    protected $fillable = [
        'name'
    ];

    public function works(){

        return $this->belongsToMany('App\Models\Portfolio\Work','work_cats');
    }
}
