<?php

namespace App\Livewire\Admin\Akademik\Laboratorium\Layanan;

use App\Models\LaboratoriumLayanan;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\On;
use Livewire\Attributes\Rule;
use Livewire\Component;

class Update extends Component
{
    public $inputId;

    #[Rule(['required', 'string', 'max:255'])]
    public $inputJudul;

    #[Rule(['required', 'string'])]
    public $inputDeskripsi;

    #[Rule(['required', 'integer'])]
    public $inputUrutan;


    /**
     * Fungsi kanggo mulihkeun kondisi form
     */
    public function resetForm()
    {
        $this->reset();
    }


    /**
     * Fungsi kanggo ngarespon kintunan id ti tabel
     */
    #[On('updateData')]
    public function updateForm($id)
    {
        $data = LaboratoriumLayanan::find($id);

        $this->inputId = $data->LAYANAN_ID;
        $this->inputJudul = $data->LAYANAN_JUDUL;
        $this->inputDeskripsi = $data->LAYANAN_DESKRIPSI;
        $this->inputUrutan = $data->LAYANAN_URUTAN;
    }


    /**
     * Fungsi Kanggo ngarobih data tabel
     * 
     * @inputId, @inputJudul, @inputDeskripsi, @inputUrutan
     */
    public function updateData()
    {
        $this->validate();

        try {
            // Ngadamel inisialisasi data
            $data = [
                'LAYANAN_JUDUL' => $this->inputJudul,
                'LAYANAN_DESKRIPSI' => $this->inputDeskripsi,
                'LAYANAN_URUTAN' => $this->inputUrutan,
                'LAYANAN_OFFICER' => Auth::user()->id,
            ];

            // Proses ngarobih data
            LaboratoriumLayanan::where('LAYANAN_ID', $this->inputId)->update($data);

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
