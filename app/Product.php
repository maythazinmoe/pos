<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable=[
            'name','sale_price','photo','description','category_id'  
        ];
}
