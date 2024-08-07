<?php

namespace App\Livewire\App\Berita\Kegiatan;

use App\Models\Kegiatan;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title("Kegiatan PPPKp - Profesi Kepamongprajaan IPDN")]

class Content extends Component
{
    public function render()
    {
        $data = Kegiatan::orderBy('updated_at', 'desc')->get();
        return view('livewire.app.berita.kegiatan.content', ['data' => $data]);
    }
}
