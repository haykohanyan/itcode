<?php

namespace App\Models\Portfolio;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    protected $table='works';

    protected $fillable = [
        'image',
        'article1',
        'article2',
        'link'

    ];

    public function categories(){

        return $this->belongsToMany('App\Models\Portfolio\Category','work_categories');
    }
     public function cats(){

        return $this->belongsToMany('App\Models\Portfolio\Cat','work_cats');
    }
}
