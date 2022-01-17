<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Str;

class CreateMessage extends Component
{
    public $name;
    public $desc;

    public function addName()
    {
        $this->validate([
            'name' => 'required|max:55|min:3',
            'desc' => 'max:120'
        ]);

        $randomString = Str::random(7);

        User::create([
            'name' => $this->name,
            'desc' => $this->desc,
            'slug' => $randomString
        ]);

        $this->name = '';
        $this->desc = '';

        redirect('/' . $randomString);
    }

    public function updated($field)
    {
        $this->validateOnly($field, [
            'name' => 'max:55|min:3',
            'desc' => 'max:120'
        ]);
    }

    public function render()
    {
        return view('livewire.create-message');
    }
}
