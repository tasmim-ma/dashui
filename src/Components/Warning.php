<?php

namespace Tasmim\Dashui\Components;

use Illuminate\View\Component;

class Warning extends Component
{
    public string $message;

    public function __construct(string $message)
    {
        $this->message = $message;
    }

    public function render()
    {
        return view('dashui::components.warning');
    }
}
