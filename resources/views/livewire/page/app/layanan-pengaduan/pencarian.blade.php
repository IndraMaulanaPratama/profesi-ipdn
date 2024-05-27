{{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}

<div>

    {{-- Header --}}
    @livewire('App.LayananPengaduan.Header', [], key('header'))

    <div class="m-4">

        @if (session('success'))
            <x-admin.components.alert.success text="{{ session('success') }}" />
        @endif

        @if (session('warning'))
            <x-admin.components.alert.warning text="{{ session('warning') }}" />
        @endif

        @if (session('error'))
            <x-admin.components.alert.error text="{{ session('error') }}" />
        @endif

    </div>

    {{-- Content --}}
    <div style="background-color: #ecf6ff;" wire:ignore>

        {{-- DATA PENGADUAN dan TANGGAPAN --}}
        <div style="background-color: #ecf6ff;" wire:ignore>

            {{-- Data Pengaduan --}}
            <div class="row py-4 justify-content-center">
                <div class="col-8 p-4 shadow rounded" style="background-color:white;">

                    {{-- Title dan Status --}}
                    <div class="row justify-content-between mb-3">
                        {{-- Title --}}
                        <div class="col-3">
                            <h5>Pengaduan/Informasi</h5>
                        </div>

                        {{-- Status --}}
                        <div class="col-auto">

                            @php
                                if ('Proses' == $data['status']):
                                    $textColor = '#E3A100';
                                    $latar = '#F6E2B0';
                                    $value = 'Dalam Proses';
                                else:
                                    $textColor = '#5B5B5B';
                                    $latar = '#D9D9D9';
                                    $value = 'Selesai';
                                endif;
                            @endphp

                            <p class="rounded-pill px-2"
                                style="background-color: {{ $latar }}; color: {{ $textColor }}; font-size:14px; text-align:center;">
                                <small> {{ $value }}</small>
                            </p>

                        </div>
                    </div>
                    {{-- END OF Title dan Status --}}

                    {{-- Informasi Pembuat Pengaduan --}}
                    <div class="row mb-4">
                        <div class="col-12">
                            <table>
                                <tr>
                                    <td scope='col' width=7%>Kode</td>
                                    <td scope='col' width=1%>:</td>
                                    <td>{{ $data['id'] }}</td>
                                </tr>
                                <tr>
                                    <td>Nama</td>
                                    <td>:</td>
                                    <td>{{ $data['nama'] }}</td>
                                </tr>
                                <tr>
                                    <td>E-mail</td>
                                    <td>:</td>
                                    <td>{{ $data['email'] }}</td>
                                </tr>

                                <tr>
                                    <td colspan="3">
                                        &nbsp;
                                        <p style="text-align: justify; text-indent: 20px;">
                                            {{ $data['pengaduan'] }}
                                        </p>

                                    </td>
                                </tr>

                                <tr hidden>
                                    <td>Bukti</td>
                                    <td>:</td>
                                    <td>
                                        <a href="{{ env('APP_URL') . '/file_pengaduan/' . $data['lampiran'] }}"
                                            target="_blank" class="link" style="text-decoration: underline">
                                            {{ $data['lampiran'] }}
                                        </a>
                                    </td>
                                </tr>

                            </table>
                        </div>
                    </div>
                    {{-- END OF Informasi Pembuat Pengaduan --}}

                    {{-- Isi Pengaduan --}}

                </div>
            </div>


            {{-- Tanggapan --}}
            @if (null != $data['solusi'])
                <div class="row py-4 justify-content-center">
                    <div class="col-8 p-4 shadow rounded" style="background-color: #FFFAEC;">

                        {{-- Title --}}
                        <div class="row justify-content-between mb-3">
                            <div class="col-3">
                                <h5>Tanggapan</h5>
                            </div>
                        </div>
                        {{-- END OF Title --}}

                        {{-- Isi Pengaduan --}}
                        <div class="row">
                            <div class="col-10">
                                <p style="text-align: justify; text-indent: 20px;">
                                    {{ $data['solusi'] }}
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            @endif

        </div>
        {{-- END OF DATA PENGADUAN dan TANGGAPAN --}}

    </div>
</div>
{{-- END OF Content --}}
