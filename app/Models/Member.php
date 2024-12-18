<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    //对应数据表member和主键id
    protected $table = "member";
    protected $primaryKey = "id";
    
}
