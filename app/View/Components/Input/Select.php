<?php

namespace App\View\Components\Input;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Select extends Component
{

    private $options;
    private $label;
    private $name;

    /**
     * Create a new component instance.
     */
    public function __construct($options, $label, $name)
    {
        $this->options = $options;
        $this->label = $label;
        $this->name = $name;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.input.select', [
            'options' => $this->options,
            'label' => $this->label,
            'name' => $this->name
        ]);
    }
}
