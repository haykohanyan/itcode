<?php

namespace App\Models\Portfolio;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table='categories';

    protected $fillable = [
        'name'
    ];

    public function works(){

        return $this->belongsToMany('App\Models\Portfolio\Work','work_categories');
    }
}
