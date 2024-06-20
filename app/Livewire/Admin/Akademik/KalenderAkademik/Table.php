<?php

namespace App\Livewire\Admin\Akademik\KalenderAkademik;

use App\Models\KalenderAkademik;
use Livewire\Component;
use Livewire\WithPagination;

class Table extends Component
{
    use WithPagination;

    public $sortSemester, $sortSearch;
    protected $listeners = ['success', '$refresh'];


    /** Fungsi kanggo ngahapus data */
    public function deleteData($id)
    {
        try {
            // Proses ngahapus data
            KalenderAkademik::find($id)->delete();

            // Masihan bewara yen data parantos dihapus
            $this->dispatch('success', 'Data kalender akademik berhasil dihapus');

        } catch (\Throwable $th) {
            // Masihan bewara yen data gagal dihapus
            $this->dispatch('error', 'Data kalender akademik gagal dihapus');
            // $this->dispatch('error', $th->getMessage());
        }
    }


    /** Fungsi kanggp mngintun id ka form update data */
    public function sendId($id)
    {
        // ngintun data id ka form update
        $this->dispatch('send_id', $id);
    }


    public function render()
    {
        $data = KalenderAkademik::
            when(
                $this->sortSemester,
                function ($query, $semester) {
                    return $query->where('KALENDER_SEMESTER', $semester);
                }
            )
            ->when(
                $this->sortSearch,
                function ($query, $search) {
                    return $query->where('KALENDER_KEGIATAN', 'like', '%' . $search . '%')->orWhere('KALENDER_TANGGAL', 'like', '%' . $search . '%');
                }
            )
            ->orderBy('KALENDER_URUTAN')
            ->paginate(10);

        return view('livewire.admin.akademik.kalender-akademik.table', ['data' => $data]);
    }
}
