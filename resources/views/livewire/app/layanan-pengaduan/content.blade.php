{{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}

<div style="background-color: #ecf6ff;" wire:ignore>

    {{-- Content --}}
    <div style="background-color: #ecf6ff;" wire:ignore>

        {{-- PENCARIAN, FORMULIR PENGADUAN dan INFORMASI KONTAK --}}
        <div>

            {{-- PENCARIAN  PENGADUAN --}}
            <div class="row py-4 justify-content-center">
                <div class="col-8 p-4 shadow rounded" style="background-color:white;">
                    <form wire:submit='cariPengajuan' method="POST">

                        <div class="input-group input-group-lg mb-3">
                            <input type="text" wire:model.live='inputSearch' class="form-control"
                                placeholder="Kode Pengaduan/Informasi" aria-label="Kode Pengaduan/Informasi"
                                aria-describedby="button-addon2">

                            <button type="submit" class="btn btn-primary" type="button"
                                id="button-addon2">CARI</button>
                        </div>

                    </form>

                    <small>
                        Masukkan kode pengaduan/informasi yang telah diberikan untuk melihat progres
                        pengaduan/informasi
                    </small>
                </div>
            </div>
            {{-- END OF PENCARIAN PENGADUAN --}}


            {{-- FORMULIR DAN INFORMASI KONTAK --}}
            <div class="row py-5 justify-content-center">

                @if (session('success'))
                    <x-admin.components.alert.success text="{{ session('success') }}" />
                @endif

                @if (session('warning'))
                    <x-admin.components.alert.warning text="{{ session('warning') }}" />
                @endif

                @if (session('error'))
                    <x-admin.components.alert.error text="{{ session('error') }}" />
                @endif

                <div class="col-8 shadow-sm rounded-sm" style="background-color:white;">
                    <div class="row justify-content-between">

                        {{-- FORM PENGADUAN --}}
                        <div class="col-5 px-5 py-4">
                            <form wire:submit.prevent='buatPengajuan' method="POST" enctype="multipart/form-data">
                                {{-- Email --}}
                                <div class="py-2">
                                    <x-admin.components.form.input type='email' name='inputEmail'
                                        placeholder='Email Pengirim' />
                                </div>

                                {{-- Nama --}}
                                <div class="py-2">
                                    <x-admin.components.form.input name='inputNama' placeholder='Nama Pengirim' />
                                </div>

                                {{-- Pengaduan --}}
                                <div class="py-2">
                                    <x-admin.components.form.textarea name='inputPengaduan' tinggi='200'
                                        placeholder='Tuliskan Pengaduan' />
                                </div>

                                {{-- File --}}
                                <div class="py-2">
                                    <x-admin.components.form.file name='inputFile' placeholder="Bukti Pegaduan" />
                                    <small class="text-danger">file max 2mb</small>
                                </div>


                                <div class="py-2">
                                    <button type="submit" class="btn btn-outline-primary">
                                        Simpan
                                    </button>

                                </div>
                            </form>
                        </div>
                        {{-- END OF FORM PENGADUAN --}}


                        {{-- INFORMASI KONTAK --}}
                        <div class="col-6 border" style="padding: 0%">
                            <!-- Jumbotron -->
                            <div class="bg-image"
                                style="background-image: url({{ asset('assets/homepage/images/bg_pengaduan.png') }}); height:100%; background-position: center; background-repeat: no-repeat; background-size: cover;
                            ">

                                <div class="mask">
                                    <div class=" p-5" style=" height: 100%; color:whitesmoke">
                                        <h3><b>HUBUNGI KAMI</b></h3>
                                        <br />

                                        <table width="100%" style="line-height: 2.3; font-size:13px;">

                                            <tr>
                                                <td colspan="3">
                                                    Bagian Kemahasiswaan
                                                </td>
                                            </tr>

                                            {{-- Phone 1 --}}
                                            <tr>
                                                <td style="width: 30px">
                                                    <i class="bi bi-telephone"></i>
                                                </td>

                                                <td class="w-auto">
                                                    0858 2018 7794
                                                </td>

                                            </tr>

                                            {{-- Phone 2 --}}
                                            <tr>
                                                <td style="width: 30px">
                                                    &nbsp;
                                                </td>

                                                <td class="w-auto">
                                                    0812 1093 7771
                                                </td>

                                            </tr>

                                            {{-- Email --}}
                                            <tr>
                                                <td style="width: 30px">
                                                    <i class="bi bi-envelope"></i>
                                                </td>

                                                <td class="w-auto">
                                                    profesi.kepamongprajaan@ipdn.ac.id
                                                </td>

                                            </tr>

                                            <tr>
                                                <td colspan="3">
                                                    <hr />
                                                </td>
                                            </tr>


                                            <tr>
                                                <td colspan="3">
                                                    Social Media
                                                </td>
                                            </tr>

                                            {{-- Instagram --}}
                                            <tr>
                                                <td style="width: 30px">
                                                    <i class="bi bi-instagram"></i>
                                                </td>

                                                <td class="w-auto">
                                                    profesi_kepamongprajaan
                                                </td>

                                            </tr>


                                            {{-- Tiktok --}}
                                            <tr>
                                                <td style="width: 30px">
                                                    <i class="bi bi-tiktok"></i>
                                                </td>

                                                <td class="w-auto">
                                                    profesikepamongpr
                                                </td>

                                            </tr>

                                        </table>

                                    </div>
                                </div>
                            </div>

                        </div>
                        {{-- END OF INFORMASI KONTAK --}}

                    </div>
                </div>

            </div>
            {{-- END OF FORMULIR DAN INFORMASI KONTAK --}}

        </div>
        {{-- END OFPENCARIAN, FORMULIR PENGADUAN dan INFORMASI KONTAK --}}

    </div>
    {{-- END OF Content --}}

</div>
