<?php

namespace Tasmim\Dashui\Components;

use Illuminate\View\Component;

class CircularAvatar extends Component
{
    public string $name;
    public string $class;
    public $image;

    public function __construct(string $name, string $class, $image = null)
    {
        $this->name = $name;
        $this->class = $class;
        $this->image = $image;
    }

    public function render()
    {
        return view('dashui::components.circular-avatar');
    }
}
