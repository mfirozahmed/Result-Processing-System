<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //
    protected $primaryKey = 'code';
    public $incrementing = false;

    public function students()
    {
        return $this->belongsToMany('App\Student');
    }

    public function teachers()
    {
        return $this->belongsToMany(Teacher::class, 'course_teacher', 'code', 'username')->withPivot('year');
    }
}
