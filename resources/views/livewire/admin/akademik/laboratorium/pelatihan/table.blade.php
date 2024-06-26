{{-- The whole world belongs to you. --}}

<div class="card p-4">
    <div class="card-body">
        <div class="card-title">Pelatihan Laboratorium</div>
    </div>

    <!-- Navigasi Tab-->
    <ul class="nav nav-tabs nav-tabs-bordered" id="borderedTab" role="tablist" wire:ignore>

        {{-- Nav Data Table --}}
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="table-tab" data-bs-toggle="tab" data-bs-target="#bordered-home"
                type="button" role="tab" aria-controls="home" aria-selected="true">
                Data Table
            </button>
        </li>

        {{-- Nav Sumber Data --}}
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#bordered-profile"
                type="button" role="tab" aria-controls="profile" aria-selected="false" tabindex="-1">
                Sumber Data
            </button>
        </li>
    </ul>

    {{-- Content --}}
    <div class="tab-content pt-2" id="borderedTabContent">

        {{-- Data Table --}}
        <div class="tab-pane fade active show" id="bordered-home" role="tabpanel" aria-labelledby="table-tab">

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
                                    <th>Judul Pelatihan</th>
                                    <th style="width: 15%;">Pembuat</th>
                                    <th style="width: 15%;">Tanggal Terbit</th>
                                    <th class="text-center" colspan="3" style="width: 10%;">Option</th>
                                </tr>
                            </thead>

                            <tbody>

                                @foreach ($data as $item)
                                    <tr>
                                        <td> {{ $item['PELATIHAN_URUTAN'] }} </td>
                                        <td> {{ $item['PELATIHAN_JUDUL'] }} </td>
                                        <td> {{ $item->user->name }} </td>
                                        <td>
                                            {{ \Carbon\Carbon::parse($item['updated_at'])->translatedFormat('d - F - Y') }}
                                        </td>

                                        <td>
                                            <button type="button" class="btn btn-sm btn-outline-success rounded-pill"
                                                wire:click="detailData('{{ $item['PELATIHAN_ID'] }}')"
                                                data-bs-toggle="modal" data-bs-target="#detailData">
                                                <i class="bi bi-eye"></i>
                                            </button>
                                        </td>

                                        <td>
                                            <button type="button" class="btn btn-sm btn-outline-primary rounded-pill"
                                                wire:click="updateData('{{ $item['PELATIHAN_ID'] }}')"
                                                data-bs-toggle="modal" data-bs-target="#formUpdate">
                                                <i class="bi bi-pencil-square"></i>
                                            </button>
                                        </td>

                                        <td>
                                            <button type="button" class="btn rounded-pill btn-sm btn-outline-danger"
                                                wire:click='deleteData("{{ $item['PELATIHAN_ID'] }}")'
                                                wire:confirm='Anda yakin akan menghapus data {{ $item['PELATIHAN_JUDUL'] }} ini?'>
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
                    <x-admin.components.modal.header id="detailData" title='Detail data pelatihan laboratorium' />

                    <div class="row g-3 p-3">

                        {{-- Input Judul --}}
                        <div class="">
                            <x-admin.components.form.input name='inputJudul' placeholder='Judul pelatihan'
                                disabled='disabled' />
                        </div>

                        {{-- Input Deskripsi --}}
                        <div class="">
                            <x-admin.components.form.textarea name='inputDeskripsi' placeholder='Deskripsi pelatihan'
                                disabled='disabled' />
                        </div>

                        {{-- Input Tautan --}}
                        <div class="">
                            <x-admin.components.form.input name='inputTautan' placeholder='Tautan Pelatihan'
                                disabled='disabled' />
                        </div>


                    </div>

                </div>
            </x-admin.components.modal.modal>

        </div>


        {{-- Sumber Data --}}
        <div class="tab-pane fade" id="bordered-profile" role="tabpanel" aria-labelledby="profile-tab">

            {{-- Tambih data & Pencarian Data --}}
            <div class="row my-4">
                {{-- Tambih Data --}}
                <div class="col-lg-8">
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#formCreateSumber">
                        Tambah Data
                    </button>
                </div>

                {{-- Pencarian Data --}}
                {{-- <div class="col-lg-4 text-end">
                    <x-admin.components.form.input size=12 type='text' name='inputSearchSumber'
                        placeholder='Cari Data' />
                </div> --}}

            </div>

            {{-- Data Table --}}
            <div class="row mt-4">
                <div class="col-12">
                    <div class="table-responsive">
                        <table class="table table-stripped table-hover">
                            <thead>
                                <tr>
                                    <th style="width: 3%;">#</th>
                                    <th>Sumber Data</th>
                                    <th style="width: 15%;">Pembuat</th>
                                    <th style="width: 15%;">Tanggal Terbit</th>
                                    <th class="text-center" colspan="2" style="width: 5%;">Option</th>
                                </tr>
                            </thead>

                            <tbody>

                                @foreach ($sumberData as $item)
                                    <tr>
                                        <td> {{ $item['PELATIHAN_URUTAN'] }} </td>
                                        <td> {{ $item['PELATIHAN_JUDUL'] }} </td>
                                        <td> {{ $item->user->name }} </td>
                                        <td>
                                            {{ \Carbon\Carbon::parse($item['updated_at'])->translatedFormat('d - F - Y') }}
                                        </td>

                                        <td>
                                            <button type="button" class="btn btn-sm btn-outline-primary rounded-pill"
                                                wire:click="updateData('{{ $item['PELATIHAN_ID'] }}')"
                                                data-bs-toggle="modal" data-bs-target="#formUpdateSumber">
                                                <i class="bi bi-pencil-square"></i>
                                            </button>
                                        </td>

                                        <td>
                                            <button type="button" class="btn rounded-pill btn-sm btn-outline-danger"
                                                wire:click='deleteData("{{ $item['PELATIHAN_ID'] }}")'
                                                wire:confirm='Anda yakin akan menghapus data {{ $item['PELATIHAN_JUDUL'] }} ini?'>
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
        </div>
    </div>
</div>
