<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Fakultas</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="display-4">Edit Data Fakultas</h1>
        <a href="{{ route('faculties.index') }}" class="btn btn-primary">Kembali</a>
    </div>

    <form action="{{ route('faculties.update', $faculty->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="container">
            <h4 class="mt-4">Data Fakultas</h4>
            <div class="form-group">
                <label for="faculty_name">Nama Fakultas</label>
                <input type="text" name="faculty_name" value="{{ old('faculty_name', $faculty->faculty_name) }}" id="faculty_name" class="form-control @error('faculty_name') is-invalid @enderror">

                @error('faculty_name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="faculty_code" class="mb-2">Kode Fakultas</label>
                <input type="text" name="faculty_code" value="{{ old('faculty_code', $faculty->faculty_code) }}" id="faculty_code" class="form-control @error('faculty_code') is-invalid @enderror" required>

                @error('faculty_code')
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
