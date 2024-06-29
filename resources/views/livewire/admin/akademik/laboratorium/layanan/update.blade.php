{{-- Stop trying to control. --}}

<div class="">


    <form wire:submit.prevent='updateData' method="POST">
        <div class="row mt-3 g-3">

            {{-- Id Layanan --}}
            <input type="hidden" wire:model="updateId" />

            {{-- Input Urutan --}}
            <div class="">
                <x-admin.components.form.input name='updateUrutan' placeholder='Urutan' size=1 />
            </div>

            {{-- Input Judul --}}
            <div class="">
                <x-admin.components.form.input name='updateJudul' placeholder='Judul Layanan' />
            </div>


            {{-- Input Deskripsi --}}
            {{-- <div class="">
                <x-admin.components.form.textarea name='updateDeskripsi' placeholder='Deksripsi' />
            </div> --}}


            {{-- Input Deskripsi --}}
            <div class="" wire:ignore>
                <textarea id="update-cke"> {!! $updateDeskripsi !!}</textarea>
            </div>

            {{-- Tombol submit sareng reset --}}
            <div class="text-end">
                <!-- Tombol Reset -->
                <a href="{{ route('admin.akademik.laboratorium.layanan') }}" class="btn btn-outline-secondary">Kembali</a>

                <!-- Tombol Submit -->
                <x-admin.components.form.button type="submit" id="btnSubmit" color="primary" text="simpan" />
            </div>

        </div>
    </form>

</div>

<script>
    $(document).ready(function() {
        const editor = CKEDITOR.replace('update-cke');
        editor.on('change', function(event) {
            @this.set('updateDeskripsi', event.editor.getData());
        });

        $("#btnReset").click(function() {
            CKEDITOR.instances['update-cke'].setData("");
        });

    });
</script>
