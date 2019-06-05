<?php

namespace App\Models\Main;

use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{

    protected $table='slides';

    protected $fillable = [
        'title',
        'article_1',
        'article_2',
        'image'
    ];
}