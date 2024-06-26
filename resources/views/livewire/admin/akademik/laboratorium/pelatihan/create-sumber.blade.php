{{-- Success is as dangerous as failure. --}}

<div class="container">

    <x-admin.components.modal.header id="formCreate" title='Tambah data pelatihan' />

    <form wire:submit.prevent='createData' method="POST">
        <div class="row mt-3 g-3">

            {{-- Input Sumber  --}}
            <div class="">
                <x-admin.components.form.input name='inputJudul' placeholder='Sumber Data' />
            </div>

            <x-admin.components.modal.footer />

        </div>
    </form>

</div>
