<div>
    {{-- The best athlete wants his opponent at his best. --}}

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
            <x-admin.components.card.card size=12 title='Data Tabel' titleSpan='Berita Kegiatan'>
                @livewire('admin.Berita.Kegiatan.Create')
            </x-admin.components.card.card>
        </div>

    </div>
