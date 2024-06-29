<?php

namespace App\Livewire\Page\Admin\Akademik\Laboratorium\Pelatihan;

use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Attributes\Title;
use Livewire\Component;

class Update extends Component
{
    public $id;

    #[Title('Ubah pelatihan - Laboratorium Profesi Kepamongprajaan IPDN')]
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


    public function mount($id)
    {
        $this->id = $id;
    }


    public function render()
    {
        return view('livewire.page.admin.akademik.laboratorium.pelatihan.update', ['id' => $this->id]);
    }
}
