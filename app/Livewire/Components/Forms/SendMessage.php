<?php

namespace App\Livewire\Components\Forms;

use App\Models\User;
use Livewire\Attributes\Validate;
use Livewire\Component;

class SendMessage extends Component
{
    #[Validate('required|min:3|max:255')]
    public $message;

    public User $user;

    public function mount($user)
    {
        $this->user = $user;
    }

    public function send()
    {
        $this->validate();

        $this->user->messages()->create([
            'message' => $this->message
        ]);

        $this->reset('message');
        $this->dispatch('sent-message', user: $this->user);
    }

    public function render()
    {
        return view('components.forms.send-message');
    }
}
