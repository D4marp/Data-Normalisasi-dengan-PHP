<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Karyawan - 3NF Praktikum</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h5>Detail Karyawan</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <strong>ID Karyawan:</strong>
                            </div>
                            <div class="col-sm-9">
                                {{ $employee->id_karyawan }}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <strong>Nama Karyawan:</strong>
                            </div>
                            <div class="col-sm-9">
                                {{ $employee->nama_karyawan }}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <strong>ID Departemen:</strong>
                            </div>
                            <div class="col-sm-9">
                                {{ $employee->id_departemen }}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <strong>Nama Departemen:</strong>
                            </div>
                            <div class="col-sm-9">
                                {{ $employee->nama_departemen }}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <strong>Lokasi Departemen:</strong>
                            </div>
                            <div class="col-sm-9">
                                {{ $employee->lokasi_departemen }}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <strong>Gaji:</strong>
                            </div>
                            <div class="col-sm-9">
                                Rp {{ number_format($employee->gaji, 0, ',', '.') }}
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('employees.index') }}" class="btn btn-secondary">Kembali</a>
                        <a href="{{ route('employees.edit', $employee) }}" class="btn btn-warning">Edit</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>