<?php

namespace App\View\Components;

use Illuminate\View\Component;

class LinkMenu extends Component
{
    public $href;
    public $name;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($href, $name)
    {
        //
        $this->href = $href;
        $this->name = $name;

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.link-menu');
    }
}
