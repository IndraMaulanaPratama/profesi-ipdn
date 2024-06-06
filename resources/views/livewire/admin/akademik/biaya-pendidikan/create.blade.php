<div>
    <form wire:submit.prevent='createData' method="POST">

        <div class="row g-3">

            <div class="">
                <x-admin.components.form.input name='inputNama' placeholder='Nama Biaya Pendidikan' />
            </div>

            <div class="">
                <x-admin.components.form.input name='inputSatuan' placeholder='Jenis Satuan' />
            </div>

            <div class="">
                <x-admin.components.form.input name='inputTarif' placeholder='Tarif Pendidikan' />
            </div>

            <div class="r-0">
                <x-admin.components.form.button-reset functionName='resetForm' text='Batalkan' />
                <x-admin.components.form.button type='submit' color='primary' text='Simpan' />

            </div>
        </div>
    </form>
</div>
