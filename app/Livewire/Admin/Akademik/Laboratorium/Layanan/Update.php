<?php

namespace App\Livewire\Admin\Akademik\Laboratorium\Layanan;

use App\Models\LaboratoriumLayanan;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\On;
use Livewire\Attributes\Rule;
use Livewire\Component;

class Update extends Component
{
    public $updateId;

    #[Rule(['required', 'string', 'max:255'])]
    public $updateJudul;

    #[Rule(['required', 'string'])]
    public $updateDeskripsi;

    #[Rule(['required', 'integer'])]
    public $updateUrutan;


    public function mount($id)
    {
        $layanan = LaboratoriumLayanan::find($id);

        $this->updateId = $layanan['LAYANAN_ID'];
        $this->updateJudul = $layanan['LAYANAN_JUDUL'];
        $this->updateDeskripsi = $layanan['LAYANAN_DESKRIPSI'];
        $this->updateUrutan = $layanan['LAYANAN_URUTAN'];
    }


    /**
     * Fungsi Kanggo ngarobih data tabel
     * 
     * @updateId, @inputJudul, @inputDeskripsi, @inputUrutan
     */
    public function updateData()
    {
        $this->validate();

        try {
            // Ngadamel inisialisasi data
            $data = [
                'LAYANAN_JUDUL' => $this->updateJudul,
                'LAYANAN_DESKRIPSI' => $this->updateDeskripsi,
                'LAYANAN_URUTAN' => $this->updateUrutan,
                'LAYANAN_OFFICER' => Auth::user()->id,
            ];

            // Proses ngarobih data
            LaboratoriumLayanan::where('LAYANAN_ID', $this->updateId)->update($data);

            // mulihkeun kondisi form
            $this->reset();

            // Masihan bewara yen data tos dirobih
            $this->dispatch('success', 'Data layanan berhasil diperbaharui');

        } catch (\Throwable $th) {
            // Masihan bewara yen proses update data gagal
            $this->dispatch('warning', 'Data layanan gagal perbaharui');
            // $this->dispatch('warning', $th->getMessage());
        }
    }


    public function render()
    {
        return view('livewire.admin.akademik.laboratorium.layanan.update');
    }
}
