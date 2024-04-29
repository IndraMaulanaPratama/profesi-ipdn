{{-- Close your eyes. Count to one. That is how long forever feels. --}}

<div>
    <div class="col-12">
        <x-admin.components.card.card size=12 title='Data Pengaduan' titleSpan=''>

            <div class="row g-4">
                <div class="col-12">

                    {{-- Baris bagian search sareng tombol tambih data --}}
                    <div class="row justify-content-between">

                        {{-- Tombol Tambah Data --}}
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            {{-- Input Search --}}
                            <button class="btn btn-outline-primary" {{ $buttonCreate }} type="button"
                                data-bs-toggle="modal" data-bs-target="#formCreateMenu" wire:click='resetForm'>
                                <span class="bi bi-plus-circle" role="status" aria-hidden="true"></span>
                                Tambah Data
                            </button>
                        </div>

                        {{-- Input Pencarian Data --}}
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <x-admin.components.form.input size=12 type='text' name='search'
                                placeholder='Cari Data' />
                        </div>
                    </div>


                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col" width=5%>#</th>
                                    <th scope="col" wiidth="40%">ID Pengaduan</th>
                                    <th scope="col" wiidth="10%">Status</th>
                                    <th scope="col" width="40%">Pengaduan</th>
                                    <th scope="col" colspan="4" width=5%>Option</th>
                                </tr>
                            </thead>
                            <tbody>

                                @php
                                    $nomor = 1;
                                @endphp

                                @foreach ($data as $item)
                                    @php
                                        $item->PENGADUAN_ATTACHMENT == null
                                            ? ($buttonAttachment = 'hidden')
                                            : ($buttonAttachment = null);

                                        // Logic Button Reply
                                        $item->PENGADUAN_STATUS == 'Proses'
                                            ? ($buttonReply = null)
                                            : ($buttonReply = 'hidden');
                                    @endphp

                                    <tr>
                                        <td scope="col" widtd=3%> {{ $nomor }} </td>
                                        <td scope="col">{{ $item['PENGADUAN_ID'] }}</td>
                                        <td scope="col">{{ $item['PENGADUAN_STATUS'] }}</td>
                                        <td scope="col">{{ Str::substr($item['PENGADUAN_VALUE'], 0, 50) }} ...</td>

                                        {{-- Option Row --}}

                                        <td {{ $buttonDetail . $accessDetail }}>
                                            <button type="button" class="btn btn-sm btn-outline-primary rounded-pill"
                                                wire:click="detailPengaduan('{{ $item->PENGADUAN_ID }}')"
                                                data-bs-toggle="modal" data-bs-target="#modalDetailPengajuan" />
                                            <i class="bi bi-eye"></i>
                                            </button>
                                        </td>

                                        <td {{ $buttonAttachment }}>
                                            <button type="button"
                                                class="btn btn-sm btn-outline-secondary rounded-pill" />

                                            <a href="{{ env('APP_URL') . '/file_pengaduan/' . $item->PENGADUAN_ATTACHMENT }}"
                                                target="_blank">
                                                <i class="bi bi-paperclip"></i>
                                            </a>
                                            </button>
                                        </td>


                                        <td {{ $buttonReply . $accessUpdate }}>
                                            <button type="button" class="btn btn-sm btn-outline-success rounded-pill"
                                                wire:click="detailPengaduan('{{ $item->PENGADUAN_ID }}')"
                                                data-bs-toggle="modal" data-bs-target="#modalBalasanPengaduan">
                                                <i class="bi bi-reply"></i>
                                            </button>
                                        </td>

                                        <td {{ $buttonDelete . $accessDelete }}>
                                            <button type="button" class="btn rounded-pill btn-sm btn-outline-danger"
                                                wire:click='deletePengaduan("{{ $item->PENGADUAN_ID }}")'
                                                wire:confirm='Anda yakin akan menghapus Pengaduan {{ $item->PENGADUAN_NAME }} ini?'>
                                                <i class="bi bi-trash3-fill"></i>
                                            </button>
                                        </td> <!-- END Of OPTION ROW !-->
                                    </tr>

                                    @php
                                        $nomor++;
                                    @endphp
                                @endforeach

                            </tbody>
                        </table>
                        {{-- <x-admin.tamplates.paginate.paginate :item="$data" /> --}}
                    </div>
                    <x-admin.tamplates.paginate.paginate :item="$data" />


                </div>
            </div>

        </x-admin.components.card.card>

        {{-- Modal Detail Pengaduan --}}
        <x-admin.components.modal.modal id='modalDetailPengajuan' size='xl'>
            <x-admin.components.modal.header id='modalDetailPengajuan' title="Data Detail Pengajuan" />

            <div class="modal-body">
                {{-- Id sareng Status Pengajuan --}}
                <div class="row p-2 ">
                    <div class="col-6">
                        <x-admin.components.form.input name='detailId' placeholder='ID Pengaduan' disabled='disabled' />
                    </div>
                    <div class="col-6">
                        <x-admin.components.form.input name='detailStatus' placeholder='Status Terkini'
                            disabled='disabled' />
                    </div>
                </div>

                <hr />

                {{-- Data Pengirim pengajuan --}}
                <div class="row g-2 p-2 ">

                    {{-- Email Pengirim --}}
                    <div class="col-6">
                        <x-admin.components.form.input name='detailEmail' placeholder='Email Pengirim'
                            disabled='disabled' />
                    </div>

                    {{-- Nama Pengirim --}}
                    <div class="col-6">
                        <x-admin.components.form.input name='detailName' placeholder='Nama Pengirim'
                            disabled='disabled' />
                    </div>

                    {{-- Isi Pengaduan --}}
                    <div class="col-12">
                        <x-admin.components.form.textarea name='detailValue' tinggi='200' placeholder='Isi Pengaduan'
                            disabled='disabled' />
                    </div>

                </div>

                <hr />

                {{-- Data Petugas --}}
                <div class="row g-2 p-2">
                    {{-- Nami Petugas --}}
                    <div class="col-6">
                        <x-admin.components.form.input name='detailOfficer' placeholder='Nama Petugas'
                            disabled='disabled' />
                    </div>


                    <div class="col-12">
                        <x-admin.components.form.textarea name='detailSolution' tinggi='200'
                            placeholder='Jawaban Petugas' disabled='disabled' />
                    </div>
                </div>
            </div>

        </x-admin.components.modal.modal>

        {{-- Modal Balasan Pengajuan --}}
        <x-admin.components.modal.modal id='modalBalasanPengaduan' size='xl'>
            <x-admin.components.modal.header id='modalBalasanPengaduan' title="Form Balasan Pengajuan" />

            <form wire:submit='replyPengaduan' method="POST">
                <div class="modal-body">

                    {{-- Id sareng Status Pengajuan --}}
                    <div class="row p-2 ">
                        <div class="col-6">
                            <x-admin.components.form.input name='detailId' placeholder='ID Pengaduan'
                                disabled='disabled' />
                        </div>
                        <div class="col-6">
                            <x-admin.components.form.input name='detailStatus' placeholder='Status Terkini'
                                disabled='disabled' />
                        </div>
                    </div>

                    <hr />

                    {{-- Data Pengirim pengajuan --}}
                    <div class="row g-2 p-2 ">

                        {{-- Email Pengirim --}}
                        <div class="col-6">
                            <x-admin.components.form.input name='detailEmail' placeholder='Email Pengirim'
                                disabled='disabled' />
                        </div>

                        {{-- Nama Pengirim --}}
                        <div class="col-6">
                            <x-admin.components.form.input name='detailName' placeholder='Nama Pengirim'
                                disabled='disabled' />
                        </div>

                        {{-- Isi Pengaduan --}}
                        <div class="col-6">
                            <x-admin.components.form.textarea name='detailValue' tinggi='200'
                                placeholder='Isi Pengaduan' disabled='disabled' />
                        </div>

                    </div>

                    <hr />

                    {{-- Data Petugas --}}
                    <div class="row g-2 p-2">

                        <div class="col-12">
                            <x-admin.components.form.textarea name='detailSolution' tinggi='200'
                                placeholder='Tuliskan Jawaban Anda' />
                        </div>
                    </div>

                    {{-- Tombol Reset sareng Submit --}}
                    <div class="modal-footer">
                        {{-- Tombol Reset / Cancel --}}
                        <button type="button" wire:click='resetForm' class="btn btn-outline-secondary"
                            data-bs-dismiss="modal">
                            Batalkan
                        </button>

                        {{-- Tombol Simpan / Submit --}}
                        <button type="submit" class="btn btn-outline-primary" data-bs-dismiss="modal">
                            Simpan
                        </button>
                    </div>

                </div>
            </form>
        </x-admin.components.modal.modal>

    </div>
</div>
