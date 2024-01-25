{{-- Navbar --}}
<div>
    {{-- Kontak dan layanan pengaduan --}}
    <div class="d-inline-block"
        style="background-color: #e5e5e5; padding:0.5% 3.4%;  color: #0e416e; font-size: 12px; width:100%">
        <div class="row justify-content-between">
            <div class="col-5">
                Alumni &nbsp; | &nbsp;
                <i class="bi bi-envelope"></i>
                profesi.kepamongprajaan@ipdn.ac.id
                &nbsp; | &nbsp; <i class="bi bi-telephone-fill bi-sm">
                </i>
                0812 1093 7771
            </div>

            <div class="col-auto">
                <a href="{{ route('layanan-pengaduan') }}" class="link">Layanan Pengaduan</a>
            </div>

        </div>

    </div>

    {{-- Logo dan Menu --}}
    <nav class="navbar navbar-expand-md" style="">
        <div class="container-fluid" style="padding:1.3% 3.4%;">
            <a class="navbar-brand " href="{{env('APP_URL')}}" style="align-items: center">
                <img src="{{ asset('assets/homepage/images/logo.png') }}" class=" align-top" alt=""
                    style="width: 12%; padding-top:15px;">

                <div class="d-inline-block" style="color: #0e416e;line-height: 1.2; padding:4% 2%; font-size:70%;">
                    <b>PROGRAM PENDIDIKAN</b> <br />
                    <b>PROFESI KEPAMONGPRAJAAN</b> <br />
                    <small style="color: black; font-size: 80%; font-weight: 600">
                        INSTITUT PEMERINTAHAN DALAM NEGERI
                    </small>
                </div>
            </a>

            {{-- Icon Humburger --}}
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" style="font-weight: bold;" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="font-size: 18px; padding-right: 150px">

                    {{-- Beranda --}}
                    <li class="nav-item mx-2">
                        <a class="nav-link active" aria-current="page" href="{{ route('/') }}">BERANDA</a>
                    </li>

                    {{-- Profile --}}
                    <li class="nav-item dropdown mx-2">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            PROFILE
                        </a>
                        <ul class="dropdown-menu mx-2" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{ route('profile-deskripsi') }}">Apa itu Pendidikan
                                    Kepamongprajaan</a></li>
                            <li><a class="dropdown-item" href="{{ route('profile-sejarah') }}">Sejarah Lahirnya
                                    Pendidikan Profesi
                                    Kepamongprajaan</a></li>
                            <li><a class="dropdown-item" href="{{ route('profile-visimisi') }}">Visi dan Misi</a></li>

                            {{-- Sumber Daya Manusia --}}
                            <li class="">
                                <a class="dropdown-item" href="#">
                                    <div class="row justify-content-between">
                                        <div class="col-auto">Sumber Daya Manusia</div>
                                        <div class="col-auto">&rsaquo;</div>
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-submenu">
                                    <li>
                                        <a class="dropdown-item" href="{{ route('profile-sotk') }}">SOTK</a>
                                    </li>

                                    <li>
                                        <a class="dropdown-item" href="#">Dosen</a>
                                    </li>

                                    <li>
                                        <a class="dropdown-item" href="#">Tenaga Kependidikan</a>
                                    </li>

                                    <li>
                                        <a class="dropdown-item" href="#">Direktur PPPKp Dari Masa Ke Masa</a>
                                    </li>
                                </ul>
                            </li>

                            <li><a class="dropdown-item" href="#">Kerja Sama</a></li>

                            {{-- Fasilitas --}}
                            <li>
                                <a class="dropdown-item" href="#">
                                    <div class="row justify-content-between">
                                        <div class="col-auto">Fasilitas</div>
                                        <div class="col-auto">&rsaquo;</div>
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-submenu">
                                    <li>
                                        <a class="dropdown-item" href="#">Sarana dan Prasarana</a>
                                    </li>

                                    <li>
                                        <a class="dropdown-item" href="#">Fasilitas</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    {{-- Akademik --}}
                    <li class="nav-item dropdown mx-2">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            AKADEMIK
                        </a>

                        <ul class="dropdown-menu mx-2" aria-labelledby="navbarDropdown">
                            <li>
                                <a class="dropdown-item" href="#">
                                    Akreditasi
                                </a>
                            </li>

                            <li>
                                <a class="dropdown-item" href="#">
                                    Kalender Akademik
                                </a>
                            </li>

                            <li>
                                <a class="dropdown-item" href="#">
                                    Kurikulum
                                </a>
                            </li>

                            <li>
                                <a class="dropdown-item" href="#">
                                    Biaya Pendidikan
                                </a>
                            </li>

                            <li>
                                <a class="dropdown-item" href="#">
                                    Laboratorium
                                </a>
                            </li>

                            <li>
                                <a class="dropdown-item" href="#">
                                    Perpustakaan
                                </a>
                            </li>

                        </ul>
                    </li>


                    {{-- PENELITIAN DAN PENGABDIAN --}}
                    <li class="nav-item dropdown mx-2">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            PENELITIAN DAN PENGABDIAN
                        </a>

                        <ul class="dropdown-menu mx-2" aria-labelledby="navbarDropdown">
                            <li>
                                <a class="dropdown-item" href="#">
                                    Penelitian
                                </a>
                            </li>

                            <li>
                                <a class="dropdown-item" href="#">
                                    Jurnal
                                </a>
                            </li>

                            <li>
                                <a class="dropdown-item" href="#">
                                    Pengabdian Masyarakat
                                </a>
                            </li>

                        </ul>
                    </li>


                    {{-- KEMAHASISWAAN --}}
                    <li class="nav-item dropdown mx-2">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            KEMAHASISWAAN
                        </a>

                        <ul class="dropdown-menu mx-2" aria-labelledby="navbarDropdown">
                            <li>
                                <a class="dropdown-item" target="_"
                                    href="https://ipdn.siakadcloud.com/spmbfront/">
                                    Pendaftaran
                                </a>
                            </li>

                            <li>
                                <a class="dropdown-item" href="#">
                                    Brosur
                                </a>
                            </li>

                            <li>
                                <a class="dropdown-item" href="#">
                                    Kegiatan Kemahasiswaan
                                </a>
                            </li>

                            <li>
                                <a class="dropdown-item" href="#">
                                    Alumni
                                </a>
                            </li>

                        </ul>
                    </li>

                    {{-- BERITA --}}
                    <li class="nav-item dropdown mx-2">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            BERITA
                        </a>

                        <ul class="dropdown-menu mx-2" aria-labelledby="navbarDropdown">
                            <li>
                                <a class="dropdown-item" href="{{ route('berita-pengumuman') }}">
                                    Pengumuman
                                </a>
                            </li>

                            <li>
                                <a class="dropdown-item" href="#">
                                    Kegiatan PPPkp
                                </a>
                            </li>
                        </ul>
                    </li>

                    {{-- Default Link --}}
                    {{-- <li class="nav-item mx-2">
                        <a class="nav-link" href="#">Link</a>
                    </li> --}}


                    {{-- Default Disabled Menu --}}
                    {{-- <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1"
                            aria-disabled="true">Disabled</a>
                    </li> --}}
                </ul>
            </div>
        </div>
    </nav>
</div>
