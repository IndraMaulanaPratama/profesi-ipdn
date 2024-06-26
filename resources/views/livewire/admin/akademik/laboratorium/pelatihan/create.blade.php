{{-- Because she competes with no one, no one can compete with her. --}}

<div class="container">

    <x-admin.components.modal.header id="formCreate" title='Tambah data pelatihan' />

    <form wire:submit.prevent='createData' method="POST">
        <div class="row mt-3 g-3">

            {{-- Input Judul --}}
            <div class="">
                <x-admin.components.form.input name='inputJudul' placeholder='Judul pelatihan' />
            </div>


            {{-- Input Kode --}}
            <div class="">
                <x-admin.components.form.textarea name='inputDeskripsi' placeholder='Deksripsi' />
            </div>

            {{-- Input Judul --}}
            <div class="">
                <x-admin.components.form.input name='inputTautan' placeholder='Tautan pelatihan' />
            </div>



            <x-admin.components.modal.footer />

        </div>
    </form>

</div>
