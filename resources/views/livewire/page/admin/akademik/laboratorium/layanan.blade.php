{{-- If your happiness depends on money, you will never be happy with yourself. --}}
{{-- The Master doesn't talk, he acts. --}}
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


    {{-- Data Table --}}
    <div class="row mt-4">
        <x-admin.components.card.card size=12 title='Data Tabel' titleSpan='Layanan Laboratorium'>
            @livewire('admin.Akademik.Laboratorium.Layanan.Table')
        </x-admin.components.card.card>
    </div>


</div>
