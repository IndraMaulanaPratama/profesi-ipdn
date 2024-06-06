<?php

namespace App\Livewire\Admin\Akademik\BiayaPendidikan;

use App\Models\BiayaPendidikan;
use Livewire\Component;
use Livewire\WithPagination;

class Table extends Component
{
    use WithPagination;

    public $inputSearch;
    protected $listeners = ['success' => '$refresh'];



    // Fungsi kanggo masihkeun data anu tos dipilih tinu tabel ka component nu sanes
    public function sendId($id)
    {
        $this->dispatch('send_id', $id);
    }



    // Fungsi kanggo ngahapus data dumasar kana data nu tos dipilih
    public function deleteData($id)
    {
        try {
            // Proses ngahapus data tabel
            BiayaPendidikan::where('PENDIDIKAN_ID', $id)->delete();

            // Masihan bewara kanggo komponen sanes yen data parantos dihapus
            $this->dispatch('success', 'Data biaya pendidikan berhasil dihapus');

        } catch (\Throwable $th) {
            // Masihan bewara kanggo komponen sanes yen data gagal dihapus
            $this->dispatch('error', 'Data biaya pendidikan gagal dihapus');
        }
    }



    public function render()
    {
        $data = BiayaPendidikan::
            when(
                $this->inputSearch,
                function ($query, $search) {
                    return $query->where('PENDIDIKAN_NAMA', 'LIKE', '%' . $search . '%');
                }
            )
            ->oldest()->paginate();

        return view('livewire.admin.akademik.biaya-pendidikan.table', ['data' => $data]);
    }
}
