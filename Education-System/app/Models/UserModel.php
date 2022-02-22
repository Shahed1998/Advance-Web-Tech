<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\HomeModel;

class UserModel extends Model
{
    use HasFactory;
    protected $table = "users";
    protected $primaryKey = "id";
    public $timestamps = false;

    public function user_credentials(){
        return $this->hasMany(HomeModel::class, 'user_role', 'id');
    }
}
