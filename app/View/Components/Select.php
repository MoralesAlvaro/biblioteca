<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Select extends Component
{
    public $fieldName;
    public $nameSelect;
    public $paceholder;
    public $result;
    public $campo;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($fieldName, $nameSelect, $paceholder, $result, $campo)
    {
        //
        $this->fieldName = $fieldName;
        $this->nameSelect = $nameSelect;
        $this->paceholder = $paceholder;
        $this->result = $result;
        $this->campo = $campo;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.select');
    }
}
