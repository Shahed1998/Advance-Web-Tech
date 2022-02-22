<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Course_student;
use App\Models\DepartmentModel;

class Courses extends Model
{
    use HasFactory;

    protected $table = "courses";
    public $timestamps = false;
    protected $primaryKey = "id";

    // Course model
    public function course_student(){
        return $this->hasMany(course_student::class, 'c_id');
    }

    // Department
    public function department(){
        return $this->belongsTo(DepartmentModel::class, 'offered_by');
    }
}
