<?php

namespace App\Livewire\App\LayananPengaduan;

use App\Models\Pengaduan;
use Illuminate\Support\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;

class Content extends Component
{
    use WithFileUploads;

    // Variabel form
    public $inputEmail, $inputNama, $inputPengaduan, $inputFile, $inputSearch;

    // Variable option view
    public $form = true, $search = false, $resume = false;


    public function resetForm()
    {
        $this->reset();
    }


    public function toggleContent($name)
    {
        if ('form' == $name):
            $this->form = !$this->form;
        elseif ('search' == $name):
            $this->search = !$this->search;
        elseif ('resume' == $name):
            $this->resume = !$this->resume;
        endif;
    }


    public function cariPengajuan()
    {
        if ($this->inputSearch == null):
            // ngadamel bewara yen pengaduan teu tiasa dikosongkeun
            $this->dispatch('warning', 'Kolom pencarian tidak boleh dikosongkang');
        endif;

        try {
            $pengaduan = Pengaduan::where('PENGADUAN_ID', $this->inputSearch)->first();

            // Ngarahkeun aplikasi ka halaman hasil pencarian pengaduan
            if (null != $pengaduan):
                return redirect('layanan-pengaduan/' . $this->inputSearch);
            else:
                // ngadamel bewara yen data teu kapendak ku sistem
                $this->dispatch('warning', 'data yang anda cari tidak kami temukan');

            endif;


        } catch (\Throwable $th) {
            // ngadamel bewara yen sistem error
            $this->dispatch('error', 'Terjadi kesalahan sistem saat melakukan pencarian data pengajuan');
        }
    }


    public function buatPengajuan()
    {
        try {

            if (null != $this->inputPengaduan):
                $timestamp = Carbon::now('Asia/Jakarta')->timestamp;
                $this->inputFile != null ? $fileName = $timestamp . '.' . $this->inputFile->getClientOriginalExtension() : $fileName = null;

                $idPengajuan = 'PPPKP-' . $timestamp;

                $data = [
                    'PENGADUAN_ID' => $idPengajuan,
                    'PENGADUAN_STATUS' => 'Proses',
                    'PENGADUAN_OFFICER' => '3',
                    'PENGADUAN_EMAIL' => $this->inputEmail,
                    'PENGADUAN_NAME' => $this->inputNama,
                    'PENGADUAN_VALUE' => $this->inputPengaduan,
                    'PENGADUAN_ATTACHMENT' => $fileName,
                ];


                // Miwarang livewire kanggo nyimpen data dumasar kana katangtosan nu tos di damel
                $this->inputFile != null ? $this->inputFile->storeAs('file_pengaduan', str_replace(" ", "", $fileName), 'public') : null;

                // Proses ngalebetkeun data formulir ka database
                Pengaduan::create($data);

                // ngadamel pengumuman pengaduan parantos rengse diproses
                $this->dispatch('success', 'Pengaduan anda sudah kami terima');

                //  ngarahkeun aplikasi ka halaman resume pengajuan
                return redirect('layanan-pengaduan/resume/' . $idPengajuan);

            else:
                // ngadamel bewara yen pengaduan teu tiasa dikosongkeun
                $this->dispatch('warning', 'Kolom pengaduan tidak boleh dikosongkang');
            endif;

        } catch (\Throwable $th) {
            dd($th->getMessage());
            // ngadamel bewara yen pengaduan gagal diproses ku sistem
            // $this->dispatch('error', 'Terjadi kesalahan pada saat menyimpan pengaduan, silahkan hubungi pihak pengembang aplikasi');
        }
    }


    public function render()
    {
        return view('livewire.app.layanan-pengaduan.content');
    }
}
