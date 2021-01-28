<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SectionMenu extends Component
{

    // Atributos
    public $icon;
    public $name;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($icon, $name)
    {
        //
        $this->icon = $icon;
        $this->name = $name;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.section-menu');
    }
}
