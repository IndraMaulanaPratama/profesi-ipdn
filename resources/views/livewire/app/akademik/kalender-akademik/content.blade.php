{{-- Close your eyes. Count to one. That is how long forever feels. --}}


<div class="container py-5">

    {{-- Kurikulum Semester 1 --}}
    <div class="py-4 mx-4">
        {{-- Header Semester 1 --}}
        <div class="py-4" style="font-family: 'Roboto Slab'; font-size: 25px; font-weight: bold">
            Semester 1
        </div>

        {{-- Table Semester 1 --}}
        <div class="table-responsive mb-4">
            <table class="table table-hover table-stripped">
                <tr>
                    <th colspan="3" style="width: 30%; text-align: center;">Tanggal</th>
                    <th style="padding-left: 2%;">Kegiatan</th>
                </tr>

                @foreach ($semester1 as $item)
                                @php
                                    $tanggal = explode("/", $item['KALENDER_TANGGAL']);
                                @endphp

                                <tr>
                                    <td>
                                        {{ \Carbon\Carbon::createFromDate($tanggal[0])->locale('id')->isoFormat('D MMMM YYYY') }}
                                    </td>

                                    <td>-</td>

                                    <td>
                                        {{ \Carbon\Carbon::createFromDate($tanggal[1])->locale('id')->isoFormat('D MMMM YYYY') }}
                                    </td>


                                    <td style="padding-left: 2%;"> {{ $item['KALENDER_KEGIATAN'] }} </td>
                                </tr>
                @endforeach

            </table>
        </div>


        {{-- Header Semester 2 --}}
        <div class="py-4 mx-4 mt-4" style="font-family: 'Roboto Slab'; font-size: 25px; font-weight: bold">
            Semester 2
        </div>

        {{-- Table Semester 2 --}}
        <div class="table-responsive ">
            <table class="table table-hover table-stripped">
                <tr>
                    <th colspan="3" style="width: 30%; text-align: center;">Tanggal</th>
                    <th style="padding-left: 2%;">Kegiatan</th>
                </tr>

                @foreach ($semester2 as $item)
                                @php
                                    $tanggal = explode("/", $item['KALENDER_TANGGAL']);
                                @endphp

                                <tr>
                                    <td>
                                        {{ \Carbon\Carbon::createFromDate($tanggal[0])->locale('id')->isoFormat('D MMMM YYYY') }}
                                    </td>

                                    <td>-</td>

                                    <td>
                                        {{ \Carbon\Carbon::createFromDate($tanggal[1])->locale('id')->isoFormat('D MMMM YYYY') }}
                                    </td>


                                    <td style="padding-left: 2%;"> {{ $item['KALENDER_KEGIATAN'] }} </td>
                                </tr>
                @endforeach

            </table>
        </div>

    </div>
</div>