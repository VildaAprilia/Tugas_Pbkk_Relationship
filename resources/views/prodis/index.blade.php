<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Prodi</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="display-4 text-center">Daftar Prodi</h1>
        <a href="{{ route('faculties.index') }}" class="btn btn-primary">Data Fakultas</a><br><br>
        <a href="{{ route('prodis.create') }}" class="btn btn-success">+Tambah</a>
        @if (session()->has('pesan'))
            <div class="alert alert-success mt-3" role="alert">
                {{ session()->get('pesan') }}
            </div>
            <br>
        @endif
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h6 class="m-0 font-weight-bold">DataTables Example</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Prodi</th>
                                <th>Kode Prodi</th>
                                <th>Fakultas</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i=1; ?>
                            @foreach ($prodis as $prodi)
                                <tr>
                                    <th>{{ $i }}</th>
                                    <td><a href="{{ route('prodis.show', $prodi->id) }}" style="text-decoration: none; color:rgb(216, 0, 0);">{{ $prodi->prodi_name }}</a></td>
                                    <td>{{ $prodi->prodi_code }}</td>
                                    <td>{{ $prodi->faculty->faculty_name }}</td>
                                    <td>
                                        <a href="{{ route('prodis.edit', $prodi->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                        <form action="{{ route('prodis.destroy', $prodi->id) }}" method="post" style="display:inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Hapus data prodi {{ $prodi->prodi_name }}?')">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                                <?php $i++ ?>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
