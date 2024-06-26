<?php

namespace App\Livewire\Admin\Akademik\Laboratorium\Pelatihan;

use App\Models\LaboratoriumPelatihan;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Rule;
use Livewire\Component;

class CreateSumber extends Component
{

    #[Rule(['required', 'string', 'max:255'])]
    public $inputJudul;


    /**
     * Fungsi kanggo mulangkeun kondisi form sakumaha bahara-bahari
     * 
     */
    public function resetForm()
    {
        $this->reset();
    }


    /**
     * Fungsi kanggo nambih data
     * 
     * @inputJudul, @inputDeskripsi
     */
    public function createData()
    {
        $this->validate();

        try {

            // Nangtoskeun urutan
            $urutan = LaboratoriumPelatihan::where('PELATIHAN_KATEGORI', 'sumber')->max('PELATIHAN_URUTAN');

            // Inisialisasi data tabel
            $data = [
                'PELATIHAN_ID' => uuid_create(4),
                'PELATIHAN_JUDUL' => $this->inputJudul,
                'PELATIHAN_KATEGORI' => 'sumber',
                'PELATIHAN_OFFICER' => Auth::user()->id,
                'PELATIHAN_URUTAN' => $urutan + 1,
            ];

            // Proses ngalebetkeun data ka tabel
            LaboratoriumPelatihan::create($data);

            // Mulangkeun kondisi form sakumaha bahara-bahari
            $this->reset();

            // Ngadamel bewara yen data parantos ditambih
            $this->dispatch('success', 'Sumber data berhasil ditambahkan');

        } catch (\Throwable $th) {
            // Ngadamel bewara yen data gagal ditambih
            $this->dispatch('warning', 'Sumber data gagal ditambahkan');
            // $this->dispatch('warning', $th->getMessage());

        }
    }


    public function render()
    {
        return view('livewire.admin.akademik.laboratorium.pelatihan.create-sumber');
    }
}
