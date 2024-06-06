<div>
    <table class="table table-responsive table-striped table-bordered">
        <thead>
            <tr>
                <th>Biaya Pendidikan Pppkp</th>
                <th>Satuan</th>
                <th>Tarif (Rupiah)</th>
            </tr>

        </thead>

        <tbody>

            @foreach ($data as $item)
                <tr>
                    <td>{{ $item['PENDIDIKAN_NAMA'] }}</td>
                    <td>{{ $item['PENDIDIKAN_SATUAN'] }}</td>
                    <td> {{ number_format($item['PENDIDIKAN_TARIF'], 0, '', '.') }} </td>
                </tr>
            @endforeach


        </tbody>

        <tfoot>
            <tr class="table-danger">
                <td>Jumlah</td>
                <td>Per mahasiswa</td>
                <td> Rp.{{ number_format($total, 2, ',', '.') }}</td>
            </tr>
        </tfoot>
    </table>
</div>
