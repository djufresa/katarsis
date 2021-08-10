<?php

namespace App\Http\Livewire;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\acoso;
use Livewire\Component;

class Administrador extends Component
{
    public $buscar;
    public  $name, $email;
    public $isModalOpen = 0;

    
    public function render()
    {
       
        $users = acoso::orderBy('nombre')->get();
        return view('livewire.administrador',compact('users'))
        ->layout('layouts.admin');
    
      
    }

    public function openModalPopover()
    {
        $this->isModalOpen = true;
    }

    public function edit($id)
    {
        $users = User::findOrFail($id);
        $this->id = $id;
        $this->name = $users->name;
        $this->email = $users->email;
        
    
        $this->openModalPopover();
    }
}
