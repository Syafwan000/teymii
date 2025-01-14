<?php

namespace App\Livewire;

use Livewire\Attributes\Validate;
use Livewire\Component;

class CreateMessage extends Component
{
    #[Validate('required')]
    public $name;

    #[Validate('required')]
    public $desc;

    public function create()
    {
        $this->validate();
    }

    public function render()
    {
        return view('livewire.create-message');
    }
}
