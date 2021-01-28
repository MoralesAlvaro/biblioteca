<?php

namespace App\View\Components;

use Illuminate\View\Component;

class FieldEdit extends Component
{
    public $fieldName;
    public $type;
    public $nameInput;
    public $result;
    public $maxlength;
    public $minlength;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($fieldName, $type, $nameInput, $result, $maxlength = '', $minlength = '' )
    {
        //
        $this->fieldName = $fieldName;
        $this->type = $type;
        $this->nameInput = $nameInput;
        $this->result = $result;
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
        return view('components.field-edit');
    }
}
