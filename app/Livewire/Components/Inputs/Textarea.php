<?php

namespace App\Livewire\Components\Inputs;

use Livewire\Attributes\Modelable;
use Livewire\Attributes\Reactive;
use Livewire\Component;

class Textarea extends Component
{
    #[Modelable]
    public $value;

    #[Reactive]
    public $error;

    public $label, $trigger, $placeholder;

    public function mount($label, $trigger, $error, $placeholder)
    {
        $this->label = $label;
        $this->trigger = $trigger;
        $this->error = $error;
        $this->placeholder = $placeholder;
    }

    public function render()
    {
        return view('components.inputs.textarea');
    }
}
