<?php

namespace Tasmim\Dashui\Components;

use Illuminate\View\Component;

class EmptyState extends Component
{
    public string $title;
    public string $message;
    public string $action;
    public string $link;

    public function __construct(string $title, string $message, string $action = '', string $link = '')
    {
        $this->title = $title;
        $this->message = $message;
        $this->action = $action;
        $this->link = $link;
    }

    public function render()
    {
        return view('dashui::components.empty-state');
    }
}
