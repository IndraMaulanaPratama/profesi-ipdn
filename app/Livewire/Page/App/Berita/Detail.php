<?php

namespace App\Livewire\Page\App\Berita;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title("Kegiatan PPPKp - Profesi Kepamongprajaan IPDN")]

class Detail extends Component
{
    public $id;
    public function render()
    {
        return view('livewire.page.app.berita.detail', ['id' => $this->id]);
    }
}
