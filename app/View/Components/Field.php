<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Field extends Component
{
    public $fieldName;
    public $nameInput;
    public $type;
    public $placeholder;
    public $maxlength;
    public $minlength;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($fieldName, $nameInput, $type, $placeholder, $maxlength = '', $minlength = '')
    {
        $this->fieldName = $fieldName;
        $this->nameInput = $nameInput;
        $this->type = $type;
        $this->placeholder = $placeholder;
        $this->maxlength = $maxlength;
        $this->minlength = $minlength;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.field');
    }
}
