<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Prodi</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="display-4">Edit Data Prodi</h1>
        <a href="{{ route('prodis.index') }}" class="btn btn-primary">Kembali</a>
    </div>

    <form action="{{ route('prodis.update', $prodi->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="container">
            <h4 class="mt-4">Data Prodi</h4>
            <div class="form-group">
                <label for="prodi_name">Nama Prodi</label>
                <input type="text" name="prodi_name" value="{{ old('prodi_name', $prodi->prodi_name) }}" id="prodi_name" class="form-control @error('prodi_name') is-invalid @enderror">

                @error('prodi_name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="prodi_code" class="mb-2">Kode Prodi</label>
                <input type="text" name="prodi_code" value="{{ old('prodi_code', $prodi->prodi_code) }}" id="prodi_code" class="form-control @error('prodi_code') is-invalid @enderror" required>

                @error('prodi_code')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="faculty">Fakultas</label>
                <select name="faculty_id" id="" class="form-control">
                    @foreach ($faculties as $faculty)
                        <option value="{{ $faculty->id }}" @if (old('faculty_id', $prodi->faculty_id) == $faculty->id) selected @endif>
                            {{ $faculty->faculty_name }}
                        </option>
                    @endforeach
                </select>

                @error('faculty_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <input type="submit" value="Simpan" class="btn btn-primary">
            </div>
        </div>
    </form>
    </div>
</body>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</html>
