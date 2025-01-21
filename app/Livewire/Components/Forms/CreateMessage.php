<?php

namespace App\Livewire\Components\Forms;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\Attributes\Validate;

class CreateMessage extends Component
{
    #[Validate('required|min:3|max:40')]
    public $name;

    #[Validate('max:24')]
    public $anon_name;

    #[Validate('max:120')]
    public $description;

    public $total_messages = 0;

    public function create()
    {
        $this->validate();

        $createRandomSlug = Str::random(10);

        $user = User::create([
            'name' => $this->name,
            'anon_name' => $this->anon_name,
            'desc' => $this->description,
            'slug' => $createRandomSlug,
        ]);

        session(['instance_user' => $user]);
        $this->redirect(route('message', $createRandomSlug), navigate: true);
    }

    public function mount()
    {
        if (session()->has('instance_user')) {
            $user = User::where('slug', session('instance_user')->slug)->with('messages')->first();
            $this->total_messages = $user->messages->count();
        }
    }

    public function render()
    {
        return view('components.forms.create-message');
    }
}
