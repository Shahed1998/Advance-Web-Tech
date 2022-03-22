<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\DeptModel;

class CourseModel extends Model
{
    use HasFactory;
    protected $table = "courses";
    protected $hidden = ['d_id'];
    public $timestamps = false;

    public function department(){
        return $this->belongsTo(DeptModel::class, 'd_id');
    }
}
