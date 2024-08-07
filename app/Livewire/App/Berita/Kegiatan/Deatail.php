<?php

namespace App\Livewire\App\Berita\Kegiatan;

use App\Models\Kegiatan;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title("Kegiatan PPPKp - Profesi Kepamongprajaan IPDN")]

class Deatail extends Component
{
    public $id;

    public function mount($id){
        $this->id = $id;
    }

    public function render()
    {
        $data = Kegiatan::find($this->id);

        return view('livewire.app.berita.kegiatan.deatail', ['data' => $data]);
    }
}
