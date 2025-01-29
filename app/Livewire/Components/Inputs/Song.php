<?php

namespace App\Livewire\Components\Inputs;

use App\Services\SpotifyServices;
use Livewire\Attributes\Modelable;
use Livewire\Attributes\On;
use Livewire\Attributes\Reactive;
use Livewire\Component;

class Song extends Component
{
    #[Modelable]
    public $value;

    #[Reactive]
    public $error;

    public $label, $trigger, $type, $placeholder, $selectedSong;

    public function selectSong(SpotifyServices $spotifyServices, $songId)
    {
        $this->selectedSong = $spotifyServices->getTrack($songId);
        $this->dispatch('selected-song', songId: $songId);
    }

    #[On('reset-song')]
    public function resetSong()
    {
        $this->reset('value', 'selectedSong');
    }

    public function render(SpotifyServices $spotifyServices)
    {
        return view('components.inputs.song', [
            'songs' => $spotifyServices->searchTrack($this->value),
        ]);
    }
}
