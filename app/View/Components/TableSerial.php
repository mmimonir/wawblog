<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TableSerial extends Component
{
    public $serial;
    public $model;
    /**
     * Create a new component instance.
     */
    public function __construct($serial, $model)
    {
        $this->serial = $serial;
        $this->model = $model;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.table-serial');
    }
}
