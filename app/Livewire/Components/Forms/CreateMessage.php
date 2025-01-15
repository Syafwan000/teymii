<?php

namespace App\Livewire\Components\Forms;

use Livewire\Attributes\Validate;
use Livewire\Component;

class CreateMessage extends Component
{
    #[Validate('required|min:3|max:40')]
    public $name;

    #[Validate('max:255')]
    public $description;

    public function create()
    {
        $this->validate();
    }

    public function render()
    {
        return view('components.forms.create-message');
    }
}
