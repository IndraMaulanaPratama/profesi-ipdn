<?php

namespace App\Livewire\Admin\Berita\Kegiatan;

use App\Models\Kegiatan;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithFileUploads;


class Create extends Component
{
    use WithFileUploads;

    #[Rule(['required', 'string', 'max:255'])]
    public $inputJudul;

    #[Rule(['required', 'string'])]
    public $inputDeskripsi;

    #[Rule(['required', 'image', 'max:10240'])]
    public $inputFile;






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
            $timestamp = Carbon::now('Asia/Jakarta')->timestamp;
            $filename = $timestamp . '.' . $this->inputFile->getClientOriginalExtension();

            // Inisialisasi data tabel
            $data = [
                'KEGIATAN_ID' => uuid_create(4),
                'KEGIATAN_JUDUL' => $this->inputJudul,
                'KEGIATAN_ISI' => $this->inputDeskripsi,
                'KEGIATAN_OFFICER' => Auth::user()->id,
                'KEGIATAN_THUMBNAIL' => $filename,
            ];

            // *** Proses Upload File *** ///
            if (!$this->inputFile->storeAs('file_pengaduan', $filename, 'public')):
                $this->dispatch('error', 'File pengaduan gagal diupload');

            else:
                $this->dispatch('success', 'File pengaduan berhasil di upload');
            endif;

            $this->inputFile?->storeAs('thumbnail_berita', str_replace(" ", "", $filename), 'public');
            // *** END OF Proses Upload File *** ///


            // Proses ngalebetkeun data ka tabel
            Kegiatan::create($data);

            // Mulangkeun kondisi form sakumaha bahara-bahari
            $this->reset();

            // Ngadamel bewara yen data parantos ditambih
            $this->dispatch('success', 'Data Berita Kegiatan berhasil ditambahkan');

            // ngarahkeun aplikasi ka halaman resume pengajuan
            return redirect('admin/berita/kegiatan');

        } catch (\Throwable $th) {
            // Ngadamel bewara yen data gagal ditambih
            $this->dispatch('warning', 'Data Berita Kegiatan gagal ditambahkan');
            // $this->dispatch('warning', $th->getMessage());

        }
    }


    public function render()
    {
        return view('livewire.admin.berita.kegiatan.create');
    }
}
