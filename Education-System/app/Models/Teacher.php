<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Course_Teacher;

class Teacher extends Model
{
    use HasFactory;

    protected $table = "teacher_info";
    public $timestamps = false;

    public function course_teacher(){
        return $this->hasMany(Course_Teacher::class, 't_id');
    }

}
