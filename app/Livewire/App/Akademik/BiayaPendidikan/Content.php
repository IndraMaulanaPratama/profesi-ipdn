<?php

namespace App\Livewire\App\Akademik\BiayaPendidikan;

use App\Models\BiayaPendidikan;
use Livewire\Component;

class Content extends Component
{
    public function render()
    {
        $data = BiayaPendidikan::oldest()->get();
        $total = BiayaPendidikan::sum('PENDIDIKAN_TARIF');

        return view('livewire.app.akademik.biaya-pendidikan.content', ['data' => $data, 'total' => $total]);
    }
}
