<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeptModel extends Model
{
    use HasFactory;
    protected $table = "departments";
    public $timestamps = false;


}
