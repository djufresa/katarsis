<?php

namespace App\View\Components;

use Illuminate\View\Component;


class menu extends Component
{
    public $modulos;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($modulos)
    {
        $this->modulos = $modulos;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.menu');
    }
}
