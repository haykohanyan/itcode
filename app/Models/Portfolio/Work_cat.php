<?php

namespace App\Models\Portfolio;

use Illuminate\Database\Eloquent\Model;

class Work_cat extends Model
{
    protected $table='work_cats';

    protected $fillable = [
        'cat_id',
        'work_id'
    ];
}
