<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable=[
            'id','name','photo','price','description','category_id'  
        ];
}
