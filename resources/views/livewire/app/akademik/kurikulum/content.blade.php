{{-- If your happiness depends on money, you will never be happy with yourself. --}}

<style>
    table {}
</style>

<div class="container py-5">

    {{-- Kurikulum Semester 1 --}}
    <div class="py-4">
        {{-- Header Semester 1 --}}
        <div class="py-4" style="font-family: 'Roboto Slab'; font-size: 25px; font-weight: bold">
            Semester 1
        </div>


        {{-- Table Semester 1 --}}
        <div class="table-responsive ">
            <table class="table table-hover">
                <tr>
                    <th style="width: 5cm">KODE</th>
                    <th>MATA KULIAH</th>
                    <th style="width: 2.5cm">SKS</th>
                </tr>

                @foreach ($semester1 as $item)
                    <tr>
                        <td> {{ $item['KURIKULUM_KODE'] }} </td>
                        <td> {{ $item['KURIKULUM_MATAKULIAH'] }} </td>
                        <td> {{ $item['KURIKULUM_SKS'] }} </td>
                    </tr>
                @endforeach

            </table>
        </div>

    </div>





    {{-- Kurikulum Semester 2 --}}
    <div class="py-2">
        {{-- Header Semester 2 --}}
        <div class="py-4" style="font-family: 'Roboto Slab'; font-size: 25px; font-weight: bold">
            Semester 2
        </div>


        {{-- Table Semester 2 --}}
        <div class="table-responsive">
            <table class="table table-hover">
                <tr>
                    <th style="width: 5cm">KODE</th>
                    <th>MATA KULIAH</th>
                    <th style="width: 2.5cm">SKS</th>
                </tr>

                @foreach ($semester2 as $item)
                    <tr>
                        <td> {{ $item['KURIKULUM_KODE'] }} </td>
                        <td> {{ $item['KURIKULUM_MATAKULIAH'] }} </td>
                        <td> {{ $item['KURIKULUM_SKS'] }} </td>
                    </tr>
                @endforeach

            </table>
        </div>

    </div>
</div>
