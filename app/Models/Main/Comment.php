<?php

namespace App\Models\Main;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table='comments';

    protected $fillable = [
        'title',
        'article',
        'from',
        'image'
    ];
}