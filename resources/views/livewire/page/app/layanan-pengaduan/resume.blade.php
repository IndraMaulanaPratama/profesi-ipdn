{{-- Close your eyes. Count to one. That is how long forever feels. --}}

<div>

    {{-- Header --}}
    @livewire('App.LayananPengaduan.Header')

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
        <div class="row py-4 justify-content-center">
            <div class="col-8 p-4 shadow rounded" style="background-color:white;">

                {{-- Title dan Status --}}
                <div class="row justify-content-between mb-4">

                    {{-- Title --}}
                    <div class="col-11" style="text-align: center">
                        <p class="mb-1" style="color: #CC2323; font-size: 50px; font-weight: bold;">
                            {{ $data['id'] }}
                        </p>

                        <p>
                            Mohon menyimpan kode tersebut untuk melihat kelanjutan pengaduan.
                        </p>
                    </div>

                    {{-- Status --}}
                    <div class="col-1 ">
                        <p class="rounded-pill px-2"
                            style="background-color: #F6E2B0; color: #E3A100; font-size: 14px; text-align: center;">
                            <small>Proses</small>
                        </p>
                    </div>

                </div>
                {{-- Title dan Status --}}

                {{-- Data Pembuat Pengajuan --}}
                <div class="row mb-4">
                    <div class="col-11">
                        <table>
                            <tr>
                                <td scope='col' width='60px'>Nama</td>
                                <td scope='col' width='10px'>:</td>
                                <td>{{ $data['nama'] }}</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>:</td>
                                <td>{{ $data['email'] }}</td>
                            </tr>

                            <tr>
                                <td colspan="3">
                                    <p class="my-4" style="text-align: justify;">
                                        {{ $data['pengaduan'] }}
                                    </p>

                                </td>
                            </tr>


                            <tr>
                                <td>Bukti</td>
                                <td>:</td>
                                <td>
                                    <a href="{{ asset('file_pengaduan') . '/' . $data['lampiran'] }}" target="_blank" style="text-decoration: underline">
                                        Lihat lampiran
                                    </a>
                                </td>
                            </tr>

                        </table>
                    </div>
                </div>
                {{-- END OF Data Pembuat Pengajuan --}}

            </div>
        </div>
    </div>
</div>
