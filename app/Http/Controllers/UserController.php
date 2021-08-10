<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Models\Evento;
use App\Models\User;

class UserController extends Controller
{
    public function dashboard(){
        $user_id=auth()->user()->id;
        $cursos = User::find($user_id)->Evento()->get();
        return view('dashboard', compact('cursos'));
       
    }
}
