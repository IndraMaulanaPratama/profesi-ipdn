<?php

namespace App\Livewire\Admin\Berita\Kegiatan;

use App\Models\Kegiatan;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithFileUploads;

class Detail extends Component
{

    use WithFileUploads;

    #[Rule(['required', 'string', 'max:255'])]
    public $inputJudul;

    #[Rule(['required', 'string'])]
    public $inputDeskripsi;

    #[Rule('max:10240')]
    public $inputFile;

    public $id;


    public function mount($id)
    {
        $this->id = $id;

        $data = Kegiatan::find($this->id);

        $this->inputFile = $data['KEGIATAN_THUMBNAIL'];
        $this->inputJudul = $data['KEGIATAN_JUDUL'];
        $this->inputDeskripsi = $data['KEGIATAN_ISI'];

    }



    // Fungsi kanggo nangtoskeun nami file
    public function fileName($file)
    {
        if ($file != $this->inputFile) {
            return Carbon::now()->timestamp . '-' . $this->inputFile->getClientOriginalName();
        } else {
            return $this->inputFile;
        }
    }




    /**
     * Fungsi kanggo mulangkeun kondisi form sakumaha bahara-bahari
     * 
     */
    public function resetForm()
    {
        $this->reset();
    }


    /**
     * Fungsi kanggo ngubah data
     * 
     * @inputJudul, @inputDeskripsi
     */
    public function updateData()
    {
        // $this->validate();

        try {
            $filename = $this->fileName($this->inputFile);

            // Inisialisasi data tabel
            $data = [
                'KEGIATAN_JUDUL' => $this->inputJudul,
                'KEGIATAN_ISI' => $this->inputDeskripsi,
                'KEGIATAN_OFFICER' => Auth::user()->id,
                'KEGIATAN_THUMBNAIL' => $filename,
            ];

            // is_null($this->inputFile) ?? unset($data['KEGIATAN_THUMBNAIL']);

            // *** Proses Upload File *** ///
            if ($this->inputFile != $filename):
                if (!$this->inputFile->storeAs('file_pengaduan', $filename, 'public')):
                    $this->dispatch('error', 'File pengaduan gagal diupload');

                else:
                    $this->dispatch('success', 'File pengaduan berhasil di upload');
                endif;

                $this->inputFile?->storeAs('thumbnail_berita', str_replace(" ", "", $filename), 'public');
            endif;
            // *** END OF Proses Upload File *** ///


            // Proses ngalebetkeun data ka tabel
            Kegiatan::where('KEGIATAN_ID', $this->id)->update($data);

            // Mulangkeun kondisi form sakumaha bahara-bahari
            // $this->reset();

            // Ngadamel bewara yen data parantos ditambih
            $this->dispatch('success', 'Data Berita Kegiatan berhasil diperbaharui');

            // ngarahkeun aplikasi ka halaman resume pengajuan
            return redirect('admin/berita/kegiatan');

        } catch (\Throwable $th) {
            // Ngadamel bewara yen data gagal ditambih
            // $this->dispatch('warning', 'Data Berita Kegiatan gagal diperbaharui');
            $this->dispatch('warning', $th->getMessage());

        }
    }


    public function render()
    {
        return view('livewire.admin.berita.kegiatan.detail');
    }
}
