<div>
    <x-admin.components.modal.header id="formUpdate" title='Ubah data biaya pendidikan' />

    <form wire:submit.prevent='updateData' method="POST">

        <div class="row g-3 p-3">

            {{-- ID --}}
            <input type="hidden" name="inputId" />


            <div class="">
                <x-admin.components.form.input name='inputNama' placeholder='Nama Biaya Pendidikan' />
            </div>

            <div class="">
                <x-admin.components.form.input name='inputSatuan' placeholder='Jenis Satuan' />
            </div>

            <div class="">
                <x-admin.components.form.input name='inputTarif' placeholder='Tarif Pendidikan' />
            </div>

        </div>

        <x-admin.components.modal.footer />

    </form>


</div>
