{{-- The whole world belongs to you. --}}

<div class="container">

    <x-admin.components.modal.header id="formUpdate" title='Ubah data pelatihan' />

    <form wire:submit.prevent='updateData' method="POST">
        <div class="row mt-3 g-3">

            {{-- Id Pelatihan --}}
            <input type="hidden" name="inputId" />

            
            {{-- Input Urutan --}}
            <div class="">
                <x-admin.components.form.input name='inputUrutan' placeholder='Urutan' size=4 />
            </div>


            {{-- Input Judul --}}
            <div class="">
                <x-admin.components.form.input name='inputJudul' placeholder='Judul Pelatihan' />
            </div>


            {{-- Input Deskripsi --}}
            <div class="">
                <x-admin.components.form.textarea name='inputDeskripsi' placeholder='Deksripsi' />
            </div>


            {{-- Input Tautan --}}
            <div class="">
                <x-admin.components.form.input name='inputTautan' placeholder='Tautan Pelatihan' />
            </div>


            <x-admin.components.modal.footer />

        </div>
    </form>

</div>
