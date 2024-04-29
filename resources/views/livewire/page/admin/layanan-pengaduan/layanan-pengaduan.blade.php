{{-- The whole world belongs to you. --}}

<div class="">

    @if (session('success'))
        <x-admin.components.alert.success text="{{ session('success') }}" />
    @endif

    @if (session('warning'))
        <x-admin.components.alert.warning text="{{ session('warning') }}" />
    @endif

    @if (session('error'))
        <x-admin.components.alert.error text="{{ session('error') }}" />
    @endif

    <div class="row">
        {{-- Laayanan Pengaduan: The Master doesn't talk, he acts. --}}
        @livewire('admin.layananPengaduan.table')
    </div>

</div>
