<?php

namespace App\Livewire\Admin\Akademik\KalenderAkademik;

use App\Models\KalenderAkademik;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Rule;
use Livewire\Component;

class Create extends Component
{
    /**
     * Ranahna kanggo marios data anu dilebetkeun ku semah
     */

    #[Rule(['String', 'required'])]
    public $inputTanggalAwal, $inputTanggalAkhir, $inputKegiatan;

    #[Rule(['integer', 'required', 'max:2'])]
    public $inputSemester;

    /** Tungtung tina wadah marios data form */


    /** Fungsi kanggo mulihkeun formulir sapertos bahara bahari */
    public function resetForm()
    {
        $this->reset();
    }


    /** Fungsi kanggo nambih data */
    public function createData()
    {
        $this->validate();

        try {
            // Nangtoskeun nomor urut data
            $nomor = KalenderAkademik::max('KALENDER_URUTAN');

            // ngadamel inisialisasi data kanggo dilebetkeun ka database
            $data = [
                'KALENDER_ID' => uuid_create(4),
                'KALENDER_TAHUN_AJARAN' => null,
                'KALENDER_TANGGAL' => $this->inputTanggalAwal . '/' . $this->inputTanggalAkhir,
                'KALENDER_SEMESTER' => $this->inputSemester,
                'KALENDER_KEGIATAN' => $this->inputKegiatan,
                'KALENDER_URUTAN' => $nomor + 1,
                'KALENDER_OFFICER' => Auth::user()->id,
            ];

            // Proses ngalebetkeun data ka database
            KalenderAkademik::create($data);

            // mersihkeun form tinu data nu parantos di lebetkeun
            $this->reset();

            // Ngadamel bewara yen data parantos lebet
            $this->dispatch('success', 'Data kalender akademik berhasil ditambahkan');
        } catch (\Throwable $th) {
            // Ngadamel bewara yen data gagal dilebetkeun
            $this->dispatch('error', 'Data kalender akademik gagal ditambahkan');
            // $this->dispatch('error', $th->getMessage());
        }
    }


    public function render()
    {
        return view('livewire.admin.akademik.kalender-akademik.create');
    }
}
