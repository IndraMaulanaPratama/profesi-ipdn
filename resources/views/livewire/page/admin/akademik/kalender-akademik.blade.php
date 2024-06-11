<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}

    @if (session('success'))
        <x-admin.components.alert.success text="{{ session('success') }}" />
    @endif

    @if (session('warning'))
        <x-admin.components.alert.warning text="{{ session('warning') }}" />
    @endif

    @if (session('error'))
        <x-admin.components.alert.error text="{{ session('error') }}" />
    @endif

    {{-- Data Table --}}
    <div class="row mt-4">
        <div class="col-lg-8 col-md-8 col-sm-12">
            <x-admin.components.card.card size=12 title='Data Tabel' titleSpan='Kalender Akademik'>
                @livewire('admin.Akademik.KalenderAkademik.Table')
            </x-admin.components.card.card>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-12">
            <x-admin.components.card.card size=12 title='Formulir' titleSpan='Tambah Data '>
                @livewire('admin.Akademik.KalenderAkademik.Create')
            </x-admin.components.card.card>
        </div>

    </div>

    {{-- Modal ngarobih data --}}
    <x-admin.components.modal.modal id="formUpdate">
        @livewire('admin.Akademik.KalenderAkademik.Update')
    </x-admin.components.modal.modal>
</div>
