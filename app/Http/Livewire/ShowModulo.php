<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Evento;
use App\Models\Modulo;
use App\Models\Tema;

use App\View\Components\modulo as ComponentsModulo;

class ShowModulo extends Component
{
    public $curso;
    public $temas;
   
    
    public function mount(Evento $curso){
        $this->curso = $curso;
        
       
    }
    public function render()
    {
        //$modulos = Modulo::where('evento_id', $curso->id)->get();
        return view('livewire.show-modulo');
       
    }
  
    public function mostrar_modulo($id){
        //$modulos = Modulo::find($id);
        //$this->modulos=Modulo::find($id);
        //$temas = Modulo::find($id);
       
    }
}
