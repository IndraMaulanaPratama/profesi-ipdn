<div>
    {{-- Tambih data & Pencarian Data --}}
    <div class="row my-4">
        {{-- Tambih Data --}}
        <div class="col-lg-8">
            <a href="{{ route('admin.akademik.laboratorium.tambah-layanan') }}" class="btn btn-primary">
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
                                <!-- Urutan data -->
                                <td> {{ $item['LAYANAN_URUTAN'] }} </td>

                                <!-- Judul -->
                                <td>
                                    <a
                                        href="{{ route('admin.akademik.laboratorium.ubah-layanan', ['id' => $item['LAYANAN_ID']])}}">
                                        {{ $item['LAYANAN_JUDUL'] }}
                                    </a>
                                </td>

                                <!-- Petugas -->
                                <td> {{ $item->user->name }} </td>

                                <!-- Tanggal Rilis -->
                                <td>
                                    {{ \Carbon\Carbon::parse($item['updated_at'])->translatedFormat('d - F - Y') }}
                                </td>

                                <!-- Tombol Detail -->
                                <td>
                                    <button type="button" class="btn btn-sm btn-outline-success rounded-pill"
                                        wire:click="detailData('{{ $item['LAYANAN_ID'] }}')" data-bs-toggle="modal"
                                        data-bs-target="#detailData">
                                        <i class="bi bi-eye"></i>
                                    </button>
                                </td>

                                <!-- Tombol Hapus -->
                                <td>
                                    <button type="button" class="btn rounded-pill btn-sm btn-outline-danger"
                                        wire:click='deleteData("{{ $item['LAYANAN_ID'] }}")'
                                        wire:confirm='Anda yakin akan menghapus data {{ $item['LAYANAN_JUDUL'] }} ini?'>
                                        <i class="bi bi-trash3-fill"></i>
                                    </button>
                                </td>

                                </button>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            {{-- Pagination --}}
            <x-admin.tamplates.paginate.paginate :item="$data" />

        </div>
    </div>

    {{-- Modal Detail Data --}}
    <x-admin.components.modal.modal id="detailData" size='xl'>
        <div>
            <x-admin.components.modal.header id="detailData" title='Detail data layanan laboratorium' />

            <div class="row g-3 p-3">

                <div class="">
                    <x-admin.components.form.input name='detailJudul' placeholder='Judul Layanan' disabled='disabled' />
                </div>

                <div class="">
                    <x-admin.components.form.textarea name='detailDeskripsi' placeholder='Deskripsi Layanan'
                        disabled='disabled' />
                </div>

            </div>

        </div>
    </x-admin.components.modal.modal>
</div>