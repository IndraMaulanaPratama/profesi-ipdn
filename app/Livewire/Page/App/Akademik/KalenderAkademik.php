<?php

namespace App\Livewire\Page\App\Akademik;

use Carbon\Carbon;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Kalender Akademik - Profesi Kepamongprajaan IPDN')]

class KalenderAkademik extends Component
{
    public function render()
    {
        $tahunAjaran = \App\Models\KalenderAkademik::groupBy('KALENDER_TAHUN_AJARAN')->get('KALENDER_TAHUN_AJARAN as tahun');

        for ($i = 0; $i < count($tahunAjaran); $i++) {
            $jumlahKegiatanTahunan[$i] = \App\Models\KalenderAkademik::where('KALENDER_TAHUN_AJARAN', $tahunAjaran[$i]['tahun'])->count('KALENDER_ID');
            $jumlahKegiatanSemester[$i] = \App\Models\KalenderAkademik::where('KALENDER_SEMESTER', $i + 1)->count('KALENDER_ID');
        }

        $data = \App\Models\KalenderAkademik::orderBy('KALENDER_URUTAN')->get();

        return view('livewire.page.app.akademik.kalender-akademik', [
            'data' => $data,
            'jumlah_kegiatan_tahunan' => $jumlahKegiatanTahunan,
            'jumlah_kegiatan_semester' => $jumlahKegiatanSemester,
            'tahun_ajaran' => $tahunAjaran,
        ]);
    }
}
