<?php

namespace App\Models\Main;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $table='teams';

    protected $fillable = [
        'title',
        'article',
        'image'
    ];
}
