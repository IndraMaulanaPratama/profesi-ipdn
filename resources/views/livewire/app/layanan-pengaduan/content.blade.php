{{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}

<div style="background-color: #ecf6ff;" wire:ignore>

    {{-- Content --}}
    <div style="background-color: #ecf6ff;" wire:ignore>

        {{-- PENCARIAN, FORMULIR PENGADUAN dan INFORMASI KONTAK --}}
        @if ($form)
            <div {{ $form }}>

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
                                <form wire:submit='buatPengajuan' method="POST" enctype="multipart/form-data">
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

                                        <button type="button" wire:click='resetForm' class="btn btn-outline-secondary"
                                            data-bs-dismiss="modal">
                                            Batalkan
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
        @endif
        {{-- END OFPENCARIAN, FORMULIR PENGADUAN dan INFORMASI KONTAK --}}


        {{-- RESUME PENGADUAN/FEEDBACK SUCCESS INSERT PENGADUAN --}}
        @if ($resume)
            <div class="row py-4 justify-content-center" {{ $resume }}>
                <div class="col-8 p-4 shadow rounded" style="background-color:white;">

                    {{-- Title dan Status --}}
                    <div class="row justify-content-between mb-4">

                        {{-- Title --}}
                        <div class="col-11" style="text-align: center">
                            <p class="mb-1" style="color: #CC2323; font-size: 50px; font-weight: bold;">
                                PPPKP-QST1
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
                                    <td>Rama Wirahma</td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>:</td>
                                    <td>rama-wirahma@ipdn.ac.id</td>
                                </tr>

                                <tr>
                                    <td colspan="3">
                                        <p class="my-4" style="text-indent: 1cm; text-align: justify;">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem
                                            Ipsum has been
                                            the industry's standard dummy text ever since the 1500s, when an unknown
                                            printer
                                            took a galley
                                            of type and scrambled it to make a type specimen book. It has survived not
                                            only
                                            five centuries,
                                            but also the leap into electronic typesetting, remaining essentially
                                            unchanged.
                                        </p>

                                    </td>
                                </tr>

                                <tr>
                                    <td>Bukti</td>
                                    <td>:</td>
                                    <td>Download</td>
                                </tr>

                            </table>
                        </div>
                    </div>
                    {{-- END OF Data Pembuat Pengajuan --}}

                </div>
            </div>
        @endif
        {{-- RESUME PENGADUAN/FEEDBACK SUCCESS INSERT PENGADUAN --}}

    </div>
    {{-- END OF Content --}}

</div>
