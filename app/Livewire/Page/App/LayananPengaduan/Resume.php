<?php

namespace App\Livewire\Page\App\LayananPengaduan;

use App\Models\Pengaduan;
use Livewire\Attributes\Title;
use Livewire\Component;

class Resume extends Component
{
    #[Title('Resume Pengaduan')]

    public $idPengaduan, $dataPengaduan;
    public $id, $nama, $email, $pengaduan, $lampiran;


    public function mount($id)
    {
        try {
            $this->idPengaduan = $id;
            $this->dataPengaduan = Pengaduan::where('PENGADUAN_ID', $id)->first();

            if (null == $this->dataPengaduan):
                return redirect('layanan-pengaduan');
            endif;
            
        } catch (\Throwable $th) {
            return redirect('layanan-pengaduan');
        }
    }


    public function render()
    {
        return view('livewire.page.app.layanan-pengaduan.resume', [
            'data' => [
                'id' => $this->dataPengaduan->PENGADUAN_ID,
                'nama' => $this->dataPengaduan->PENGADUAN_NAME,
                'email' => $this->dataPengaduan->PENGADUAN_EMAIL,
                'pengaduan' => $this->dataPengaduan->PENGADUAN_VALUE,
                'lampiran' => $this->dataPengaduan->PENGADUAN_ATTACHMENT,
                'status' => $this->dataPengaduan->PENGADUAN_STATUS,
            ]
        ]);
    }
}
