{{-- In work, do what you enjoy. --}}

<div>

    {{-- Breadcrumb --}}
    <div class="container mb-3" style="font-size: 12px;">
        <a href="{{ route('/') }}" class="link" style="">
            Beranda
        </a>

        &nbsp; &#62; &nbsp;

        <a href="#">
            Berita
        </a>

        &nbsp; &#62; &nbsp;

        <a href="{{ route('berita-pengumuman') }}">
            Pengumuman
        </a>
    </div>

    {{-- Jumbotron --}}
    <div class="row">
        <div class="col-12">
            <!-- Jumbotron -->
            <div class="text-center bg-image"
                style="background-image: url('https://mdbcdn.b-cdn.net/img/new/slides/041.webp');height: auto;">

                <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
                    <div class="d-flex justify-content-center align-items-center" style=" height: 200px">
                        <div style="color: #ffda79;">
                            <h1 class=""><b>PENGUMUMAN</b></h1>
                        </div>
                    </div>
                </div>

            </div>
            <!-- Jumbotron -->
        </div>
    </div>

</div>
