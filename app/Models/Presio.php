<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Presio extends Model
{
    use HasFactory;
    public function evento(){
        return $this->hasOne('App\Models\Evento');
    }
}
