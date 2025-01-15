<?php

namespace App\Livewire\Components\Inputs;

use Livewire\Attributes\Modelable;
use Livewire\Component;

class Field extends Component
{
    #[Modelable]
    public $value;

    public $label, $trigger, $type, $error, $placeholder;

    public function mount($label, $trigger, $type, $error, $placeholder)
    {
        $this->label = $label;
        $this->trigger = $trigger;
        $this->type = $type;
        $this->error = $error;
        $this->placeholder = $placeholder;
    }

    public function render()
    {
        return view('components.inputs.field');
    }
}
