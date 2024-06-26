{{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}

<div class="container">

    <x-admin.components.modal.header id="formUpdate" title='Ubah sumber data' />

    <form wire:submit.prevent='updateData' method="POST">
        <div class="row mt-3 g-3">

            {{-- Id Pelatihan --}}
            <input type="hidden" name="inputId" />

            
            {{-- Input Urutan --}}
            <div class="">
                <x-admin.components.form.input name='inputUrutan' placeholder='Urutan' size=4 />
            </div>


            {{-- Input Sumber --}}
            <div class="">
                <x-admin.components.form.input name='inputJudul' placeholder='Sumber Data' />
            </div>

            <x-admin.components.modal.footer />

        </div>
    </form>

</div>