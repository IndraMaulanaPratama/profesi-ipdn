{{-- Success is as dangerous as failure. --}}

<style>
    a {
        text-decoration: none;
        color: black
    }

    a:hover {
        color: orange;
    }

    a:active {
        color: navy;
    }

    .paragraf {
        text-indent: 1cm;
        text-align: justify;
    }

    .paragraf-etik {
        font-size: 14px;
        text-indent: 0.5cm;
        text-align: justify;
    }
</style>

<div>

    {{-- Header --}}
    @livewire('App.Profile.Deskripsi.Header')


    {{-- Content --}}
    @livewire('App.Profile.Deskripsi.Content')

</div>