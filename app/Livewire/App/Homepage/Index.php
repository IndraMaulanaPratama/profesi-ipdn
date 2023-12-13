<?php

namespace App\Livewire\App\Homepage;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title("Beranda")]
class Index extends Component
{
    public function render()
    {
        return view('livewire.app.homepage.index');
    }
}
