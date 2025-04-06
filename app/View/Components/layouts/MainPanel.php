<?php

namespace App\View\Components\Layouts;

use Illuminate\View\Component;

class MainPanel extends Component
{
    public function __construct()
    {
    }

    public function render()
    {
        return view('components.layouts.main-panel');
    }
}
