<?php

namespace App\Livewire\App\Akademik\KalenderAkademik;

use App\Models\KalenderAkademik;
use Livewire\Component;

class Content extends Component
{
    public function render()
    {

        $semester1 = KalenderAkademik::where('KALENDER_SEMESTER', 1)->orderBy('KALENDER_URUTAN')->get();
        $semester2 = KalenderAkademik::where('KALENDER_SEMESTER', 2)->orderBy('KALENDER_URUTAN')->get();

        return view('livewire.app.akademik.kalender-akademik.content', [
            'semester1' => $semester1,
            'semester2' => $semester2,
        ]);
    }
}
