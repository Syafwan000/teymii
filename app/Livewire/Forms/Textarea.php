<?php

namespace App\Livewire\Forms;

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
        return view('livewire.forms.textarea');
    }
}
