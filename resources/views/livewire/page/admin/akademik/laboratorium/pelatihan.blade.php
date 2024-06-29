{{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
{{-- Nothing in the world is as soft and yielding as water. --}}

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
        @livewire('admin.Akademik.Laboratorium.Pelatihan.Table')
    </div>
    

    {{-- Modal tambih data sumber data --}}
    <x-admin.components.modal.modal id="formCreateSumber" size='xl'>
        @livewire('admin.Akademik.Laboratorium.Pelatihan.CreateSumber')
    </x-admin.components.modal.modal>


    {{-- Modal ngarobih data sumber data --}}
    <x-admin.components.modal.modal id="formUpdateSumber" size='xl'>
        @livewire('admin.Akademik.Laboratorium.Pelatihan.UpdateSumber')
    </x-admin.components.modal.modal>

</div>
