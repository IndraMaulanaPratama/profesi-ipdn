<?php

namespace App\Livewire\Admin\Akademik\Kurikulum;

use App\Models\Kurikulum;
use Livewire\Attributes\On;
use Livewire\Attributes\Rule;
use Livewire\Component;

class Update extends Component
{


    /**
     * Ranahna variable input form
     * urutan, kode, matakuliah, sks, semester
     */

    public $inputUrutan, $inputId;

    #[Rule(['string', 'required', 'max:10'])]
    public $inputKode;

    #[Rule(['string', 'required', 'max:200'])]
    public $inputMatakuliah;

    #[Rule((['integer', 'required', 'max_digits:2']))]
    public $inputSks;

    #[Rule(['integer', 'required', 'max_digits:2'])]
    public $inputSemester;

    /** Tungtung tina ranah variable input form */



    /**
     * Fungsi kanggo ngarobih formulir dumasar kana data id
     */
    #[On('send_id')]
    public function formChange($id)
    {
        $data = Kurikulum::where('KURIKULUM_ID', $id)->first();
        $this->inputUrutan = $data->KURIKULUM_URUTAN;
        $this->inputKode = $data->KURIKULUM_KODE;
        $this->inputMatakuliah = $data->KURIKULUM_MATAKULIAH;
        $this->inputSks = $data->KURIKULUM_SKS;
        $this->inputSemester = $data->KURIKULUM_SEMESTER;
        $this->inputId = $data->KURIKULUM_ID;
    }



    /**
     * Fungsi kanggo ngarobih data
     */
    public function updateData()
    {
        // marios data inputan manawi aya nu teu acan sesuai sareng aturan
        $this->validate();

        try {

            // Ngadamel inisiasi data kanggo dilebetkeun ka tabel
            $data = [
                'KURIKULUM_URUTAN' => $this->inputUrutan,
                'KURIKULUM_KODE' => $this->inputKode,
                'KURIKULUM_MATAKULIAH' => $this->inputMatakuliah,
                'KURIKULUM_SKS' => $this->inputSks,
                'KURIKULUM_SEMESTER' => $this->inputSemester,
            ];

            // Proses ngalebetkeun data
            Kurikulum::where('KURIKULUM_ID', $this->inputId)->update($data);

            // Masihan bewara yen data parantos dirobih
            $this->dispatch('success', 'Data Kurikulum berhasil diperbaharui');

        } catch (\Throwable $th) {
            // Ngadamel bewara yen data gagal di robih
            $this->dispatch('error', 'Data Kurikulum gagal diperbaharui');
            // $this->dispatch('error', $th->getMessage());

        }
    }


    /** Fungsi kangggo mulihkeun formulir bah bahara bahari */
    public function resetForm()
    {
        $this->reset();
    }


    public function render()
    {
        return view('livewire.admin.akademik.kurikulum.update');
    }
}
