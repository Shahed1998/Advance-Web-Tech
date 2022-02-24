<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Courses;
use App\Models\Teacher;

class Course_Teacher extends Model
{
    use HasFactory;

    protected $table = "course_teachers";
    public $timestamps = false;

    public function courses(){
        return $this->belongsTo(Courses::class, 'c_id');
    }

    public function teachers(){
        return $this->belongsTo(Teacher::class, 't_id');
    }
}
