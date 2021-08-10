<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\Models\Evento;
use App\Models\images;
use App\Models\Includes;
use App\Models\Meta;
use App\Models\Modulo;
use App\Models\Tema;
use App\Models\User;
use App\Models\Image;

class CursoController extends Controller
{
    use AuthorizesRequests;
    public function index(){
        $evento = Evento::all();
        //$image = Image::where('imageable_id',$evento->id)->get();
        //$image = Image::all();
       // $image =$evento->image;
        return view('cursos', compact('evento'));      
      
    }
    public function mostrar($id){
        $curso = Evento::find($id);
        $metas= Meta::where('curso_id',$id)->get();
        $modulos = Modulo::where('evento_id', $id)->get();
        //$temas = Tema::where('modulo_id', 1)->get();
        $obtendras = Includes::where('evento_id', $id)->get();
    return view('mostrar_curso',compact('curso','metas','modulos', 'obtendras'));
     
        
    }

    public function enrroled(Evento $curso){
         $curso->users()->attach(auth()->user()->id);
        
       return redirect()->route('continuar', $curso);
         
    }

    public function continuar(Evento $curso){
        //$this->authorize('enrolled',$curso);
        $modulos = Modulo::where('evento_id', $curso->id)->get();
        return view('continuar_curso',compact('curso', 'modulos'));
    }

    public function modulo($id){
      
        $modulo = Modulo::find($id);
      
        $modulos = Modulo::where('evento_id', $modulo->evento_id)->get();
        return view('mostrar_modulo', compact('modulo', 'modulos'));
        
    }
}
