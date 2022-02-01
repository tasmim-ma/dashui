<?php

namespace Tasmim\Dashui\Components;

use Illuminate\View\Component;

class ConfirmModal extends Component
{
    public string $title;
    public string $message;
    public string $action;

    public function __construct(string $title, string $message, string $action)
    {
        $this->title = $title;
        $this->message = $message;
        $this->action = $action;
    }

    public function render()
    {
        return view('dashui::components.confirm-modal');
    }
}
