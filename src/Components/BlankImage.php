<?php

namespace Tasmim\Dashui\Components;

use Illuminate\View\Component;

class BlankImage extends Component
{
    public function render()
    {
        return view('dashui::components.blank-image');
    }
}
