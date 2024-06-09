<?php

namespace App\Livewire\App\Akademik\Kurikulum;

use App\Models\Kurikulum;
use Livewire\Component;

class Content extends Component
{


    public function render()
    {

        $semester1 = Kurikulum::where('KURIKULUM_SEMESTER', '=', 1)->get();
        $semester2 = Kurikulum::where('KURIKULUM_SEMESTER', '=', 2)->get();

        return view('livewire.app.akademik.kurikulum.content', [
            'semester1' => $semester1,
            'semester2' => $semester2,
        ]);
    }
}
