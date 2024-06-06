<?php

namespace App\Livewire\Admin\Akademik\BiayaPendidikan;

use App\Models\BiayaPendidikan;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\On;
use Livewire\Attributes\Rule;
use Livewire\Component;

class Update extends Component
{

    public $inputId;

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


    public function mount()
    {
        $this->idUser = Auth::user()->id;
    }



    public function resetForm()
    {
        $this->reset();
    }


    #[On('send_id')]
    public function Updateform($id)
    {
        $data = BiayaPendidikan::where('PENDIDIKAN_ID', $id)->first();

        $this->inputId = $data->PENDIDIKAN_ID;
        $this->inputNama = $data->PENDIDIKAN_NAMA;
        $this->inputSatuan = $data->PENDIDIKAN_SATUAN;
        $this->inputTarif = $data->PENDIDIKAN_TARIF;
    }

    public function updateData()
    {
        try {
            // Inisialisasi data kanggo ngarobih data tabel biaya pendidikan
            $data = [
                'PENDIDIKAN_NAMA' => $this->inputNama,
                'PENDIDIKAN_SATUAN' => $this->inputSatuan,
                'PENDIDIKAN_TARIF' => $this->inputTarif,
                'PENDIDIKAN_OFFICER' => Auth::user()->id,
            ];

            // Proses ngarobih data tabel
            BiayaPendidikan::where('PENDIDIKAN_ID', $this->inputId)->update($data);

            // Ngintun bewara kanggo komponen sanes yen data parantos dirobih
            $this->dispatch('success', 'Data biaya pendidikan berhasil diperbaharui');

        } catch (\Throwable $th) {
            // Ngintun bewara kanggo komponen sanes yen data gagal dirobih
            $this->dispatch('success', 'Data biaya pendidikan gagal diperbaharui');
        }
    }


    public function render()
    {
        return view('livewire.admin.akademik.biaya-pendidikan.update');
    }
}
