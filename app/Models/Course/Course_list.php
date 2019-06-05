<?php

namespace App\Models\Course;

use Illuminate\Database\Eloquent\Model;

class Course_list extends Model
{
    protected $table='course_lists';

    protected $fillable = [
        'course_id',
        'subtitle'
    ];
    public function course(){

        return $this->belongsTo('App\Models\Course\Course');
    }
    public function sub_rows(){

        return $this->hasMany('App\Models\Course\Sub_row');
    }
}
