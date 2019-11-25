<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
	protected $fillable = ['name'];
    public function purchases()
    {
        return $this->hasMany('App\Purchase');
    }
}
