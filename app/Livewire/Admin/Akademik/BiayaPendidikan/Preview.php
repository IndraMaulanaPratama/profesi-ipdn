<?php

namespace App\Livewire\Admin\Akademik\BiayaPendidikan;

use App\Models\BiayaPendidikan;
use Livewire\Attributes\On;
use Livewire\Component;

class Preview extends Component
{

    // Nyandak sinyal ti component sanes kanggo auto refresh halaman preview nalika aya robih data
    protected $listeners = ['success' => '$refresh'];

    public function render()
    {
        $data = BiayaPendidikan::oldest()->get();
        $total = BiayaPendidikan::sum('PENDIDIKAN_TARIF');

        return view('livewire.admin.akademik.biaya-pendidikan.preview', [
            'data' => $data,
            'total' => $total
        ]);
    }
}
