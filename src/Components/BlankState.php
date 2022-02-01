<?php

namespace Tasmim\Dashui\Components;

use Illuminate\View\Component;

class BlankState extends Component
{
    public string $title;
    public string $message;

    public function __construct(string $title, string $message)
    {
        $this->title = $title;
        $this->message = $message;
    }

    public function render()
    {
        return view('dashui::components.blank-state');
    }
}
