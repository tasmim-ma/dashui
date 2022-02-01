<?php

namespace Tasmim\Dashui\Components;

use Illuminate\View\Component;

class LayoutIndex extends Component
{
    public string $title;
    public string $action;
    public string $button;

    public function __construct(string $title, string $button = '', string $action = '')
    {
        $this->title = $title;
        $this->button = $button;
        $this->action = $action;
    }

    public function render()
    {
        return view('dashui::containers.index');
    }
}
