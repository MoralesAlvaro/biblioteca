<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Texttarea extends Component
{
    public $fieldName;
    public $nameText;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($fieldName, $nameText)
    {
        //
        $this->fieldName = $fieldName;
        $this->nameText = $nameText;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.texttarea');
    }
}
