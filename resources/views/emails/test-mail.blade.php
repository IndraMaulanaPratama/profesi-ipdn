<!-- resources/views/emails/reminder.blade.php -->

<h1>Data Pengaduan</h1>

<table class="table table-responsive">
    <tr>
        <td>Id Pengaduan</td>
        <td>:</td>
        <td> {{ $pengaduan['id_pengaduan'] }} </td>
    </tr>
    <tr>
        <td>Email</td>
        <td>:</td>
        <td> {{ $pengaduan['email'] }} </td>
    </tr>
    <tr>
        <td>Nama</td>
        <td>:</td>
        <td>{{ $pengaduan['nama'] }}</td>
    </tr>
    <tr>
        <td>Isi Pengaduan</td>
        <td>:</td>
        <td> {{ $pengaduan['pengaduan']}} </td>
    </tr>
</table>
