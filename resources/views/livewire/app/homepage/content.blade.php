{{-- The best athlete wants his opponent at his best. --}}

<div class="container py-5">
    {{-- Carousel --}}
    <div class="row pt-4">

        <div class="col-12 py-2">

            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>

                <div class="carousel-inner">

                    <div class="carousel-item active" data-bs-interval="3000">
                        {{-- <img src="{{ asset('assets/homepage/images/bg-1.jpeg') }}" height="550" class="d-block w-100"
                            alt="..."> --}}

                        <img src="{{ asset('assets/homepage/images/PENERIMAAN MAHASISWA BARU 1.png') }}"
                            width="100%" />
                    </div>

                    <div class="carousel-item active">
                        {{-- <img src="{{ asset('assets/homepage/images/bg-1.jpeg') }}" height="550" class="d-block w-100"
                            alt="..."> --}}

                        <img src="{{ asset('assets/homepage/images/PENERIMAAN MAHASISWA BARU 1.png') }}"
                            width="100%" />

                    </div>

                    <div class="carousel-item active">
                        {{-- <img src="{{ asset('assets/homepage/images/bg-1.jpeg') }}" height="550" class="d-block w-100"
                            alt="..."> --}}

                        <img src="{{ asset('assets/homepage/images/PENERIMAAN MAHASISWA BARU 1.png') }}"
                            width="100%" />

                    </div>

                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

            {{-- <img src="{{ asset('assets/homepage/images/PENERIMAAN MAHASISWA BARU 1.png') }}" width="100%" /> --}}

        </div>

    </div>

    {{-- Kegiatan Kepamongprajaan --}}
    <div class="row py-4">

        <div class="col-12 py-4">

            {{-- Title --}}
            {{-- <div class="my-4">
                <center>
                    <h3><b>Kegiatan Profesi Kepamongprajaan</b></h3>
                </center>
            </div> --}}


            {{-- Card Berita --}}
            <div class="row justify-content-evenly g-4">

                {{-- Berita 1 --}}
                <div class="col-4">
                    <div class="card rounded-lg shadow">

                        <img src="{{ asset('assets/homepage/images/image 3.png') }}" height="270" class="card-img-top"
                            alt="..." />

                        {{-- Content --}}
                        <div class="card-body" style="height: 250px">

                            <h6 class="pb-4">
                                <b>
                                    KEGIATAN PENGANUGERAHAN TANDA KARTIKA PAMONG PRAJA
                                </b>
                            </h6>

                            <p class="" style="text-align: justify; color: #5B5B5B; font-size: 12px">
                                Jatingagor, 27/10/2023 - Dalam rangka penganugerahan Tanda Kartika Pamong Praja dan
                                Alumni Kehormatan Kepada Pejabat Gubernur Papua Barat Daya Dr. Drs. Mohammad Musa’ad,
                                M.Si dan Bupati Malang Drs. H. Sanusi, M.M. sebagai bentuk apresiasi yang tinggi atas
                                kontribusinya dalam mendayagunakan alumni Institut Pemerintahan Dalam Negeri di Provinsi
                                Papua Barat Daya dan Kabupaten Malang.
                            </p>

                            <p style="color: #063A69; text-decoration: underline; font-size: 12px;">
                                <a href="#">Baca Selengkapnya</a>
                            </p>
                        </div>

                    </div>
                </div>

                {{-- Berita 2 --}}
                <div class="col-4">
                    <div class="card rounded-lg shadow">
                        <img src="{{ asset('assets/homepage/images/image 5.png') }}" height="270" class="card-img-top"
                            alt="..." />

                        {{-- Content --}}
                        <div class="card-body" style="height: 250px">

                            <h6 class="pb-4">
                                <b>
                                    Provinsi Papua Barat Daya Tingkatkan SDM Kepala Distrik Melalui Pendidikan Profesi
                                    Kepamongprajaan di IPDN -Kemendagri
                                </b>
                            </h6>

                            <p class="" style="text-align: justify; color: #5B5B5B; font-size: 12px">
                                Jakarta, 06/10/2023 - Rektor IPDN, Prof. Dr. Drs. H. Hadi Prabowo., M.M resmi membuka
                                kegiatan matrikulasi dan perkuliahan program pendidikan profesi kepamongprajaan angkatan
                                XII kelas bratha tahun akademik 2023/2024.
                            </p>

                            <p style="color: #063A69; text-decoration: underline; font-size: 12px;">
                                <a href="#">Baca Selengkapnya</a>
                            </p>

                        </div>
                    </div>

                </div>

                {{-- Berita 3 --}}
                <div class="col-4">
                    <div class="card rounded-lg shadow">
                        <img src="{{ asset('assets/homepage/images/image 4.png') }}" height="270" class="card-img-top"
                            alt="..." />

                        {{-- Content --}}
                        <div class="card-body" style="height: 250px">

                            <h6 class="pb-4">
                                <b>
                                    PENGANUGERAHAN TANDA KEHORMATAN DAM LENCANA ALUMNI KEHORMATAN
                                </b>
                            </h6>

                            <p class="" style="text-align: justify; color: #5B5B5B; font-size: 12px">
                                Jatingagor, 04/03/2023 - Rektor IPDN, Prof. Dr. Drs. H. Hadi Prabowo., M.M memberikan
                                penganugerahan tanda kehormatan Kartika Pamong Praja Madya, Kartika Pamong Praja Muda
                                dan Lencana Alumni Kehormatan Pendidikan Tinggi Kepamongprajaan kepada Direktur Program
                                Pendidikan Profesi Kepamongprajaan Dr. Dra. Hj. Endang Try Setyasih.
                            </p>

                            <p style="color: #063A69; text-decoration: underline; font-size: 12px;">
                                <a href="#">Baca Selengkapnya</a>
                            </p>

                        </div>

                    </div>
                </div>


                {{-- See More --}}
                <div class="py-4">
                    <center>
                        <a href="" class="link">Lihat Selengkapnya ...</a>
                    </center>
                </div>

            </div>

        </div>

        {{-- Apa Kata Mahasiswa/Alumni --}}
        <div class="row py-1">

            <div class="col-12 py-4">

                {{-- Title --}}
                <center>
                    <h3><b>APA KATA MAHASISWA/ALUMNI</b></h3>
                </center>


                {{-- Testimoni Mahasiswa --}}
                <div class="row justify-content-evenly my-4">
                    <div class="col-12 p-4 rounded" style="background-color: #003b6d">

                        <div class="row align-items-start">

                            <div class="col-6">
                                <div class="row">
                                    <div class="col-2">
                                        <img src="{{ asset('assets/homepage/images/praja1.png') }}" alt="mahasiswa-1"
                                            class="rounded img-fluid" style="width: 75px; height: 75px" />
                                    </div>

                                    <div class="col-8">
                                        <h1><i class="bi bi-quote" style="color: orange"></i></h1>

                                        <p class="px-3" style="color: whitesmoke; text-align: justify;">
                                            Saya sangat senang dan bersyukur sudah bisa menjadi bagian dari Program
                                            Pendidikan Profesi Kepamongprajaan IPDN, karena selain suasana belajarnya
                                            yang nyaman, rekan-rekan yang kompak, juga sekretariat dan dosen-dosen
                                            pengajarnya sangat ramah dan berpengalaman, sehingga menjadi motivasi saya
                                            untuk berkarir dan menjadi public servant yang lebih baik lagi
                                        </p>

                                        <p class="px-3" style="color: orange; font-size: 13px">
                                            DITO SUDRAJAT <br />
                                            Ketua Kelas Astha <br />
                                            Angkatan XII
                                        </p>
                                    </div>
                                </div>
                            </div>


                            <div class="col-6">
                                <div class="row">
                                    <div class="col-2">
                                        <img src="{{ asset('assets/homepage/images/praja2.png') }}" alt="mahasiswa-2"
                                            class="rounded img-fluid" style="width: 75px; height: 75px" />
                                    </div>

                                    <div class="col-8">
                                        <h1><i class="bi bi-quote" style="color: orange"></i></h1>

                                        <p class="px-3" style="color: whitesmoke; text-align: justify;">
                                            <a href="https://youtu.be/jEhEuSm-ATU" target="_">

                                                <img src="{{ asset('assets/homepage/images/image14.png') }}"
                                                    width="100%" alt="mahasiswa-2" />
                                            </a>
                                        </p>

                                        <p class="px-3" style="color: orange; font-size: 13px">
                                            ANDRILLE MARTIN <br />
                                            Alumni - Angkatan XI <br />
                                            Kab. Lahat prov. Sumatera selatan
                                        </p>

                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

            </div>

        </div>

    </div>
