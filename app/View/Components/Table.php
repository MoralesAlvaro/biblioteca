<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Table extends Component
{
    public $panel;
    public $slug;
    public $encabezados;
    public $result;
    public $campos;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($panel, $slug, $encabezados, $result, $campos)
    {
        //
        $this->panel = $panel;
        $this->encabezados = $encabezados;
        $this->slug = $slug;
        $this->result = $result;
        $this->campos = $campos;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.table');
    }
}
