<?php

namespace App\Livewire\Page\App\Profile\Fasilitas;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Fasilitas Pendukung - Profesi Kepamongprajaan')]

class FasilitasPendukung extends Component
{
    public function render()
    {
        return view('livewire.page.app.profile.fasilitas.fasilitas-pendukung');
    }
}
