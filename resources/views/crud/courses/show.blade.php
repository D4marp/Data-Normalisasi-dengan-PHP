<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Kursus - BCNF Praktikum</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h5>Detail Kursus</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <strong>ID Kursus:</strong>
                            </div>
                            <div class="col-sm-9">
                                {{ $course->id_kursus }}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <strong>Nama Kursus:</strong>
                            </div>
                            <div class="col-sm-9">
                                {{ $course->nama_kursus }}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <strong>Instruktur:</strong>
                            </div>
                            <div class="col-sm-9">
                                {{ $course->instruktur }}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <strong>Dibuat:</strong>
                            </div>
                            <div class="col-sm-9">
                                {{ $course->created_at->format('d M Y H:i') }}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <strong>Diupdate:</strong>
                            </div>
                            <div class="col-sm-9">
                                {{ $course->updated_at->format('d M Y H:i') }}
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('courses.index') }}" class="btn btn-secondary">Kembali</a>
                        <a href="{{ route('courses.edit', $course) }}" class="btn btn-warning">Edit</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>