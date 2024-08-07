{{-- Close your eyes. Count to one. That is how long forever feels. --}}

<div class="container my-3">
    <div class="row ">

        {{-- Berita --}}
        <div class="col-12">

            {{-- Kegiatan --}}
            <div class="row my-4">
                <div class="col-12">
                    <div class="card shadow" style="">
                        <img src="{{ asset('thumbnail_berita/' . $data['KEGIATAN_THUMBNAIL']) }}" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <div class="pb-2" style="color: #E3A100; font-size: 12px">
                                {{ \Carbon\Carbon::parse($data['updated_at'])->translatedFormat('d F Y') }}</div>

                            <h5 class="card-title">
                                {{ $data['KEGIATAN_JUDUL'] }}
                            </h5>

                            <p class="card-text" style="font-size: 16px; text-align: justify;">
                                {!! $data['KEGIATAN_ISI'] !!}
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        {{-- Search --}}
        <div class="col-3 mx-3 my-4" hidden>
            <div class="row border shadow rounded">
                <div class="col-12">

                    <div class="mb-2 pt-3">

                        <label for="exampleFormControlInput1" class="form-label"><b>PENCARIAN KEGIATAN</b></label>
                        <input type="email" class="form-control" id="exampleFormControlInput1"
                            placeholder="Masukan kata kunci...." />
                    </div>

                    <a href="#" class="btn btn-primary mb-3 px-4">Cari</a>

                </div>
            </div>
        </div>

    </div>
</div>
