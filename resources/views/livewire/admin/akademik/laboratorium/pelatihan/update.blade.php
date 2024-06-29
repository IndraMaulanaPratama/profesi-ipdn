{{-- The whole world belongs to you. --}}

<div class="">

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
            <div class="" wire:ignore>
                <textarea id='input'>{!! $inputDeskripsi !!}</textarea>
            </div>

            {{-- Tombol submit sareng reset --}}
            <div class="text-end">
                <!-- Tombol Reset -->
                <a href="{{ route('admin.akademik.laboratorium.pelatihan') }}"
                    class="btn btn-outline-secondary">Kembali</a>

                <!-- Tombol Submit -->
                <x-admin.components.form.button type="submit" id="btnSubmit" color="primary" text="simpan" />
            </div>

        </div>
    </form>

</div>

<script>
    $(document).ready(function() {
        const editor = CKEDITOR.replace('input');
        editor.on('change', function(event) {
            @this.set('inputDeskripsi', event.editor.getData());
        });

        $("#btnSubmit").click(function() {
            CKEDITOR.instances['input'].setData("");
        });

        $("#btnReset").click(function() {
            CKEDITOR.instances['input'].setData("");
        });

    });
</script>
