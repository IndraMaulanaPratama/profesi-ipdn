<?php

namespace App\Livewire\Admin\Akademik\Laboratorium\Pelatihan;

use App\Models\LaboratoriumPelatihan;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\On;
use Livewire\Attributes\Rule;
use Livewire\Component;

class UpdateSumber extends Component
{


    public $inputId;

    #[Rule(['required', 'string', 'max:255'])]
    public $inputJudul;

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
        $data = LaboratoriumPelatihan::find($id);

        $this->inputId = $data->PELATIHAN_ID;
        $this->inputJudul = $data->PELATIHAN_JUDUL;
        $this->inputUrutan = $data->PELATIHAN_URUTAN;
    }


    /**
     * Fungsi Kanggo ngarobih data tabel
     * 
     * @inputId, @inputJudul
     */
    public function updateData()
    {
        $this->validate();

        try {
            // Ngadamel inisialisasi data
            $data = [
                'PELATIHAN_JUDUL' => $this->inputJudul,
                'PELATIHAN_URUTAN' => $this->inputUrutan,
                'PELATIHAN_OFFICER' => Auth::user()->id,
            ];

            // Proses ngarobih data
            LaboratoriumPelatihan::where('PELATIHAN_ID', $this->inputId)->update($data);

            // mulihkeun kondisi form
            $this->reset();

            // Masihan bewara yen data tos dirobih
            $this->dispatch('success', 'Sumber Data berhasil diperbaharui');

        } catch (\Throwable $th) {
            // Masihan bewara yen proses update data gagal
            $this->dispatch('warning', 'Sumber data gagal perbaharui');
            // $this->dispatch('warning', $th->getMessage());
        }
    }


    public function render()
    {
        return view('livewire.admin.akademik.laboratorium.pelatihan.update-sumber');
    }
}
