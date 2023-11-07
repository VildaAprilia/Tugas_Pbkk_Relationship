
<a href="{{ route('faculties.index') }}">Data Fakultas</a>
<h1>Data Fakultas</h1>

<table>
    <tr>
        <td>Nama Fakultas</td>
        <td>: {{ $faculty->faculty_name }}</td>
    </tr>
    <tr>
        <td>Kode Prodi</td>
        <td>: {{ $faculty->faculty_code }}</td>
    </tr>
</table>
