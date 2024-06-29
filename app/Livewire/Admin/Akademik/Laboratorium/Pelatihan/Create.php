<?php

namespace App\Livewire\Admin\Akademik\Laboratorium\Pelatihan;

use App\Models\LaboratoriumPelatihan;
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
            $urutan = LaboratoriumPelatihan::where('PELATIHAN_KATEGORI', 'pelatihan')->max('PELATIHAN_URUTAN');

            // Inisialisasi data tabel
            $data = [
                'PELATIHAN_ID' => uuid_create(4),
                'PELATIHAN_JUDUL' => $this->inputJudul,
                'PELATIHAN_DESKRIPSI' => $this->inputDeskripsi,
                'PELATIHAN_KATEGORI' => 'pelatihan',
                'PELATIHAN_OFFICER' => Auth::user()->id,
                'PELATIHAN_URUTAN' => $urutan + 1,
            ];

            // Proses ngalebetkeun data ka tabel
            LaboratoriumPelatihan::create($data);

            // Mulangkeun kondisi form sakumaha bahara-bahari
            $this->reset();

            // Ngadamel bewara yen data parantos ditambih
            $this->dispatch('success', 'Data pelatihan berhasil ditambahkan');

        } catch (\Throwable $th) {
            // Ngadamel bewara yen data gagal ditambih
            $this->dispatch('warning', 'Data pelatihan gagal ditambahkan');
            // $this->dispatch('warning', $th->getMessage());

        }
    }


    public function render()
    {
        return view('livewire.admin.akademik.laboratorium.pelatihan.create');
    }
}
