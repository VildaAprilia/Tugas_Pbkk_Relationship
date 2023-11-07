<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="subheader">Tambah Prodi</h1>
        <a href="{{ route('prodis.index') }}" class="btn btn-primary btn-sm mb-3">Kembali</a>

        <form action="{{ route('prodis.store') }}" method="POST">
            @csrf

            <h4 class="semibold">Data Prodi</h4>

            <div class="form-group">
                <label for="prodi_name">Nama Prodi</label>
                <input type="text" class="form-control" name="prodi_name" value="{{ old('prodi_name') }}" id="prodi_name">

                @error('prodi_name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="prodi_code">Kode Prodi</label>
                <input type="text" class="form-control" name="prodi_code" value="{{ old('prodi_code') }}" id="prodi_code">

                @error('prodi_code')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="faculty">Fakultas</label>
                <select class="form-control" name="faculty_id" id="faculty">
                    @foreach ($faculties as $faculty)
                        <option value="{{ $faculty->id }}">
                            {{ $faculty->faculty_name }}
                        </option>
                    @endforeach
                </select>

                @error('faculty_id') <!-- Updated the field name to match the select element -->
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Tambah">
            </div>
        </form>
    </div>

    <!-- Include Bootstrap JavaScript (optional) -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
