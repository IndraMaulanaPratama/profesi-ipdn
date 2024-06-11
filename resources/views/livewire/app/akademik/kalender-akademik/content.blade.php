{{-- Close your eyes. Count to one. That is how long forever feels. --}}


<div class="container">
    {{-- Header Biaya Pendidikan --}}
    <div class="text-center my-5" style="font-weight: bold; font-size: 24px">
        Tahun Akademik {{ $tahun_ajaran[0]['tahun'] }} / {{ $tahun_ajaran[1]['tahun'] }} <br />
        <center>
            <div class="rounded" style="border: 3px solid #eab940; height: 2px; width:100px; background-color: #eab940;">
        </center>
    </div>

    {{-- Table --}}
    <table class="table table-bordered text-center my-5" style="font-size: 20px">
        <thead class="table-primary">
            <th>TAHUN</th>
            <th>TANGGAL / BULAN</th>
            <th>SEMESTER</th>
            <th width="45%">KEGIATAN</th>
        </thead>

        <tbody>

            @foreach ($data as $item)
                @php
                    $pemisah = explode('/', $item->KALENDER_TANGGAL);
                    $tanggal1 = Carbon\Carbon::parse($pemisah[0])->translatedFormat('d F');
                    $tanggal2 = Carbon\Carbon::parse($pemisah[1])->translatedFormat('d F');
                @endphp

                <tr>
                    <td rowspan=""> {{ $item->KALENDER_TAHUN_AJARAN }} </td>
                    <td> {{ $tanggal1 }} - {{ $tanggal2 }} </td>
                    <td rowspan=""> {{ $item->KALENDER_SEMESTER }} </td>
                    <td> {{ $item->KALENDER_KEGIATAN }} </td>
                </tr>
            @endforeach

        </tbody>
    </table>

</div>
