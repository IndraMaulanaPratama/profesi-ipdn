<?php

namespace App\Livewire\Admin\Akademik\Laboratorium\Layanan;

use App\Models\LaboratoriumLayanan;
use Livewire\Component;

class Table extends Component
{
    protected $listeners = ['success' => '$refresh'];

    public $inputSearch;
    public $inputJudul, $inputDeskripsi;


    /**
     * Fungsi ningal detail layanan
     */
    public function detailData($id)
    {
        try {
            // Milari data layanan dumasar kana id data
            $data = LaboratoriumLayanan::find($id);


            // Proses ngausian modal detail data 
            $this->inputJudul = $data->LAYANAN_JUDUL;
            $this->inputDeskripsi = $data->LAYANAN_DESKRIPSI;

        } catch (\Throwable $th) {
            // Ngadamel bewara yen data detail gagal dipilari
            $this->dispatch('warning', 'Gagal mendapatkan informasi layanan');
            // $this->dispatch('warning', $th->getMessage());
        }
    }


    /**
     * Fungsi kanggo ngahapus data layanan
     */
    public function deleteData($id)
    {
        try {
            // Proses ngahapus data
            LaboratoriumLayanan::where('LAYANAN_ID', $id)->delete();

            // Ngadamel bewara yen data parantos dihapus
            $this->dispatch('success', 'Data layanan yang anda pilih, berhasil dihapuskan');
        } catch (\Throwable $th) {
            // Ngadamel bewara yen data gagal dihapus
            $this->dispatch('warning', 'Data layanan gagal dihapus');
            // $this->dispatch('warning', $th->getMessage());
        }
    }


    /**
     * Fungsi kanggo ngintun id data ka form update
     * 
     * @id
     */
    public function updateData($id)
    {
        $this->dispatch('updateData', $id);
    }


    public function render()
    {
        $data = LaboratoriumLayanan::
            when(
                $this->inputSearch,
                function ($query, $search) {
                    return $query->where('LAYANAN_JUDUL', 'LIKE', '%' . $search . '%');
                }
            )
            ->orderBy('LAYANAN_URUTAN')
            ->paginate();

        return view('livewire.admin.akademik.laboratorium.layanan.table', [
            'data' => $data,
        ]);
    }
}
