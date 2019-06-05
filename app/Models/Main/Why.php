<?php

namespace App\Models\Main;

use Illuminate\Database\Eloquent\Model;

class Why extends Model
{
    protected $table='whies';

    protected $fillable = [
        'title',
        'article'
    ];
}
