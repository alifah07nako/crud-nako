<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Siswa</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f0f4f8;
        }
        .card {
            border: none;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card p-4">
                    <h3 class="text-primary fw-bold mb-4">Tambah Siswa Baru</h3>
                    
                    <form action="{{ route('siswa.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Nama:</label>
                            <input type="text" name="nama" class="form-control" required placeholder="Masukkan nama lengkap">
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label">Kelas:</label>
                            <input type="text" name="kelas" class="form-control" required placeholder="Contoh: 10 RPL 1">
                        </div>
                        
                        <div class="d-flex justify-content-between mt-4">
                            <a href="{{ route('siswa.index') }}" class="btn btn-outline-secondary">Kembali</a>
                            <button type="submit" class="btn btn-primary">Simpan Data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>