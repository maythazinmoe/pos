<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
     protected $fillable=[
            'user_id','address','phone','photo' 
        ];
     protected $table='staffs';
}
