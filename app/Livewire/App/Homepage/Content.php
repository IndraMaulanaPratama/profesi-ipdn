<?php

namespace App\Livewire\App\Homepage;

use App\Models\Kegiatan;
use Livewire\Component;

class Content extends Component
{
    public function render()
    {
        $kegiatan = Kegiatan::orderBy('created_at')->limit(3)->get();

        return view('livewire.app.homepage.content', [
            'data' => $kegiatan
        ]);
    }
}
