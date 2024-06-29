{{-- The Master doesn't talk, he acts. --}}
{{-- The best athlete wants his opponent at his best. --}}


<div class="">

    <form wire:submit.prevent='createData' method="POST">
        <div class="row mt-3 g-3">

            {{-- Input Judul --}}
            <div class="">
                <x-admin.components.form.input name='inputJudul' placeholder='Judul Layanan' />
            </div>


            {{-- Input Kode --}}
            <div class="" wire:ignore>
                <textarea id='input'></textarea>
            </div>

            {{-- Tombol submit sareng reset --}}
            <div class="text-end">
                <!-- Tombol Reset -->
                <x-admin.components.form.button-reset functionName="resetForm" id="btnReset" />

                <!-- Tombol Submit -->
                <x-admin.components.form.button type="submit" id="btnSubmit" color="primary" text="simpan" />
            </div>

        </div>
    </form>

</div>

<script>
    $(document).ready(function () {
        const editor = CKEDITOR.replace('input');
        editor.on('change', function (event) {
            @this.set('inputDeskripsi', event.editor.getData());
        });

        $("#btnSubmit").click(function () {
            CKEDITOR.instances['input'].setData("");
        });

        $("#btnReset").click(function () {
            CKEDITOR.instances['input'].setData("");
        });

    });
</script>