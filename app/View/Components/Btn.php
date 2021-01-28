<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Btn extends Component
{
    public $nameBtn;
    public $slug;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($nameBtn, $slug)
    {
        //
        $this->nameBtn = $nameBtn;
        $this->slug = $slug;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.btn');
    }
}
