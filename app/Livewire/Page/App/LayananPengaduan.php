<?php

namespace App\Livewire\Page\App;

use Livewire\Attributes\On;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title("Profesi - Layanan Pengaduan")]

class LayananPengaduan extends Component
{
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
        return view('livewire.page.app.layanan-pengaduan');
    }
}
