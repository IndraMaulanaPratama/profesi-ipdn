{{-- Care about people's approval and you will be their prisoner. --}}

@push('style')
    <script src="https://code.jquery.com/jquery-3.7.1.slim.js"
        integrity="sha256-UgvvN8vBkgO0luPSUl2s8TIlOSYRoGFAX4jlCIm9Adc=" crossorigin="anonymous"></script>

    <script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
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


    {{-- Form Tambih Data --}}
    <div class="row mt-4">
        <x-admin.components.card.card size=12 title='Form Tambah Data' titleSpan='Layanan Laboratorium'>
            @livewire('admin.Akademik.Laboratorium.Layanan.Create')
        </x-admin.components.card.card>
    </div>


</div>