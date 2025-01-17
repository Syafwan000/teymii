<?php

namespace App\Livewire\Pages;

use Livewire\Component;

class About extends Component
{
    public function render()
    {
        return view('pages.about')
            ->title('About — TeyMii');
    }
}
