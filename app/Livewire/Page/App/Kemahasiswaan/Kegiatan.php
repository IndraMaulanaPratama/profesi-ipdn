<?php

namespace App\Livewire\Page\App\Kemahasiswaan;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Kegiatan Kemahasiswaan - Profesi Kepamongprajaan IPDN')]

class Kegiatan extends Component
{
    public function render()
    {
        return view('livewire.page.app.kemahasiswaan.kegiatan');
    }
}
