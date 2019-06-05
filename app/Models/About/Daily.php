<?php

namespace App\Models\About;

use Illuminate\Database\Eloquent\Model;

class Daily extends Model
{

    protected $table='dailies';

    protected $fillable = [
        'title',
        'article',
        'image'
    ];
}