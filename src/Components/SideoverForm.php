<?php

namespace Tasmim\Dashui\Components;

use Illuminate\View\Component;

class SideoverForm extends Component
{
    public string $title;
    public string $action;
    public string $actionName;

    public function __construct(string $title, string $action, string $actionName = 'Enregistrer')
    {
        $this->title = $title;
        $this->actionName = $actionName;
        $this->action = $action;
    }

    public function render()
    {
        return view('dashui::components.sideover-form');
    }
}
