<?php

namespace App\Livewire\Admin\Akademik\Kurikulum;

use App\Models\Kurikulum;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Rule;
use Livewire\Component;

class Create extends Component
{

    public $idUSer;

    /**
     * Ranahna variable input form
     * urutan, kode, matakuliah, sks, semester
     */

    public $inputUrutan;

    #[Rule(['string', 'required', 'max:10'])]
    public $inputKode;

    #[Rule(['string', 'required', 'max:200'])]
    public $inputMatakuliah;

    #[Rule((['required', 'integer', 'max_digits:2']))]
    public $inputSks;

    #[Rule(['integer', 'required', 'max_digits:2'])]
    public $inputSemester;

    /** Tungtung tina ranah variable input form */



    public function createData()
    {

        $this->validate();

        try {

            // Nyandak urutan anu pang ageungna
            $jumlah = Kurikulum::where('KURIKULUM_SEMESTER', $this->inputSemester)->max('KURIKULUM_URUTAN');

            // ngadamel inisialisasi data kanggo nambih data kurikulum
            $data = [
                'KURIKULUM_ID' => uuid_create(4),
                'KURIKULUM_KODE' => $this->inputKode,
                'KURIKULUM_URUTAN' => $jumlah + 1,
                'KURIKULUM_MATAKULIAH' => $this->inputMatakuliah,
                'KURIKULUM_SKS' => $this->inputSks,
                'KURIKULUM_SEMESTER' => $this->inputSemester,
                'KURIKULUM_OFFICER' => Auth::user()->id,
            ];

            // Proses nambihan data enggal ka tabel kurikulum
            Kurikulum::create($data);

            // Mulihkeun deui kondisi formulir sapertos bahara bahari
            $this->resetForm();

            // Masihan bewara yen data kurikulum parantos ditambih
            $this->dispatch('success', 'Data kurikulum baru berhasil ditambahkan');

        } catch (\Throwable $th) {
            // Masihan bewara yen data kurikulum gagal ditambih
            $this->dispatch('warning', 'Data kurikulum baru gagal ditambahkan');
            // dd($th->getMessage());
        }
    }



    public function resetForm()
    {
        $this->reset();
    }



    public function render()
    {
        return view('livewire.admin.akademik.kurikulum.create');
    }
}
