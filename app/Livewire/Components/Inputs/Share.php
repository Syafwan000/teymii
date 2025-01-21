<?php

namespace App\Livewire\Components\Inputs;

use App\Models\User;
use Livewire\Component;

class Share extends Component
{
    public User $user;

    public function mount($user)
    {
        $this->user = $user;
    }

    public function render()
    {
        return view('components.inputs.share');
    }
}
