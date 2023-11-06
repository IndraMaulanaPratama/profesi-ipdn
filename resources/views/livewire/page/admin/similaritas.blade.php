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

    {{-- Data Table Pivot Menu --}}
    @livewire('admin.similaritas.table', [], key('table'))


    @livewire('admin.similaritas.approve', [], key('formApprove'))
    @livewire('admin.similaritas.reject', [], key('formReject'))

</div>
