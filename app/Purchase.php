<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
	protected $fillable = ['date','supplier_id','status','total_cost'];

    public function suppliers()
    {
        return $this->belongsTo('App\Supplier');
    }
}
