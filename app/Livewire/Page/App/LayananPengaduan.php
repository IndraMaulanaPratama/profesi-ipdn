<?php

namespace App\Livewire\Page\App;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title("Profesi - Layanan Pengaduan")]
class LayananPengaduan extends Component
{
    public function render()
    {
        return view('livewire.page.app.layanan-pengaduan');
    }
}
