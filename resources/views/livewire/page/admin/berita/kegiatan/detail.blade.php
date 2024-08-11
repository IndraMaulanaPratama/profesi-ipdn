<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}


    @push('style')
        <x-admin.tamplates.editor.style />
    @endpush

    <div class="col-12">

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
            <x-admin.components.card.card size=12 title='Data Tabel' titleSpan='Detail Berita'>
                @livewire('admin.Berita.Kegiatan.Detail', ['id' => $id])
            </x-admin.components.card.card>
        </div>

    </div>
