<?php

namespace App\Livewire\Page\App\Profile\Sdm;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Dosen Profesi Kepamongprajaan IPDN')]

class Dosen extends Component
{
    public function render()
    {
        return view('livewire.page.app.profile.sdm.dosen');
    }
}
