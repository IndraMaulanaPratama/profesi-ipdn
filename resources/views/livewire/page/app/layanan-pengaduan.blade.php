{{-- Close your eyes. Count to one. That is how long forever feels. --}}

<div>

    {{-- Header --}}
    @livewire('App.LayananPengaduan.Header', [], key('header'))

    <div class="m-4">

        @if (session('success'))
            <x-admin.components.alert.success text="{{ session('success') }}" />
        @endif

        @if (session('warning'))
            <x-admin.components.alert.warning text="{{ session('warning') }}" />
        @endif

        @if (session('error'))
            <x-admin.components.alert.error text="{{ session('error') }}" />
        @endif

    </div>

    {{-- Content --}}
    @livewire('App.LayananPengaduan.Content', [], key('content'))

</div>
