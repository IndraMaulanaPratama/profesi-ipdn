<?php

namespace App\Livewire\Page;

use App\Models\pivotMenu;
use App\Models\Role;
use App\Models\User;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('layouts.app')]
class Dashboard extends Component
{
    #[Title('Beranda - Pendidikan Profesi dan Kepamongprajaan')]

    public function render()
    {
        return view('livewire.page.dashboard');
    }
}
