{{-- Close your eyes. Count to one. That is how long forever feels. --}}

<div>
    @if (session('success'))
        <x-admin.components.alert.success text="{{ session('success') }}" />
    @endif

    @if (session('warning'))
        <x-admin.components.alert.warning text="{{ session('warning') }}" />
    @endif

    @if (session('error'))
        <x-admin.components.alert.error text="{{ session('error') }}" />
    @endif

    {{-- Header --}}
    @livewire('App.LayananPengaduan.Header', [], key('header'))


    {{-- Content --}}
    @livewire('App.LayananPengaduan.Content', [], key('content'))

</div>
