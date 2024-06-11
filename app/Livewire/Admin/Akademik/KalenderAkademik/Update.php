<?php

namespace App\Livewire\Admin\Akademik\KalenderAkademik;

use App\Models\KalenderAkademik;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\On;
use Livewire\Attributes\Rule;
use Livewire\Component;

class Update extends Component
{

    public $id;

    /**
     * Ranahna kanggo marios data anu dilebetkeun ku semah
     */

    #[Rule('Integer', 'required', 'max:2')]
    public $inputUrutan;

    #[Rule(['String', 'required'])]
    public $inputTanggalAwal, $inputTanggalAkhir, $inputKegiatan;

    #[Rule(['integer', 'required', 'max:2'])]
    public $inputSemester;

    /** Tungtung tina wadah marios data form */



    /** Ngarobih isi tinu form */
    #[On('send_id')]
    public function updateForm($id)
    {
        // Milari data dumasar kana id anu ditampi ti tabel
        $data = KalenderAkademik::find($id);

        // Misahkeun tanggal
        $tanggal = explode("/", $data->KALENDER_TANGGAL);

        // Proses ngarobih form
        $this->id = $id;
        $this->inputUrutan = $data->KALENDER_URUTAN;
        $this->inputSemester = $data->KALENDER_SEMESTER;
        $this->inputTanggalAwal = $tanggal[0];
        $this->inputTanggalAkhir = $tanggal[1];
        $this->inputKegiatan = $data->KALENDER_KEGIATAN;
    }



    /** Fungsi kanggo mulihkeun form sapertos bahara bahari */
    public function resetForm()
    {
        $this->reset();
    }



    /** Fungsi kanggo ngarobih data */
    public function updateData()
    {
        $this->validate();

        try {
            // ngadamel inisialisasi data
            $data = [
                'KALENDER_TAHUN_AJARAN' => null,
                'KALENDER_TANGGAL' => $this->inputTanggalAwal . '/' . $this->inputTanggalAkhir,
                'KALENDER_SEMESTER' => $this->inputSemester,
                'KALENDER_KEGIATAN' => $this->inputKegiatan,
                'KALENDER_URUTAN' => $this->inputUrutan,
                'KALENDER_OFFICER' => Auth::user()->id,
            ];

            // proses ngarobih data
            KalenderAkademik::find($this->id)->update($data);

            // Mulihkeun form sapertos bahara bahari
            $this->reset();

            // Masihan bewara yen data parantos di robih
            $this->dispatch('success', 'Data kalender akademik berhasil diperbaharui');

        } catch (\Throwable $th) {
            // Masihan bewara yen data parantos di robih
            // $this->dispatch('error', 'Data kalender akademik gagal diperbaharui');
            $this->dispatch('error', $th->getMessage());
        }
    }




    public function render()
    {
        return view('livewire.admin.akademik.kalender-akademik.update');
    }
}
