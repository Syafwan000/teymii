<?php

namespace App\Livewire\Pages;

use Livewire\Component;

class About extends Component
{
    public function render()
    {
        return view('pages.about')
            ->layout('layouts.app', [
                'title' => 'About — TeyMii',
            ]);
    }
}
