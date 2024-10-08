{{-- Care about people's approval and you will be their prisoner. --}}

<div class="container my-3">
    <div class="row ">

        {{-- Berita --}}
        <div class="col-12">

            @foreach ($data as $item)
            
            {{-- Kegiatan --}}
            <div class="row my-4">
                <div class="col-12">
                    <div class="card shadow" style="">
                        <img src="{{ asset('thumbnail_berita/'. $item['KEGIATAN_THUMBNAIL']) }}" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <div class="pb-2" style="color: #E3A100; font-size: 12px">{{ \Carbon\Carbon::parse($item['updated_at'])->translatedFormat('d F Y') }}</div>

                            <h5 class="card-title">
                                {{$item['KEGIATAN_JUDUL']}}
                            </h5>

                            <p class="card-text" style="font-size: 16px; text-align: justify;">
                                {!! substr($item['KEGIATAN_ISI'], 0, 350) !!} ......
                            </p>
                            <a href="{{ env('APP_URL'). '/berita/kegiatan/detail/' . $item['KEGIATAN_ID']}}" class="btn btn-primary">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>

            @endforeach

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
