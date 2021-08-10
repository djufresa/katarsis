<?php

namespace App\Http\Controllers\admin;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Evento;
use App\Models\User;
use Spatie\Permission\Models\Role;

class AdminController extends Controller
{
    public function index(){
        //$user = Auth::id();
        //$user=User::find(4);
        //$role = Role::all();
        //$user->roles()->sync($role);
        //return $role;
       return view('admin.index');

    }
}
