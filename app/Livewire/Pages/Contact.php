<?php

namespace App\Livewire\Pages;

use Livewire\Component;

class Contact extends Component
{
    public function render()
    {
        return view('pages.contact')
            ->title('Contact — TeyMii');
    }
}
