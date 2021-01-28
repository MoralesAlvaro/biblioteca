<?php

namespace App\View\Components;

use Illuminate\View\Component;

class PCard extends Component
{
    public $result;
    public $nameLabel;
    public $icono;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($result, $nameLabel, $icono)
    {
        //
        $this->result = $result;
        $this->nameLabel = $nameLabel;
        $this->icono = $icono;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.p-card');
    }
}
