<?php

namespace App\Livewire\Page\Admin\LayananPengaduan;

use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title("Layanan Pengaduan")]
#[Layout("layouts/admin")]

class LayananPengaduan extends Component
{


    #[On("process-success")]
    public function processSuccessfully($message)
    {
        session()->reflash();
        session()->flash('success', $message);
    }



    #[On("process-warning")]
    public function warningProcess($message)
    {
        session()->reflash();
        session()->flash('warning', $message);
    }


    #[On("process-failed")]
    public function errorProcess($message)
    {
        session()->reflash();
        session()->flash('error', $message);
    }


    public function render()
    {
        return view('livewire.page.admin.layanan-pengaduan.layanan-pengaduan');
    }
}
