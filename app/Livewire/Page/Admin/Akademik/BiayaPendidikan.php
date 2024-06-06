<?php

namespace App\Livewire\Page\Admin\Akademik;

use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Attributes\Title;
use Livewire\Component;

class BiayaPendidikan extends Component
{

    #[Title('Biaya Pendidikan')]
    #[Layout("layouts/admin")]


    #[On("success")]
    public function processSuccessfully($message)
    {
        session()->reflash();
        session()->flash('success', $message);
    }



    #[On("warning")]
    public function warningProcess($message)
    {
        session()->reflash();
        session()->flash('warning', $message);
    }


    #[On("error")]
    public function errorProcess($message)
    {
        session()->reflash();
        session()->flash('error', $message);
    }

    public function render()
    {
        return view('livewire.page.admin.akademik.biaya-pendidikan');
    }
}
