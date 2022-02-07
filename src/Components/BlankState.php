<?php

namespace Tasmim\Dashui\Components;

use Illuminate\View\Component;

class BlankState extends Component
{
    public string $title;
    public string $message;
    public string $class;

    public function __construct(string $title, string $message, string $class = '')
    {
        $this->title = $title;
        $this->message = $message;
        $this->class = $class;
    }

    public function render()
    {
        return view('dashui::components.blank-state');
    }
}
