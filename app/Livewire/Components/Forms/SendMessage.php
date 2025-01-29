<?php

namespace App\Livewire\Components\Forms;

use App\Models\User;
use Livewire\Attributes\On;
use Livewire\Attributes\Validate;
use Livewire\Component;

class SendMessage extends Component
{
    #[Validate('required|min:3|max:255')]
    public $message;

    public $song, $songId;

    public User $user;

    public function mount($user)
    {
        $this->user = $user;
    }

    #[On('selected-song')]
    public function selectedSong($songId)
    {
        $this->songId = $songId;
    }

    public function send()
    {
        $this->validate();

        $this->user->messages()->create([
            'message' => $this->message,
            'song' => $this->songId,
        ]);

        $this->reset('message', 'song', 'songId');
        $this->dispatch('reset-song');
        $this->dispatch('sent-message', user: $this->user);
    }

    public function render()
    {
        return view('components.forms.send-message');
    }
}
