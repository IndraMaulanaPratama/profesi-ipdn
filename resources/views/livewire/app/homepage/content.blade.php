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

                        <a href="https://ipdn.siakadcloud.com/spmbfront/" target="_">
                            <img src="{{ asset('assets/homepage/images/PENERIMAAN MAHASISWA BARU 1.png') }}"
                                width="100%" />
                        </a>
                    </div>

                    <div class="carousel-item">
                        {{-- <img src="{{ asset('assets/homepage/images/bg-1.jpeg') }}" height="550" class="d-block w-100"
                            alt="..."> --}}

                        <a href="https://ipdn.siakadcloud.com/spmbfront/" target="_">

                            <img src="{{ asset('assets/homepage/images/PENERIMAAN MAHASISWA BARU 1.png') }}"
                                width="100%" />
                        </a>
                    </div>

                    <div class="carousel-item">
                        {{-- <img src="{{ asset('assets/homepage/images/bg-1.jpeg') }}" height="550" class="d-block w-100"
                            alt="..."> --}}

                        <a href="https://ipdn.siakadcloud.com/spmbfront/" target="_">

                            <img src="{{ asset('assets/homepage/images/PENERIMAAN MAHASISWA BARU 1.png') }}"
                                width="100%" />
                        </a>
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
            <div class="my-4">
                <center>
                    <h3><b>Kegiatan Profesi Kepamongprajaan</b></h3>
                </center>
            </div>


            {{-- Card Berita --}}
            <div class="row justify-content-evenly g-4">

                @foreach ($data as $item)
                    {{-- Berita 1 --}}
                    <div class="col-4">
                        <div class="card rounded-lg shadow">

                            <img src="{{ asset('thumbnail_berita/' . $item['KEGIATAN_THUMBNAIL']) }}" height="270"
                                class="card-img-top" alt="..." />

                            {{-- Content --}}
                            <div class="card-body" style="height: 250px">

                                {{-- Judul konten --}}
                                <h6 class="pb-2">
                                    <div class="" style="height: 70px;">
                                        <b>
                                            {!! $item['KEGIATAN_JUDUL'] !!}
                                        </b>
                                    </div>
                                </h6>

                                {{-- Isi Konten --}}
                                <div class="" style="height: 100px">

                                    <p class="" style="text-align: justify; color: #5B5B5B; font-size: 12px">
                                        @if (strlen($item['KEGIATAN_ISI']) >= 150)
                                            {!! Str::substr($item['KEGIATAN_ISI'], 0, 150) !!}
                                        @else
                                            {!! $item['KEGIATAN_ISI'] !!}
                                        @endif
                                    </p>

                                </div>

                                <p style="color: #063A69; text-decoration: underline; font-size: 12px;">
                                    <a href="{{ env('APP_URL') . '/berita/kegiatan/detail/' . $item['KEGIATAN_ID'] }}">Baca
                                        Selengkapnya</a>
                                </p>
                            </div>

                        </div>
                    </div>
                @endforeach

                {{-- See More --}}
                <div class="py-4" hidden>
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

                                        <iframe class="px-3" width="430" height="200"
                                            src="https://www.youtube.com/embed/jEhEuSm-ATU?si=CL0sPlTkOc9yYRKU"
                                            title="YouTube video player" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                            allowfullscreen></iframe>

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
