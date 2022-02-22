<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\StudentModel;

class DepartmentModel extends Model
{
    use HasFactory;
    protected $table = "departments";
    public $timestamps = false;

    public function students(){
        return $this->hasMany(StudentModel::class, 'd_id', 'id');
    }

}
