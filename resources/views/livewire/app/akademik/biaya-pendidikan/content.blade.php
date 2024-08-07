{{-- Be like water. --}}


<div class="container">
    {{-- Header Biaya Pendidikan --}}
    <div class="text-center my-5" style="font-weight: bold; font-size: 16px">
        Peraturan Pemerintah Republik Indonesia Nomor 10 Tahun 2023 <br />
        Tentang Jenis dan Tarif Jenis Penerimaan Negera Bukan Pajak
    </div>

    {{-- Table --}}
    <table class="table table-hover table-bordered border border-warning-subtle">
        <thead>
            <th>Biaya Pendidikan PPPKp</th>
            <th>Satuan</th>
            <th>Tarif (Rupiah)</th>
        </thead>

        @foreach ($data as $item)
            <tr>
                <td> {{ $item['PENDIDIKAN_NAMA'] }} </td>
                <td> {{ $item['PENDIDIKAN_SATUAN'] }} </td>
                <td> {{ number_format($item['PENDIDIKAN_TARIF'], 2, ',', '.') }} </td>
            </tr>
        @endforeach

        <tr class="table-danger">
            <td>Jumlah</td>
            <td>per mahasiswa</td>
            <td> Rp.{{ number_format($total, 2, ',', '.') }} </td>
        </tr>
    </table>

    {{-- Header  --}}
    <div style="padding:30px 0px; ">
        <h4 style="color: #063A69; font-weight: bold">Surat Keputusan dan Peraturan Pemerintah</h4>
        <div class="rounded" style="border: 3px solid #eab940; height: 5px; width:55px; background-color: #eab940 "></div>
    </div>

    {{-- Content Card --}}

    <div class="row g-4 mb-5" style="">

        {{-- Pengumuman 1 --}}
        <div class="col-3">
            <div class="card" style="width: 18rem;">
                {{-- Image Preview --}}
                <img src="{{ asset('assets/homepage/images/SK Menteri Keuangan RI Nomor 611-KMK.02-2014.png') }}"
                    class="card-img-top" alt="Image Card 1" height="150px" />


                {{-- Text Content --}}
                <div class="card-body" style="font-weight: bold">
                    <a href="https://drive.google.com/file/d/1TFqvi1Gz6Jy1fiDJAyhab3FZBnSF9sBL/view?usp=sharing"
                        target="_">
                        <p class="card-text">SK Menteri Keuangan RI Nomor 611/KMK.02/2014 </p>
                    </a>
                </div>
            </div>

        </div>

        {{-- Pengumuman 2 --}}
        <div class="col-3">
            <div class="card" style="width: 18rem;">
                {{-- Image Preview --}}
                <img src="{{ asset('assets/homepage/images/PP RI Nomor 10 Tahun 2023 Tentang Jenis dan Tarif Jenis Penerimaan Negera Bukan Pajak.png') }}"
                    class="card-img-top" alt="Image Card 1" height="150px" />


                {{-- Text Content --}}
                <div class="card-body" style="font-weight: bold">
                    <a href="https://drive.google.com/file/d/1c6U0oerwi_3G5wRYDFlRKlcgosp-NTVb/view?usp=sharing"
                        target="_">
                        <p class="card-text">PP RI Nomor 10 Tahun 2023 Tentang Jenis dan Tarif Jenis Penerimaan Negera
                            Bukan Pajak</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
