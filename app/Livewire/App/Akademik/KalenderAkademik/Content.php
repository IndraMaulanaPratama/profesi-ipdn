<?php

namespace App\Livewire\App\Akademik\KalenderAkademik;

use Livewire\Component;

class Content extends Component
{
    public function render()
    {
        $tahunAjaran = \App\Models\KalenderAkademik::groupBy('KALENDER_TAHUN_AJARAN')->get('KALENDER_TAHUN_AJARAN as tahun');

        for ($i = 0; $i < count($tahunAjaran); $i++) {
            $jumlahKegiatanTahunan[$i] = \App\Models\KalenderAkademik::where('KALENDER_TAHUN_AJARAN', $tahunAjaran[$i]['tahun'])->count('KALENDER_ID');
            $jumlahKegiatanSemester[$i] = \App\Models\KalenderAkademik::where('KALENDER_SEMESTER', $i + 1)->count('KALENDER_ID');
        }

        $data = \App\Models\KalenderAkademik::orderBy('KALENDER_URUTAN')->get();

        return view('livewire.app.akademik.kalender-akademik.content', [
            'data' => $data,
            'jumlah_kegiatan_tahunan' => $jumlahKegiatanTahunan,
            'jumlah_kegiatan_semester' => $jumlahKegiatanSemester,
            'tahun_ajaran' => $tahunAjaran,
        ]);
    }
}
