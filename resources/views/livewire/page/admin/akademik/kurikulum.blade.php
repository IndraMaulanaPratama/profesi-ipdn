<div>
    {{-- Care about people's approval and you will be their prisoner. --}}


    @if (session('success'))
        <x-admin.components.alert.success text="{{ session('success') }}" />
    @endif

    @if (session('warning'))
        <x-admin.components.alert.warning text="{{ session('warning') }}" />
    @endif

    @if (session('error'))
        <x-admin.components.alert.error text="{{ session('error') }}" />
    @endif


    {{-- Tabel data sareng form tambih data --}}
    <div class="col-12">
        <div class="row g-3">

            <div class="col-lg-9 col-md-9 col-sm-12">
                <x-admin.components.card.card size=12 title='Data Tabel' titleSpan='Biaya Pendidikan'>
                    @livewire('admin.Akademik.Kurikulum.Table')
                </x-admin.components.card.card>

            </div>

            <div class="col-lg-3 col-md-3 col-sm-12">
                <x-admin.components.card.card size=12 title='Formulir' titleSpan='Tambah databaru'>
                    @livewire('admin.Akademik.kurikulum.Create')
                </x-admin.components.card.card>

            </div>

        </div>
    </div>

    {{-- Modal ngarobih data --}}
    <x-admin.components.modal.modal id="formUpdate">
        @livewire('admin.Akademik.Kurikulum.Update')
    </x-admin.components.modal.modal>

</div>
