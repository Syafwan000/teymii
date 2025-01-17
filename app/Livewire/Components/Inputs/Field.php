<?php

namespace App\Livewire\Components\Inputs;

use Livewire\Attributes\Modelable;
use Livewire\Attributes\Reactive;
use Livewire\Component;

class Field extends Component
{
    #[Modelable]
    public $value;

    #[Reactive]
    public $error;

    public $label, $trigger, $type, $placeholder;

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
