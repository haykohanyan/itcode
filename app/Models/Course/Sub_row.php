<?php

namespace App\Models\Course;

use Illuminate\Database\Eloquent\Model;

class Sub_row extends Model
{
    protected $table='sub_rows';

    protected $fillable = [
        'course_list_id',
        'text'
    ];

    public function course_list(){

        return $this->belongsTo('App\Models\Course\Course_list');
    }
}
