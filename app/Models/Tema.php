<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tema extends Model
{
    use HasFactory;
    public function modulos()
    {
    	return $this->belongsTo('App\Models\Modulo');
    }
}
