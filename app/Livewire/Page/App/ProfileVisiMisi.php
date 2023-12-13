<?php

namespace App\Livewire\Page\App;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Profesi - Visi dan Misi')]
class ProfileVisiMisi extends Component
{
    public function render()
    {
        return view('livewire.page.app.profile-visi-misi');
    }
}
