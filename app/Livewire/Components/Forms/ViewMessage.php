<?php

namespace App\Livewire\Components\Forms;

use App\Models\User;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class ViewMessage extends Component
{
    use WithPagination;

    public User $user;

    public $messages;

    #[On('sent-message')]
    public function refreshData()
    {
        $this->messages = $this->user->messages;
    }

    public function mount($user)
    {
        $this->user = $user;
        $this->messages = $user->messages;
    }

    public function refreshMessage()
    {
        $this->messages = $this->user->messages;
    }

    public function render()
    {
        return view('components.forms.view-message');
    }
}
