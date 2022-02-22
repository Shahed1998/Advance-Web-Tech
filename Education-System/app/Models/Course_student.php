<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\StudentModel;
use App\Models\Courses;

class Course_student extends Model
{
    use HasFactory;

    protected $table = "course_students";
    protected $primaryKey = "id";
    public $timestamps = false;

    // Student model
    public function student(){
        return $this->belongsTo(StudentModel::class, 'st_id');
    }

    // Course model
    public function courses(){
        return $this->belongsTo(Courses::class, 'c_id');
    }
}
