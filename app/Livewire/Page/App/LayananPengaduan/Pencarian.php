<?php

namespace App\Livewire\Page\App\LayananPengaduan;

use App\Models\Pengaduan;
use Illuminate\Support\Facades\Route;
use Livewire\Attributes\Title;
use Livewire\Component;

class Pencarian extends Component
{
    #[Title('Pencarian Data Pengaduan')]

    public $dataPengaduan;
    public $id, $nama, $email, $pengaduan, $lampiran;
    public $latar, $textColor, $value;

    public function mount($id)
    {
        // *** ini adalah ara mengambil query url secara konfensional *** //
        // $this->idPengaduan = Route::current()->parameter('id');

        try {
            $this->dataPengaduan = Pengaduan::where('PENGADUAN_ID', $id)->first();

        } catch (\Throwable $th) {
            session()->reflash();
            session()->flash('error', 'Terjadi kesalahan pada system, silahkan hubungi pihak pengembang aplikasi');
        }
    }



    public function render()
    {

        return view(
            'livewire.page.app.layanan-pengaduan.pencarian',
            [
                'data' => [
                    'id' => $this->dataPengaduan->PENGADUAN_ID,
                    'nama' => $this->dataPengaduan->PENGADUAN_NAME,
                    'email' => $this->dataPengaduan->PENGADUAN_EMAIL,
                    'pengaduan' => $this->dataPengaduan->PENGADUAN_VALUE,
                    'lampiran' => $this->dataPengaduan->PENGADUAN_ATTACHMENT,
                    'status' => $this->dataPengaduan->PENGADUAN_STATUS,
                    'solusi' => $this->dataPengaduan->PENGADUAN_SOLUTION,
                ]
            ]
        );
    }
}
