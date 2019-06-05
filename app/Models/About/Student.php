<?php

namespace App\Models\About;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table='students';

    protected $fillable = [
        'title1',
        'title2',
        'image'
    ];
}