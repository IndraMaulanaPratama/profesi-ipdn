<?php

namespace App\Livewire\Page\Admin\Akademik\Laboratorium;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

class Index extends Component
{

    #[Title('Laboratorium Profesi Kepamongprajaan IPDN')]
    #[Layout("layouts/admin")]

    public function render()
    {
        return view('livewire.page.admin.akademik.laboratorium.index');
    }
}
