<?php

namespace Tasmim\Dashui\Components;

use Illuminate\View\Component;

class Alert extends Component
{
    public function render()
    {
        return view('dashui::components.alert');
    }
}
