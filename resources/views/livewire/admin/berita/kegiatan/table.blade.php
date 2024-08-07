<div>
    {{-- Table: Because she competes with no one, no one can compete with her. --}}


    {{-- Tambih data & Pencarian Data --}}
    <div class="row my-4">
        {{-- Tambih Data --}}
        <div class="col-lg-8">
            <a href="{{ route('admin.berita.kegiatan.tambah') }}" class="btn btn-primary">
                Tambah Data
            </a>
        </div>

        {{-- Pencarian Data --}}
        <div class="col-lg-4 text-end">
            <x-admin.components.form.input size=12 type='text' name='inputSearch' placeholder='Cari Data' />
        </div>

    </div>


    {{-- Data Table --}}
    <div class="row mt-4">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-stripped table-hover">
                    <thead>
                        <tr>
                            <th style="width: 3%;">#</th>
                            <th>Judul</th>
                            <th style="width: 15%;">Pembuat</th>
                            <th style="width: 15%;">Tanggal Terbit</th>
                            <th class="text-center" colspan="2" style="width: 5%;">Option</th>
                        </tr>
                    </thead>

                    <tbody>

                        @foreach ($data as $item)
                            <tr>

                                {{-- Nomor Table --}}
                                <th scope="row"> {{ $loop->index + $data->firstItem() }} </th>

                                <!-- Judul -->
                                <td>
                                    <a
                                        href="{{ route('admin.akademik.laboratorium.ubah-layanan', ['id' => $item['KEGIATAN_ID']]) }}">
                                        {{ $item['KEGIATAN_JUDUL'] }}
                                    </a>
                                </td>

                                <!-- Petugas -->
                                <td> {{ $item->user->name }} </td>

                                <!-- Tanggal Rilis -->
                                <td>
                                    {{ \Carbon\Carbon::parse($item['updated_at'])->translatedFormat('d - F - Y') }}
                                </td>

                                <!-- Tombol Hapus -->
                                <td>
                                    <button type="button" class="btn rounded-pill btn-sm btn-outline-danger"
                                        wire:click='deleteData("{{ $item['KEGIATAN_ID'] }}")'
                                        wire:confirm='Anda yakin akan menghapus data {{ $item['KEGIATAN_JUDUL'] }} ini?'>
                                        <i class="bi bi-trash3-fill"></i>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            {{-- Pagination --}}
            <x-admin.tamplates.paginate.paginate :item="$data" />

        </div>
    </div>

</div>
