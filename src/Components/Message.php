<?php

namespace Tasmim\Dashui\Components;

use Illuminate\View\Component;

class Message extends Component
{
    public function render()
    {
        return view('dashui::components.message');
    }
}
