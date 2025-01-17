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

    public function create()
    {
        $this->validate();

        $createRandomSlug = Str::random(10);

        User::create([
            'name' => $this->name,
            'anon_name' => $this->anon_name,
            'desc' => $this->description,
            'slug' => $createRandomSlug,
        ]);

        $this->redirect(route('message', $createRandomSlug), navigate: true);
    }

    public function render()
    {
        return view('components.forms.create-message');
    }
}
