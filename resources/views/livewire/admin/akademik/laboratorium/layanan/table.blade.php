<div>
    {{-- Tambih data & Pencarian Data --}}
    <div class="row my-4">
        {{-- Tambih Data --}}
        <div class="col-lg-8">
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#formCreate">
                Tambah Data
            </button>
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
                            <th class="text-center" colspan="3" style="width: 10%;">Option</th>
                        </tr>
                    </thead>

                    <tbody>

                        @foreach ($data as $item)
                            <tr>
                                <td> {{ $item['LAYANAN_URUTAN'] }} </td>
                                <td> {{ $item['LAYANAN_JUDUL'] }} </td>
                                <td> {{ $item->user->name }} </td>
                                <td>
                                    {{ \Carbon\Carbon::parse($item['updated_at'])->translatedFormat('d - F - Y') }}
                                </td>

                                <td>
                                    <button type="button" class="btn btn-sm btn-outline-success rounded-pill"
                                        wire:click="detailData('{{ $item['LAYANAN_ID'] }}')" data-bs-toggle="modal"
                                        data-bs-target="#detailData">
                                        <i class="bi bi-eye"></i>
                                    </button>
                                </td>

                                <td>
                                    <button type="button" class="btn btn-sm btn-outline-primary rounded-pill"
                                        wire:click="updateData('{{ $item['LAYANAN_ID'] }}')" data-bs-toggle="modal"
                                        data-bs-target="#formUpdate">
                                        <i class="bi bi-pencil-square"></i>
                                    </button>
                                </td>

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
                    <x-admin.components.form.input name='inputJudul' placeholder='Judul Layanan' disabled='disabled' />
                </div>

                <div class="">
                    <x-admin.components.form.textarea name='inputDeskripsi' placeholder='Deskripsi Layanan'
                        disabled='disabled' />
                </div>

            </div>

        </div>
    </x-admin.components.modal.modal>
</div>
