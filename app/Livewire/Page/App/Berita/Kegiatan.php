<?php

namespace App\Livewire\Page\App\Berita;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title("Kegiatan PPPKp - Profesi Kepamongprajaan IPDN")]

class Kegiatan extends Component
{
    public function render()
    {
        return view('livewire.page.app.berita.kegiatan');
    }
}
