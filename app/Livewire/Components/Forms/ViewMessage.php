<?php

namespace App\Livewire\Components\Forms;

use App\Models\Message;
use App\Models\User;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class ViewMessage extends Component
{
    use WithPagination;

    public User $user;

    public $allMessages;

    #[On('sent-message')]
    public function refreshData()
    {
        $this->allMessages = $this->user->messages;
    }

    public function mount($user)
    {
        $this->user = $user;
        $this->allMessages = $user->messages;
    }

    public function paginationView()
    {
        return 'components.display.pagination';
    }

    public function render()
    {
        $messages = Message::with('user')->where('user_id', $this->user->id)->latest()->paginate(5);

        return view('components.forms.view-message', [
            'messages' => $messages,
        ]);
    }
}
