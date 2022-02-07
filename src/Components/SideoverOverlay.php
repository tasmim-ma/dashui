<?php

namespace Tasmim\Dashui\Components;

use Illuminate\View\Component;

class SideoverOverlay extends Component
{
    public string $title;

    public function __construct(string $title)
    {
        $this->title = $title;
    }

    public function render()
    {
        return view('dashui::components.sideover-overlay');
    }
}
