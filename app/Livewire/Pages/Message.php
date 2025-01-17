<?php

namespace App\Livewire\Pages;

use App\Models\User;
use Livewire\Component;

class Message extends Component
{
    public User $user;

    public function mount($slug)
    {
        $this->user = User::getInstanceOfUser($slug);
    }

    public function render()
    {
        return view('pages.message')
            ->title('Send message to ' . $this->user->name . ' — TeyMii');
    }
}
