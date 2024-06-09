<div class="container">
    {{-- The best athlete wants his opponent at his best. --}}

    <x-admin.components.modal.header id="formUpdate" title='Ubah data kurikulum' />

    <form wire:submit.prevent='updateData' method="POST">


        <div class="row mt-3 g-3">

            {{-- Input kode --}}
            <input type="hidden" name="inputId" />

            {{-- Input Kode --}}
            <div class="">
                <x-admin.components.form.input name='inputUrutan' placeholder='Nomor Urut' />
            </div>


            {{-- Input Kode --}}
            <div class="">
                <x-admin.components.form.input name='inputKode' placeholder='Kode Kurikulum' />
            </div>

            {{-- Input Matakuliah --}}
            <div class="">
                <x-admin.components.form.input name='inputMatakuliah' placeholder='Nama Mata Kuliah' />
            </div>

            {{-- Input Sks --}}
            <div class="">
                <x-admin.components.form.input name='inputSks' placeholder='Jumlah SKS' />
            </div>

            {{-- Input Semester --}}
            <div class="">
                <x-admin.components.form.select name='inputSemester' placeholder='Semester'>
                    <option value="1">Semester 1</option>
                    <option value="2">Semester 2</option>
                </x-admin.components.form.select>
            </div>

            <x-admin.components.modal.footer />

        </div>
    </form>

</div>
