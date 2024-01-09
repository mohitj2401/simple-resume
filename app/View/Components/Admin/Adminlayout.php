<?php

namespace App\View\Components\Admin;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Log;
use Illuminate\View\Component;

class Adminlayout extends Component
{
    /**
     * Create a new component instance.
     */
    protected $page = "";
    public function __construct($page)
    {
        $this->page = $page;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $data['page'] = $this->page;
        // Log::info($this->page);
        return view('admin.layouts.app', $data);
    }
}
