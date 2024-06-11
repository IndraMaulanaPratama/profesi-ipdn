<div>
    {{-- Stop trying to control. --}}

    <x-admin.components.modal.header id="formUpdate" title='Ubah data kalender akademik' />

    <div class="row g-3 p-3">
        <form wire:submit='updateData' method="POST">

            {{-- No. Urut --}}
            <div class="row mb-3">
                <x-admin.components.form.input size='5' name='inputUrutan' placeholder='No. Urut' />
            </div>

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

            <x-admin.components.modal.footer />

        </form>
    </div>
</div>
