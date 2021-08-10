<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meta extends Model
{
    use HasFactory;
    public function modulo()
    {
    	return $this->hasMany('App\Models\Modulo');
    }
}
