<?php

namespace App\Livewire\Page\App\Akademik;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Kurikulum - Profesi Kepamongprajaan')]


class Kurikulum extends Component
{
    public function render()
    {
        return view('livewire.page.app.akademik.kurikulum');
    }
}
