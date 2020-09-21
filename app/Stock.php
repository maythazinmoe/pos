<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    protected $fillable=[

            'date','supplier_id','product_id','quantity','buy_price','status'   

        ];

       public function supplier($value='')
       {
       		return $this->belongsTo('App\Supplier');
       }

       public function product($value='')
       {
       		return $this->belongsTo('App\Product');
       }

}
