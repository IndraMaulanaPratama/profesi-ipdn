<?php

namespace App\Livewire\Page\App\Akademik;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Kalender Akademik - Profesi Kepamongprajaan IPDN')]

class KalenderAkademik extends Component
{
    public function render()
    {
        return view('livewire.page.app.akademik.kalender-akademik');
    }
}
