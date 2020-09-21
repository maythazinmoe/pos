<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable=[

            'name','sale_price','photo','description','category_id'  

            // 'id','name','photo','price','description','category_id'  

        ];

     public function category($value='')
     {
     	return $this->belongsTo('App\Category');
     }
}
