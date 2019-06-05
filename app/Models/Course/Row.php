<?php

namespace App\Models\Course;

use Illuminate\Database\Eloquent\Model;

class Row extends Model
{
    protected $table='rows';

    protected $fillable = [
        'course_id',
        'text'
    ];

    public function course(){

        return $this->belongsTo('App\Models\Course\Course');
    }
}
