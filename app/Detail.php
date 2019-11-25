<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    protected $fillable = ['purchase_id','product_id','quantity','cost','total_cost'];
}
