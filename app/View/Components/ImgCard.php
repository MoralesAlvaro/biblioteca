<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ImgCard extends Component
{
    public $src;
    public $alt;
    public $class;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($src, $alt, $class)
    {
        //
        $this->src = $src;
        $this->alt = $alt;
        $this->class = $class;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.img-card');
    }
}
