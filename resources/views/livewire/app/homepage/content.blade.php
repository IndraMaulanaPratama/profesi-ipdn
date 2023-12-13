{{-- The best athlete wants his opponent at his best. --}}

<div class="container py-5">
    {{-- Carousel --}}
    <div class="row py-4">

        <div class="col-12 py-4">
            <div id="carouselExampleCaptions" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('assets/homepage/images/bg-1.jpeg') }}" height="550" class="d-block w-100"
                            alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>First slide label</h5>
                            <p>Some representative placeholder content for the first slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('assets/homepage/images/bg-2.jpeg') }}" height="550" class="d-block w-100"
                            alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Second slide label</h5>
                            <p>Some representative placeholder content for the second slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('assets/homepage/images/bg-3.jpeg') }}" height="550" class="d-block w-100"
                            alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Third slide label</h5>
                            <p>Some representative placeholder content for the third slide.</p>
                        </div>
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
        </div>

    </div>

    {{-- Kegiatan Kepamongprajaan --}}
    <div class="row py-4">

        <div class="col-12 py-4">

            {{-- Title --}}
            <div class="my-4">
                <center>
                    <h3><b>Kegiatan Profesi Kepamongprajaan</b></h3>
                </center>
            </div>


            {{-- Card Berita --}}
            <div class="row justify-content-evenly g-4">

                <div class="col-4">
                    <div class="card rounded-lg shadow">

                        <img src="{{ asset('assets/homepage/images/image 3.png') }}" height="270" class="card-img-top"
                            alt="..." />

                        {{-- Content --}}
                        <div class="card-body" style="height: 200px">

                            <h6>
                                <b>
                                    KEGIATAN PENGANUGERAHAN TANDA KARTIKA PAMONG PRAJA
                                </b>
                            </h6>

                            <p class="" style="text-align: justify; font-size: 12px">
                                Jatingagor, 27/10/2023 - Dalam rangka penganugerahan Tanda Kartika Pamong Praja dan
                                Alumni Kehormatan Kepada Pejabat Gubernur Papua Barat Daya Dr. Drs. Mohammad Musa’ad,
                                M.Si dan Bupati Malang Drs. H. Sanusi, M.M. sebagai bentuk apresiasi yang tinggi atas
                                kontribusinya dalam mendayagunakan alumni Institut Pemerintahan Dalam Negeri di Provinsi
                                Papua Barat Daya dan Kabupaten Malang.
                            </p>
                        </div>

                    </div>
                </div>


                <div class="col-4">
                    <div class="card rounded-lg shadow">
                        <img src="{{ asset('assets/homepage/images/image 4.png') }}" height="270" class="card-img-top"
                            alt="..." />

                        {{-- Content --}}
                        <div class="card-body" style="height: 200px">

                            <h6>
                                <b>
                                    Provinsi Papua Barat Daya Tingkatkan SDM Kepala Distrik Melalui Pendidikan Profesi
                                    Kepamongprajaan di IPDN -Kemendagri
                                </b>
                            </h6>

                            <p class="" style="text-align: justify; font-size: 12px">
                                Jakarta, 06/10/2023 - Rektor IPDN, Prof. Dr. Drs. H. Hadi Prabowo., M.M resmi membuka
                                kegiatan matrikulasi dan perkuliahan program pendidikan profesi kepamongprajaan angkatan
                                XII kelas bratha tahun akademik 2023/2024.
                            </p>
                        </div>

                    </div>
                </div>

                <div class="col-4">
                    <div class="card rounded-lg shadow">
                        <img src="{{ asset('assets/homepage/images/image 5.png') }}" height="270" class="card-img-top"
                            alt="..." />

                        {{-- Content --}}
                        <div class="card-body" style="height: 200px">

                            <h6>
                                <b>
                                    PENGANUGERAHAN TANDA KEHORMATAN DAM LENCANA ALUMNI KEHORMATAN
                                </b>
                            </h6>

                            <p class="" style="text-align: justify; font-size: 12px">
                                Jatingagor, 04/03/2023 - Rektor IPDN, Prof. Dr. Drs. H. Hadi Prabowo., M.M memberikan
                                penganugerahan tanda kehormatan Kartika Pamong Praja Madya, Kartika Pamong Praja Muda
                                dan Lencana Alumni Kehormatan Pendidikan Tinggi Kepamongprajaan kepada Direktur Program
                                Pendidikan Profesi Kepamongprajaan Dr. Dra. Hj. Endang Try Setyasih.
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


                {{-- Card Berita --}}
                <div class="row justify-content-evenly my-4">
                    <div class="col-12 p-4 rounded" style="background-color: #003b6d">

                        <div class="row align-items-start">

                            <div class="col-6">
                                <div class="row">
                                    <div class="col-2">
                                        <img src="https://static.promediateknologi.id/crop/0x0:0x0/750x500/webp/photo/2023/04/10/Rincian-tanggal-dan-kegiatan-SPCP-IPDN-di-dalam-artikel-Instagram-ipdn_praja_-3303168569.jpg"
                                            alt="mahasiswa-1" class="rounded img-fluid" style="width: 100px; height: 90px"/>
                                    </div>

                                    <div class="col-8">
                                        <h1><i class="bi bi-quote" style="color: orange"></i></h1>

                                        <p class="px-3" style="color: whitesmoke; text-align: justify;">
                                            Terbaik!! <br />
                                            Developer aplikasi ini sangat bahagia dan tercukupi kehidupanya. Selain itu
                                            tempat
                                            dia bekerja memiliki struktural yang sangat baik, supportif, mengedepankan
                                            work life
                                            balance, memperhatikan kesehatan dan kesejahteraan pegawai-pegawainya.
                                        </p>

                                        <p class="px-3" style="color: orange; font-size: 13px">
                                            Mark Zulkarnain <br />
                                            Angkatan XXI <br />
                                            Regional Baghdad
                                        </p>
                                    </div>
                                </div>
                            </div>


                            <div class="col-6">
                                <div class="row">
                                    <div class="col-2">
                                        <img src="https://i.pinimg.com/736x/73/17/20/731720bae90f6b53f6b8af7adb2d881a.jpg"
                                        alt="mahasiswa-2" class="rounded img-fluid" style="width: 100px; height: 90px"/>
                                    </div>

                                    <div class="col-8">
                                        <h1><i class="bi bi-quote" style="color: orange"></i></h1>

                                        <p class="px-3" style="color: whitesmoke; text-align: justify;">
                                            Terbaik!! <br />
                                            Developer aplikasi ini sangat bahagia dan tercukupi kehidupanya. Selain itu
                                            tempat
                                            dia bekerja memiliki struktural yang sangat baik, supportif, mengedepankan
                                            work life
                                            balance, memperhatikan kesehatan dan kesejahteraan pegawai-pegawainya.
                                        </p>

                                        <p class="px-3" style="color: orange; font-size: 13px">
                                            Ma'ruf Amir Aswadji <br />
                                            Angkatan CGV <br />
                                            Regional Rohingya
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
