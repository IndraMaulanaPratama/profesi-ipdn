{{-- The Master doesn't talk, he acts. --}}
{{-- The best athlete wants his opponent at his best. --}}

<div class="container">

    <x-admin.components.modal.header id="formCreate" title='Tambah data layanan' />

    <form wire:submit.prevent='createData' method="POST">
        <div class="row mt-3 g-3">

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