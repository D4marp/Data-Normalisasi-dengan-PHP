<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa - BCNF Praktikum</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h5>Detail Mahasiswa</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <strong>ID Mahasiswa:</strong>
                            </div>
                            <div class="col-sm-9">
                                {{ $student->id_mahasiswa }}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <strong>Nama Mahasiswa:</strong>
                            </div>
                            <div class="col-sm-9">
                                {{ $student->nama_mahasiswa }}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <strong>Dibuat:</strong>
                            </div>
                            <div class="col-sm-9">
                                {{ $student->created_at->format('d M Y H:i') }}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <strong>Diupdate:</strong>
                            </div>
                            <div class="col-sm-9">
                                {{ $student->updated_at->format('d M Y H:i') }}
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('students.index') }}" class="btn btn-secondary">Kembali</a>
                        <a href="{{ route('students.edit', $student) }}" class="btn btn-warning">Edit</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>