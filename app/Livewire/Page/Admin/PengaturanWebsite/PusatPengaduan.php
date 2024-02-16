<?php

namespace App\Livewire\Page\Admin\PengaturanWebsite;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Pengaturan Pusat Pengaduan')]
#[Layout('layouts/admin')]

class PusatPengaduan extends Component
{
    public function render()
    {
        return view('livewire.page.admin.pengaturan-website.pusat-pengaduan');
    }
}
