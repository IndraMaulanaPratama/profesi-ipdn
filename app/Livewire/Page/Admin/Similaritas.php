<?php

namespace App\Livewire\Page\Admin;

use Livewire\Attributes\On;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title("Data Similaritas")]
class Similaritas extends Component
{



    #[On("data-rejected"), On("data-updated")]
    public function processSuccessfully($message)
    {
        session()->reflash();
        session()->flash('success', $message);
    }


    #[On("failed-rejecting-data"), On("failed-updating-data")]
    public function failedProcess($message)
    {
        session()->reflash();
        session()->flash('warning', $message);
    }


    public $title = 'Formulir Data Pengguna';
    public function render()
    {
        return view('livewire.page.admin.similaritas');
    }
}
