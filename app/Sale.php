<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $fillable=[
            'date','voucher_no','total','status','user_id'   
        ];

public function user()
{
	return $this->belongsTo('App\User');
}
 

    }
