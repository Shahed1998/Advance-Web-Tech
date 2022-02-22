<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\DepartmentModel;
use App\Models\Course_student;

class StudentModel extends Model
{
    use HasFactory;
    protected $table = "students_info";
    public $timestamps = false;

    public function department(){
        return $this->belongsTo(DepartmentModel::class, 'd_id');
    }

    
}
