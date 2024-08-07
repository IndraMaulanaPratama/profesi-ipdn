{{-- The whole world belongs to you. --}}

<div>

    {{-- Header --}}
    @livewire('App.berita.kegiatan.header')


    {{-- Content --}}
    @livewire('App.berita.kegiatan.deatail', ['id' => $id])

</div>