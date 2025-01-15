<?php

namespace App\Livewire\Components\Inputs;

use Livewire\Attributes\Modelable;
use Livewire\Component;

class Textarea extends Component
{
    #[Modelable]
    public $value;

    public $label, $trigger, $placeholder;

    public function mount($label, $trigger, $placeholder)
    {
        $this->label = $label;
        $this->trigger = $trigger;
        $this->placeholder = $placeholder;
    }

    public function render()
    {
        return view('components.inputs.textarea');
    }
}
