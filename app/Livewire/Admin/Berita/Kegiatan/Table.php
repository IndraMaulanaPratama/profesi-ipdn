<?php

namespace App\Livewire\Admin\Berita\Kegiatan;

use App\Models\Kegiatan;
use Livewire\Component;

class Table extends Component
{
    protected $listeners = ['success' => '$refresh'];

    public $inputSearch;
    public $detailJudul, $detailDeskripsi;



    /**
     * Fungsi kanggo ngahapus data layanan
     */
    public function deleteData($id)
    {
        try {
            // Proses ngahapus data
            Kegiatan::where('KEGIATAN_ID', $id)->delete();

            // Ngadamel bewara yen data parantos dihapus
            $this->dispatch('success', 'Data berita kegiatan yang anda pilih, berhasil dihapuskan');
        } catch (\Throwable $th) {
            // Ngadamel bewara yen data gagal dihapus
            $this->dispatch('warning', 'Data berita kegiatan gagal dihapus');
            // $this->dispatch('warning', $th->getMessage());
        }
    }

    public function render()
    {
        $data = Kegiatan::
            when(
                $this->inputSearch,
                function ($query, $search) {
                    return $query->where('KEGIATAN_JUDUL', 'LIKE', '%' . $search . '%');
                }
            )
            ->orderBy('updated_at')
            ->paginate();

        return view('livewire.admin.berita.kegiatan.table', ['data' => $data]);
    }
}
