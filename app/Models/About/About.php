<?php

namespace App\Models\About;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $table='abouts';

    protected $fillable = [
        'title',
        'subtitle',
        'article'
    ];
}
