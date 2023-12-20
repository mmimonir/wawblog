<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ImageUpload extends Component
{
    public string $label;
    public string $name;
    public string $src;
    /**
     * Create a new component instance.
     */
    public function __construct(string $label, string $name, string $src)
    {
        $this->label = $label;
        $this->name = $name;
        $this->src = $src;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.image-upload');
    }
}
