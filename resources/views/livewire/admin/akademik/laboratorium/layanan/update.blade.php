{{-- Stop trying to control. --}}

<div class="container">

    <x-admin.components.modal.header id="formUpdate" title='Ubah data layanan' />

    <form wire:submit.prevent='updateData' method="POST">
        <div class="row mt-3 g-3">

            {{-- Id Layanan --}}
            <input type="hidden" name="inputId" />

            {{-- Input Judul --}}
            <div class="">
                <x-admin.components.form.input name='inputUrutan' placeholder='Urutan' size=4 />
            </div>

            {{-- Input Judul --}}
            <div class="">
                <x-admin.components.form.input name='inputJudul' placeholder='Judul Layanan' />
            </div>


            {{-- Input Kode --}}
            <div class="">
                <x-admin.components.form.textarea name='inputDeskripsi' placeholder='Deksripsi' />
            </div>


            <x-admin.components.modal.footer />

        </div>
    </form>

</div>
