<?php

namespace Tasmim\Dashui\Components;

use Illuminate\View\Component;

class LayoutWide extends Component
{
    public function render()
    {
        return view('dashui::containers.wide');
    }
}
