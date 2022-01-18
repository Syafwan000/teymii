<?php

namespace App\Http\Livewire;

use App\Models\Message;
use Livewire\Component;
use Livewire\WithPagination;

class ShowMessage extends Component
{
    use WithPagination;

    public $user;
    protected $listeners = ['stored'];
    protected $paginationTheme = 'bootstrap';

    public function mount($user)
    {
        $this->user = $user;
    }

    public function stored()
    {

    }
    
    public function render()
    {
        return view('livewire.show-message', [
            'messages' => Message::where('user_id', $this->user->id)->latest()->paginate(20),
            'total_messages' => count(Message::where('user_id', $this->user->id)->get())
        ]);
    }
}
