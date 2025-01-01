<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class LayoutComponent extends Component
{
    /**
     * Create a new component instance.
     */
    public $resource;

    public function __construct($resource)
    {
        $this->resource = $resource;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.layout-component');
    }
}
