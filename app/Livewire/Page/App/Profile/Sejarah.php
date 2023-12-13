<?php

namespace App\Livewire\Page\App\Profile;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title("Profesi - Sejarah")]
class Sejarah extends Component
{
    public function render()
    {
        return view('livewire.page.app.profile.sejarah');
    }
}
