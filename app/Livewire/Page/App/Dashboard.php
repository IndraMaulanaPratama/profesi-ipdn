<?php

namespace App\Livewire\Page\App;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title("Beranda - Profesi Kepamongprajaan IPDN")]
class Dashboard extends Component
{
    public function render()
    {
        return view('livewire.page.app.dashboard');
    }
}
