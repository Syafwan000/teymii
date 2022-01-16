<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Str;

class CreateMessage extends Component
{
    public $newName;

    public function addName()
    {
        $this->validate([
            'newName' => 'required|max:55'
        ]);

        $randomString = Str::random(7);

        User::create([
            'name' => $this->newName,
            'slug' => $randomString
        ]);

        $this->newName = '';

        redirect('/' . $randomString);
    }

    public function render()
    {
        return view('livewire.create-message');
    }
}
