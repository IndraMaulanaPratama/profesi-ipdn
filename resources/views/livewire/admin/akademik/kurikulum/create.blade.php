<div>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}

    <form wire:submit.prevent='createData' method="POST">


        <div class="row g-3">

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

            <div class="">
                <x-admin.components.form.button-reset functionName='resetForm' text='Batalkan' />
                <x-admin.components.form.button type='submit' color='primary' text='Simpan' />
            </div>

        </div>
    </form>
</div>
