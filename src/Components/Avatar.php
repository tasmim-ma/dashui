<?php

namespace Tasmim\Dashui\Components;

use Illuminate\View\Component;

class Avatar extends Component
{
    public $id;
    public string $name;
    public string $email;
    public $image;

    public function __construct($id, string $name, string $email, $image = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->image = $image;
    }

    public function render()
    {
        return view('dashui::components.avatar');
    }
}
