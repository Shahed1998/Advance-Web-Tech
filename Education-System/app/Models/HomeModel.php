<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\UserModel;
use App\Models\StudentModel;

class HomeModel extends Model
{
    use HasFactory;
    protected $table = "user_credentials";
    public $timestamps = false;
    protected $primaryKey = "id";

    // User model
    public function user(){
        return $this->belongsTo(UserModel::class, 'user_role');
    }

    // Student model
    public function studentInfo(){
        return $this->hasOne(StudentModel::class, 'u_id');
    }
}
