<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\DepartmentModel;
use App\Models\Course_student;
use App\Models\HomeModel;

class StudentModel extends Model
{
    use HasFactory;
    protected $table = "students_info";
    public $timestamps = false;

    // Department model
    public function department(){
        return $this->belongsTo(DepartmentModel::class, 'd_id');
    }

    // Home model
    public function student_credentials(){
        return $this->belongsTo(HomeModel::class, 'uc_id');
    }

    // Course_student model
    public function courses_student(){
        return $this->hasMany(Course_student::class, 'st_id');
    }
    
}
