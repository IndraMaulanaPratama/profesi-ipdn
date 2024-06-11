<div>
    {{-- Do your work, then step back. --}}

    <div class="row justify-content-between">

        {{-- Tombol Tambah Data --}}
        <div class="col-lg-3 col-md-3 col-sm-12">
            {{-- Filter dumasar kana semester --}}
            <x-admin.components.form.select name='sortSemester' placeholder='Semester'>
                <option value="1">Semester 1</option>
                <option value="2">Semester 2</option>
            </x-admin.components.form.select>
        </div>

        {{-- Input Pencarian Data --}}
        <div class="col-lg-4 col-md-6 col-sm-12">
            <x-admin.components.form.input size=12 type='text' name='sortSearch' placeholder='Cari Data' />
        </div>
    </div>

    <hr />

    <div class="table-responsive">
        <table class="table table-hover ">
            <thead>
                <tr>
                    <th width='5%'>No.</th>
                    <th width='15%'>Semester</th>
                    <th width='25%'>Tanggal Kegiatan</th>
                    <th>Nama Kegiatan</th>
                    <th colspan="2" width="10%">Option</th>
                </tr>
            </thead>

            <tbody>

                @foreach ($data as $item)
                    {{-- Fungsi kanggo misahkeun data tanggal --}}
                    @php
                        $tanggal = explode('/', $item->KALENDER_TANGGAL);
                    @endphp

                    <tr>
                        <td> {{ $item->KALENDER_URUTAN }} </td>
                        <td> Semester {{ $item->KALENDER_SEMESTER }} </td>
                        <td>
                            {{ date('d - F - Y', strtotime($tanggal[0])) }} s.d. <br />
                            {{ date('d - F - Y', strtotime($tanggal[1])) }}
                        </td>
                        <td> {{ $item->KALENDER_KEGIATAN }} </td>


                        {{-- Option Row --}}
                        <td>
                            <button type="button" class="btn btn-sm btn-outline-success rounded-pill"
                                wire:click="sendId('{{ $item->KALENDER_ID }}')" data-bs-toggle="modal"
                                data-bs-target="#formUpdate">
                                <i class="bi bi-pencil-square"></i>
                            </button>
                        </td>
                        <td>
                            <button type="button" class="btn rounded-pill btn-sm btn-outline-danger"
                                wire:click="deleteData('{{ $item->KALENDER_ID }}')"
                                wire:confirm='Anda yakin akan menghapus data ini?'>
                                <i class="bi bi-trash3-fill"></i>
                            </button>
                        </td> <!-- END Of OPTION ROW !-->
                    </tr>
                @endforeach

            </tbody>
        </table>

        <x-admin.tamplates.paginate.paginate :item="$data" />
    </div>
</div>
