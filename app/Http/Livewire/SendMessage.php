<?php

namespace App\Http\Livewire;

use App\Models\Message;
use Livewire\Component;

class SendMessage extends Component
{
    public $user;
    public $message;
    
    public function mount($user)
    {
        $this->user = $user;
    }

    public function addMessage()
    {
        $this->validate([
            'message' => 'required|max:255|min:3'
        ]);

        Message::create([
            'message' => $this->message,
            'user_id' => $this->user->id
        ]);

        $this->emit('stored');
        $this->message = '';
    }

    public function updated($field)
    {
        $this->validateOnly($field, [
            'message' => 'max:255|min:3'
        ]);
    }

    public function render()
    {
        return view('livewire.send-message');
    }
}
