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
 public function products(){
      return $this->belongsToMany('App\Product','saledetails')->withPivot('quantity')->withTimestamps();
    }

public function sales()
{
	return $this->hasMany('App\Sale');

}
public function saledetails($value='')
{
	return $this->hasMany('App\Saledetail');
}
 

    }
