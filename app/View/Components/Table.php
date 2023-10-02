<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Table extends Component
{
    /**
     * Create a new component instance.
     */
    public $create;
    public $columns;
    public $search;
    public $datum;
    public $numPage;

    public function __construct($columns, $search, $datum, $numPage, $create = null)
    {
        $this->create = $create;
        $this->columns = $columns;
        $this->search = $search;
        $this->datum = $datum;
        $this->numPage = $numPage;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.table');
    }
}
