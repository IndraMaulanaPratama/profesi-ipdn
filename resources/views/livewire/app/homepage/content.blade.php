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
                        <img src="{{ asset('assets/homepage/images/bg-3.jpeg') }}" height="270" class="card-img-top"
                            alt="...">
                        <div class="card-body" style="height: 200px">
                            <p class="card-text">
                                Some quick example text to build on the card title and make up the
                                bulk
                                of the card's content.
                            </p>
                        </div>
                    </div>
                </div>


                <div class="col-4">
                    <div class="card rounded-lg shadow">
                        <img src="{{ asset('assets/homepage/images/bg-2.jpeg') }}" height="270" class="card-img-top"
                            alt="...">
                        <div class="card-body" style="height: 200px">
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk
                                of the card's content.</p>
                        </div>
                    </div>
                </div>

                <div class="col-4">
                    <div class="card rounded-lg shadow">
                        <img src="https://wallpapercave.com/wp/wp7614917.jpg" height="270" class="card-img-top"
                            alt="...">
                        <div class="card-body" style="height: 200px">
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk
                                of the card's content.</p>
                        </div>
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
                                <div class="col-auto">
                                    <img src="https://images.unsplash.com/photo-1517423440428-a5a00ad493e8?q=80&w=1000&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxleHBsb3JlLWZlZWR8MTJ8fHxlbnwwfHx8fHw%3D"
                                        alt="mahasiswa-1" class="rounded img" width="100" height="100" />
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
                                <div class="col-auto">
                                    <img src="https://i.pinimg.com/originals/32/a0/31/32a031cddeb9c1649062a13aa946c8c0.jpg"
                                        alt="mahasiswa-1" class="rounded img" width="100" height="100" />
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
