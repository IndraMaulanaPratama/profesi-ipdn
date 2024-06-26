<?php

namespace App\Livewire\Admin\Akademik\Laboratorium\Layanan;

use App\Models\LaboratoriumLayanan;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Rule;
use Livewire\Component;

class Create extends Component
{
    #[Rule(['required', 'string', 'max:255'])]
    public $inputJudul;

    #[Rule(['required', 'string'])]
    public $inputDeskripsi;


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
            $urutan = LaboratoriumLayanan::max('LAYANAN_URUTAN');

            // Inisialisasi data tabel
            $data = [
                'LAYANAN_ID' => uuid_create(4),
                'LAYANAN_JUDUL' => $this->inputJudul,
                'LAYANAN_DESKRIPSI' => $this->inputDeskripsi,
                'LAYANAN_OFFICER' => Auth::user()->id,
                'LAYANAN_URUTAN' => $urutan + 1,
            ];

            // Proses ngalebetkeun data ka tabel
            LaboratoriumLayanan::create($data);

            // Mulangkeun kondisi form sakumaha bahara-bahari
            $this->reset();

            // Ngadamel bewara yen data parantos ditambih
            $this->dispatch('success', 'Data layanan berhasil ditambahkan');

        } catch (\Throwable $th) {
            // Ngadamel bewara yen data gagal ditambih
            $this->dispatch('warning', 'Data layanan gagal ditambahkan');
            // $this->dispatch('warning', $th->getMessage());

        }
    }


    public function render()
    {
        return view('livewire.admin.akademik.laboratorium.layanan.create');
    }
}
