<?php

namespace Tasmim\Dashui\Components;

use Illuminate\View\Component;

class LayoutForm extends Component
{
    public string $title;
    public string $action;
    public string $back;

    public function __construct(string $title, string $action, string $back = '')
    {
        $this->title = $title;
        $this->action = $action;
        $this->back = $back;
    }

    public function render()
    {
        return view('dashui::containers.form');
    }
}
