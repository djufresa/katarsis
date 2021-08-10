<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modulo extends Model
{
    use HasFactory;
    public function metas()
    {
    	return $this->belongsTo('App\Models\Metas');
    }
    public function temas()
    {
    	return $this->hasMany('App\Models\Tema');
    }
    public function eventos(){
        return $this->belongsTo('App\Models\Evento');
    }
}
