<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Modelable;
use Livewire\Component;

class Input extends Component
{
    #[Modelable]
    public $value;

    public $label, $trigger, $type, $placeholder;

    public function mount($label, $trigger, $type, $placeholder)
    {
        $this->label = $label;
        $this->trigger = $trigger;
        $this->type = $type;
        $this->placeholder = $placeholder;
    }

    public function render()
    {
        return view('livewire.forms.input');
    }
}
