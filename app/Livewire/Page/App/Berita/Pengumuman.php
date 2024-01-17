<?php

namespace App\Livewire\Page\App\Berita;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Pengumuman - Profesi Kepamongprajaan IPDN')]
class Pengumuman extends Component
{
    public function render()
    {
        return view('livewire.page.app.berita.pengumuman');
    }
}
