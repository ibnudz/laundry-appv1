<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TableRowAction extends Component
{
    /**
     * Create a new component instance.
     */
    public $route;
    public $value;
    public $isEditable;
    public $isDeletable;
    public $isShowable;

    public function __construct(
        $route,
        $value,
        $isDeletable = true,
        $isEditable = true,
        $isShowable = true,
    ) {
        $this->route = $route;
        $this->value = $value;
        $this->isEditable = $isEditable;
        $this->isDeletable = $isDeletable;
        $this->isShowable = $isShowable;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.table-row-action');
    }
}
