<?php

namespace App\Livewire\Admin\Akademik\Kurikulum;

use App\Models\Kurikulum;
use Livewire\Component;
use Livewire\WithPagination;

class Table extends Component
{
    use WithPagination;

    protected $listeners = ['success' => '$refresh'];
    public $searchKode, $searchSemester;


    /**
     * Fungsi kanggo ngahapus data kurikulum
     * 
     */
    public function deleteData($id)
    {
        try {

            // Proses ngahapus data dumasar kana id nu ditangtoskeun
            Kurikulum::where('KURIKULUM_ID', $id)->delete();

            // Masihan bewara ka semah yen data parantos dihapus
            $this->dispatch('success', 'Data Kurikulum berhasil dihapuskan');

        } catch (\Throwable $th) {
            // Masihan bewara ka semah yen data gagal dihapus
            $this->dispatch('error', 'Data Kurikulum gagal dihapuskan');
        }
    }


    /**
     * Fungsi kanggo ngintun id ka form update
     */
    public function sendId($id)
    {
        $this->dispatch('send_id', $id);
    }



    public function render()
    {
        $data = Kurikulum::
            // Ngadamel filter dumasar kana semester
            when(
                $this->searchSemester,
                function ($query, $semester) {
                    return $query->where('KURIKULUM_SEMESTER', $semester);
                }
            )
            
            // Ngadamel filter data dumasar kana kode atanapi matakuliah
            ->when(
                $this->searchKode,
                function ($query, $kode) {
                    return $query->where('KURIKULUM_KODE', 'like', $kode . '%')->orWhere('KURIKULUM_MATAKULIAH', 'like', '%' . $kode . '%');
                }
            )
            ->orderBy('KURIKULUM_SEMESTER', 'ASC')->orderBy('KURIKULUM_URUTAN', 'ASC')->paginate();

        return view('livewire.admin.akademik.kurikulum.table', ['data' => $data]);
    }
}
