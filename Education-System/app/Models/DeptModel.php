<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\CourseModel;

class DeptModel extends Model
{
    use HasFactory;
    protected $table = "departments";
    public $timestamps = false;

    public function course(){
        return $this->hasMany(CourseModel::class, 'd_id');
    }

}
