<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    use HasFactory;

    public function modalidad()
    {
    	return $this->belongsTo('App\Models\Modality');
    }
    public function presio()
    {
    	return $this->belongsTo('App\Models\Presio');
    }
    public function tipo()
    {
    	return $this->belongsTo('App\Models\Tipo');
    }
    public function users()
    {
       
        return $this->belongsToMany('App\Models\User');
    }

    public function modulos(){
        return $this->hasMany('App\Models\Modulo');
    }

    public function image(){
    return $this->morphOne(Image::class,'imageable');
    }
}
