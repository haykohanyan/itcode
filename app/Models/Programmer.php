<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Programmer extends Model
{
    protected $table='programmers';

    protected $fillable = [
        'title',
        'subtitle1',
        'article1',
        'subtitle2',
        'article2',
        'image'
    ];
}
