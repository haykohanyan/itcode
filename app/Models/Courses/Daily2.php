<?php

namespace App\Models\Courses;

use Illuminate\Database\Eloquent\Model;

class Daily2 extends Model
{
    protected $table='daily2s';

    protected $fillable = [
        'title',
        'article',
        'image'
    ];
}
