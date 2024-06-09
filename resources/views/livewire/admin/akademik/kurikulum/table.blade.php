<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}

    <div class="row justify-content-between">

        {{-- Tombol Tambah Data --}}
        <div class="col-lg-4 col-md-6 col-sm-12">
            {{-- Search Semester --}}
            <div class="">
                <x-admin.components.form.select name='searchSemester' placeholder='Semester' size='6'>
                    <option value="1">Semester 1</option>
                    <option value="2">Semester 2</option>
                </x-admin.components.form.select>
            </div>
        </div>

        {{-- Input Pencarian Data --}}
        <div class="col-lg-4 col-md-6 col-sm-12">
            <x-admin.components.form.input size=12 type='text' name='searchKode' placeholder='Cari Data' />
        </div>
    </div>

    <hr />
    <table class="table table-hover table-responsive">
        <thead>
            <tr>
                <th width='5%'>#</th>
                <th width='15%'>Semester</th>
                <th width='10%'>Kode</th>
                <th width='10%'>No. Urut</th>
                <th>Mata Kuliah</th>
                <th width='5%'>Sks</th>
                <th colspan="2" width='5%'>Option</th>
            </tr>
        </thead>

        <tbody>

            @foreach ($data as $item)
                <tr>
                    <td>{{ $loop->index + $data->firstItem() }}</td>
                    <td> Semester {{ $item['KURIKULUM_SEMESTER'] }} </td>
                    <td> {{ $item['KURIKULUM_KODE'] }} </td>
                    <td> {{ $item['KURIKULUM_URUTAN'] }} </td>
                    <td> {{ $item['KURIKULUM_MATAKULIAH'] }} </td>
                    <td> {{ $item['KURIKULUM_SKS'] }} </td>


                    {{-- Option Row --}}
                    <td>
                        <button type="button" class="btn btn-sm btn-outline-success rounded-pill"
                            wire:click="sendId('{{ $item['KURIKULUM_ID'] }}')" data-bs-toggle="modal"
                            data-bs-target="#formUpdate">
                            <i class="bi bi-pencil-square"></i>
                        </button>
                    </td>
                    <td>
                        <button type="button" class="btn rounded-pill btn-sm btn-outline-danger"
                            wire:click='deleteData("{{ $item['KURIKULUM_ID'] }}")'
                            wire:confirm='Anda yakin akan menghapus data ini?'>
                            <i class="bi bi-trash3-fill"></i>
                        </button>
                    </td>
                    <!-- END Of OPTION ROW !-->
                </tr>
            @endforeach

        </tbody>
    </table>

    <x-admin.tamplates.paginate.paginate :item="$data" />
</div>
