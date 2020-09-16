<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    protected $fillable=[

            'date','supplier_id','product_id','quantity','buy_price','status'   

        ];}
