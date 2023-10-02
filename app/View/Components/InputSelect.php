<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class InputSelect extends Component
{
    /**
     * Create a new component instance.
     */
    public $name;
    public $label;
    public $value;
    public $options;

    public function __construct($label, $name, $options, $value = null)
    {
        $this->label = $label;
        $this->name = $name;
        $this->options = $options;
        $this->value = $value;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.input-select');
    }
}
