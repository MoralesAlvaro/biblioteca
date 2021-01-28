<?php

namespace App\View\Components;

use Illuminate\View\Component;

class MultiSelect extends Component
{
    public $fieldName;
    public $nameSelect;
    public $result;
    public $campo;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($fieldName, $nameSelect, $result, $campo)
    {
        //
        $this->fieldName = $fieldName;
        $this->nameSelect = $nameSelect;
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
        return view('components.multi-select');
    }
}
