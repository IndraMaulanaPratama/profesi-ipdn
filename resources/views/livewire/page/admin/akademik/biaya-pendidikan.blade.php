<div class="col-12">
    {{-- The whole world belongs to you. --}}

    @if (session('success'))
        <x-admin.components.alert.success text="{{ session('success') }}" />
    @endif

    @if (session('warning'))
        <x-admin.components.alert.warning text="{{ session('warning') }}" />
    @endif

    @if (session('error'))
        <x-admin.components.alert.error text="{{ session('error') }}" />
    @endif

    {{-- Biaya Pendidikan: The Master doesn't talk, he acts. --}}

    <div class="col-12">

        {{-- Preview sareng Formulir --}}
        <div class="row g-4">

            {{-- Preview --}}
            <div class="col-lg-8 col-md-8 col-sm-12">
                <x-admin.components.card.card size=12 title='Preview Data' titleSpan='Biaya Pendidikan'>
                    @livewire('admin.Akademik.BiayaPendidikan.Preview')
                </x-admin.components.card.card>
            </div>

            {{-- Formulir --}}
            <div class="col-lg-4 col-md-4 col-sm-12">
                <x-admin.components.card.card size=12 title='Formulir' titleSpan='Tambah Data Baru'>
                    @livewire('admin.Akademik.BiayaPendidikan.Create')
                </x-admin.components.card.card>
            </div>
        </div>
    </div>

    {{-- Data Table --}}
    <div class="row mt-4">
        <x-admin.components.card.card size=12 title='Data Tabel' titleSpan='Biaya Pendidikan'>
            @livewire('admin.Akademik.BiayaPendidikan.Table')
        </x-admin.components.card.card>
    </div>

    {{-- Modal ngarobih data --}}
    <x-admin.components.modal.modal id="formUpdate">
        @livewire('admin.Akademik.BiayaPendidikan.Update')
    </x-admin.components.modal.modal>

</div>
