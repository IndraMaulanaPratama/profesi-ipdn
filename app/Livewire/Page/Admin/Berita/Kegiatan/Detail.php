<?php

namespace App\Livewire\Page\Admin\Berita\Kegiatan;

use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Detail Berita - Kegiatan Laboratorium Profesi Kepamongprajaan IPDN')]
#[Layout('layouts/admin')]


class Detail extends Component
{
    public $id;


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
        $this->$id = $id;
    }

    public function render()
    {
        return view('livewire.page.admin.berita.kegiatan.detail', ['id' => $this->id]);
    }
}