<?php

namespace App\Livewire\Page\App;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title("Profile - Profesi Kepamongprajaan IPDN")]
class ProfileDeskripsi extends Component
{
    public function render()
    {
        return view('livewire.page.app.profile-deskripsi');
    }
}
