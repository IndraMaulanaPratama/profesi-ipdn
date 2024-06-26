<?php

namespace App\Livewire\Admin\Akademik\Laboratorium\Pelatihan;

use App\Models\LaboratoriumPelatihan;
use Livewire\Component;

class Table extends Component
{
    protected $listeners = ['success' => '$refresh'];

    public $inputSearch, $inputSearchSumber;
    public $inputJudul, $inputDeskripsi, $inputTautan;



    /**
     * Fungsi ningal detail pelatihan
     */
    public function detailData($id)
    {
        try {
            // Milari data pelatihan dumasar kana id data
            $data = LaboratoriumPelatihan::find($id);


            // Proses ngausian modal detail data 
            $this->inputJudul = $data->PELATIHAN_JUDUL;
            $this->inputDeskripsi = $data->PELATIHAN_DESKRIPSI;
            $this->inputTautan = $data->PELATIHAN_TAUTAN;

        } catch (\Throwable $th) {
            // Ngadamel bewara yen data detail gagal dipilari
            $this->dispatch('warning', 'Gagal mendapatkan informasi pelatihan');
            // $this->dispatch('warning', $th->getMessage());
        }
    }


    /**
     * Fungsi kanggo ngahapus data pelatihan
     */
    public function deleteData($id)
    {
        try {
            // Proses ngahapus data
            LaboratoriumPelatihan::where('PELATIHAN_ID', $id)->delete();

            // Ngadamel bewara yen data parantos dihapus
            $this->dispatch('success', 'Data pelatihan yang anda pilih, berhasil dihapuskan');
        } catch (\Throwable $th) {
            // Ngadamel bewara yen data gagal dihapus
            $this->dispatch('warning', 'Data pelatihan gagal dihapus');
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

        // Ngadamel data tabel kanggo tab pelatihan
        $data = LaboratoriumPelatihan::
            when(
                $this->inputSearch,
                function ($query, $search) {
                    return $query->where('PELATIHAN_JUDUL', 'LIKE', '%' . $search . '%');
                }
            )
            ->where('PELATIHAN_KATEGORI', 'pelatihan')
            ->orderBy('PELATIHAN_URUTAN')
            ->paginate();


        // Ngadamel data tabel kanggo tab sumber data
        $sumberData = LaboratoriumPelatihan::
            when(
                $this->inputSearchSumber,
                function ($query, $search) {
                    return $query->where('PELATIHAN_JUDUL', 'LIKE', '%' . $search . '%');
                }
            )
            ->where('PELATIHAN_KATEGORI', 'sumber')
            ->orderBy('PELATIHAN_URUTAN')
            ->paginate();


        return view('livewire.admin.akademik.laboratorium.pelatihan.table', [
            'data' => $data,
            'sumberData' => $sumberData,
        ]);
    }
}
