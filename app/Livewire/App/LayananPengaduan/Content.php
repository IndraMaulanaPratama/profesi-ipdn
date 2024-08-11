<?php

namespace App\Livewire\App\LayananPengaduan;

use App\Mail\testMail;
use App\Models\Pengaduan;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithFileUploads;

class Content extends Component
{
    use WithFileUploads;

    // Variabel form
    public $inputEmail, $inputNama, $inputPengaduan, $inputSearch;

    #[Rule('max:10240')]
    public $inputFile;


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
        if (null != $this->inputPengaduan):
            $timestamp = Carbon::now('Asia/Jakarta')->timestamp;
            $randomString = Str::random(3);
            $this->inputFile != null ? $fileName = $timestamp . '.' . $this->inputFile->getClientOriginalExtension() : $fileName = null;

            $idPengajuan = 'PPPKP-' . $randomString;

            $data = [
                'PENGADUAN_ID' => $idPengajuan,
                'PENGADUAN_STATUS' => 'Proses',
                'PENGADUAN_OFFICER' => '3',
                'PENGADUAN_EMAIL' => $this->inputEmail,
                'PENGADUAN_NAME' => $this->inputNama,
                'PENGADUAN_VALUE' => $this->inputPengaduan,
                'PENGADUAN_ATTACHMENT' => $fileName,
            ];


            try {
                // Miwarang livewire kanggo nyimpen data dumasar kana katangtosan nu tos di damel
                if (null != $this->inputFile):

                    if (!$this->inputFile->storeAs('file_pengaduan', $fileName, 'public')):
                        $this->dispatch('error', 'File pengaduan gagal diupload');

                    else:
                        $this->dispatch('success', 'File pengaduan berhasil di upload');
                    endif;

                endif;

                $this->inputFile?->storeAs('file_pengaduan', str_replace(" ", "", $fileName), 'public');

                // Proses ngalebetkeun data formulir ka database
                Pengaduan::create($data);

                // Ngintun email
                $dataEmail = [
                    'id_pengaduan' => $idPengajuan,
                    'email' => $this->inputEmail,
                    'nama' => $this->inputNama,
                    'pengaduan' => $this->inputPengaduan
                ];

                Mail::to('profesi.kepamongprajaan@ipdn.ac.id')->send(new testMail($dataEmail));

                // ngarahkeun aplikasi ka halaman resume pengajuan
                return redirect("layanan-pengaduan/resume/$idPengajuan");

            } catch (\Throwable $th) {
                dd($th->getMessage());
                // ngadamel bewara yen pengaduan gagal diproses ku sistem
                $this->dispatch('error', 'Terjadi kesalahan pada saat menyimpan pengaduan, silahkan hubungi pihak pengembang aplikasi');
            }

        else:
            // ngadamel bewara yen pengaduan teu tiasa dikosongkeun
            $this->dispatch('warning', 'Kolom pengaduan tidak boleh dikosongkang');
        endif;
    }

    public function render()
    {
        return view('livewire.app.layanan-pengaduan.content');
    }
}
