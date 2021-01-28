<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Form extends Component
{
    public $name;
    public $method;
    public $slug;
    public $btn;
    public $result;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $method, $slug, $btn, $result = '')
    {
        //
        $this->name = $name;
        $this->method = $method;
        $this->slug = $slug;
        $this->btn = $btn;
        $this->result = $result;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.form');
    }
}
