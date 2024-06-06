<div>
    {{-- Baris bagian search sareng tombol tambih data --}}
    <div class="row justify-content-between">

        {{-- Tombol Tambah Data --}}
        <div class="col-lg-4 col-md-6 col-sm-12 invisible">
            {{-- Input Search --}}
            <button class="btn btn-outline-primary" type="button" data-bs-toggle="modal" data-bs-target="#formCreateAssign"
                wire:click='resetForm'>
                <span class="bi bi-plus-circle" role="status" aria-hidden="true"></span>
                Tambah Data
            </button>
        </div>

        {{-- Input Pencarian Data --}}
        <div class="col-lg-4 col-md-6 col-sm-12">
            <x-admin.components.form.input size=12 type='text' name='inputSearch' placeholder='Cari Data' />
        </div>
    </div>

    <hr />

    <table class="table table-responsive table-hover table-borderless">
        <thead>
            <tr>
                <th width='4%'>No.</th>
                <th>Biaya Pendidikan Pppkp</th>
                <th>Satuan</th>
                <th>Tarif (Rupiah)</th>
                <th colspan="2" width="3%">Option</th>
            </tr>
        </thead>

        <tbody>

            @foreach ($data as $item)
                <tr>
                    <td scope="row"> {{ $loop->index + $data->firstItem() }} </td>
                    <td> {{ $item['PENDIDIKAN_NAMA'] }} </td>
                    <td> {{ $item['PENDIDIKAN_SATUAN'] }} </td>
                    <td> {{ number_format($item['PENDIDIKAN_TARIF'], 0, '', '.') }} </td>

                    {{-- Option Row --}}
                    <td>
                        <button type="button" class="btn btn-sm btn-outline-success rounded-pill"
                            wire:click="sendId('{{ $item['PENDIDIKAN_ID'] }}')" data-bs-toggle="modal"
                            data-bs-target="#formUpdate">
                            <i class="bi bi-pencil-square"></i>
                        </button>
                    </td>
                    <td>
                        <button type="button" class="btn rounded-pill btn-sm btn-outline-danger"
                            wire:click='deleteData("{{ $item['PENDIDIKAN_ID'] }}")'
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
