<?php

namespace App\Livewire\Admin\Akademik\BiayaPendidikan;

use App\Models\BiayaPendidikan;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Ramsey\Uuid\Rfc4122\UuidV4;
use Ramsey\Uuid\Uuid;

class Create extends Component
{

    // Ranahna variable
    public $idUser;

    /**
     * Ranahna variable input form
     * input: nama, satuan, tarif
     */

    #[Rule(['required', 'string'])]
    public $inputNama;

    #[Rule(['required', 'string'])]
    public $inputSatuan;

    #[Rule(['required', 'int'])]
    public $inputTarif;

    /** Tungtung tina ranahna variable */

    

    public function createData()
    {

        // Ngajalankeun fungsi validasi form (Rules)
        $this->validate();

        try {
            // Inisialisasi data table
            $data = [
                'PENDIDIKAN_ID' => uuid_create(4),
                'PENDIDIKAN_NAMA' => $this->inputNama,
                'PENDIDIKAN_SATUAN' => $this->inputSatuan,
                'PENDIDIKAN_TARIF' => $this->inputTarif,
                'PENDIDIKAN_OFFICER' => Auth::user()->id,
            ];

            // Proses input data ka table biaya pendidikan dumasar kana inisialisasi variabel data
            BiayaPendidikan::create($data);

            // Ngabalikeun form ka posisi bahara bahari
            $this->resetForm();

            // Masihan bewara ka pengguna yen proses tambih data parantos rengse
            $this->dispatch('success', 'Biaya pendidikan baru berhasil ditambahkan');

        } catch (\Throwable $th) {
            // Masihan bewara yen aya eror nalika ngajalankeun proses
            // $this->dispatch('error', 'Biaya pendidikan baru gagal ditambahkan');
            $this->dispatch('error', $th->getMessage());
        }
    }



    public function resetForm()
    {
        $this->reset();
    }


    public function render()
    {
        return view('livewire.admin.akademik.biaya-pendidikan.create');
    }
}
