<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Saledetail extends Model
{
    protected $fillable=[
            'quantity' ,'product_id','sale_id'  
        ];

public function sales($value='')
{
	return $this->belongsTo('App\Sale');
}
    }
