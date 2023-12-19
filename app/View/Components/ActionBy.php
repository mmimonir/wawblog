<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ActionBy extends Component
{
    public string|null $created;
    public string|null $updated;
    /**
     * Create a new component instance.
     */
    public function __construct(string|null $created, string|null $updated)
    {
        $this->created = $created;
        $this->updated = $updated;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.action-by');
    }
}
