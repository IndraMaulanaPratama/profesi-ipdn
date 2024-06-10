<?php

namespace App\Livewire\Page;

use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title("Manajemen Menu")]
#[Layout("layouts/admin")]


class Menu extends Component
{
    public $title = 'Buat Data Baru';
    public $spanTitle = 'Menu';
    public $actionName = 'createData';


    #[On("success")]
    public function processSuccessfully($message)
    {
        session()->reflash();
        session()->flash('success', $message);
    }

    #[On('warning')]
    public function failedProcess($message)
    {
        session()->reflash();
        session()->flash('warning', $message);
    }

    #[On('error')]
    public function errorProcess($message)
    {
        session()->reflash();
        session()->flash('error', $message);
    }


    #[On('selected-menu')]
    public function selectedMenu($data)
    {
        $this->title = $data['title'];
        $this->spanTitle = $data['spanTitle'];
        $this->actionName = $data['actionName'];
    }

    public function render()
    {
        return view('livewire.page.menu');
    }
}
