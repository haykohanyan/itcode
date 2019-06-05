<?php

namespace App\Models\Course;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table='courses';

    protected $fillable = [
        'title',
        'image',
        'name'
    ];

    public function rows(){

        return $this->hasMany('App\Models\Course\Row');
    }
    public function course_lists(){

        return $this->hasMany('App\Models\Course\Course_list');
    }

}
