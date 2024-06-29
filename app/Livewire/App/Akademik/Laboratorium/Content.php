<?php

namespace App\Livewire\App\Akademik\Laboratorium;

use App\Models\LaboratoriumLayanan;
use App\Models\LaboratoriumPelatihan;
use Livewire\Component;

class Content extends Component
{
    public function render()
    {
        $layanan = LaboratoriumLayanan::orderBy('LAYANAN_URUTAN')->get();
        $pelatihan = LaboratoriumPelatihan::where('PELATIHAN_KATEGORI', 'pelatihan')->orderBy('PELATIHAN_URUTAN')->get();
        $sumber = LaboratoriumPelatihan::where('PELATIHAN_KATEGORI', 'sumber')->orderBy('PELATIHAN_URUTAN')->get();

        return view('livewire.app.akademik.laboratorium.content', [
            'layanan' => $layanan,
            'pelatihan' => $pelatihan,
            'sumber' => $sumber,
        ]);
    }
}
