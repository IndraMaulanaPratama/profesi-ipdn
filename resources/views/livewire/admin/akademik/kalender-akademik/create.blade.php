<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}

    <div class="row g-4">
        <form wire:submit='createData' method="POST">

            {{-- Tanggal --}}
            <div class="row mb-3">
                <x-admin.components.form.input type='date' size='5' name='inputTanggalAwal'
                    placeholder='Tanggal Awal' /> _
                <x-admin.components.form.input type='date' size='5' name='inputTanggalAkhir'
                    placeholder='Tanggal Akhir' />
            </div>

            {{-- Semester --}}
            <div class="">
                <x-admin.components.form.select name='inputSemester' placeholder='Semester'>
                    <option value="1">Semester 1</option>
                    <option value="2">Semester 2</option>
                </x-admin.components.form.select>
            </div>

            {{-- Kegiatan --}}
            <div class="row mb-3">
                <x-admin.components.form.textarea name='inputKegiatan' placeholder='Kegiatan' />
            </div>

            <div class="r-0">
                <x-admin.components.form.button-reset functionName='resetForm' text='Batalkan' />
                <x-admin.components.form.button type='submit' color='primary' text='Simpan' />
            </div>

        </form>
    </div>

</div>
