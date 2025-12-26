<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modul Pembelajaran Normalisasi Database</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Modul Pembelajaran Normalisasi Database</h1>
        <p class="lead text-center">Pelajari konsep normalisasi database dari dasar hingga tingkat lanjut dengan teori dan praktikum.</p>

        <div class="row">
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">1NF - First Normal Form</h5>
                        <p class="card-text">Pelajari aturan dasar normalisasi: menghilangkan pengulangan nilai dalam kolom. Termasuk praktikum.</p>
                        <a href="{{ route('normalization.firstNF') }}" class="btn btn-primary">Pelajari</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">2NF - Second Normal Form</h5>
                        <p class="card-text">Memastikan semua atribut non-key bergantung sepenuhnya pada primary key. Termasuk praktikum.</p>
                        <a href="{{ route('normalization.secondNF') }}" class="btn btn-primary">Pelajari</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">3NF - Third Normal Form</h5>
                        <p class="card-text">Menghilangkan dependensi transitif antara atribut non-key. Termasuk praktikum.</p>
                        <a href="{{ route('normalization.thirdNF') }}" class="btn btn-primary">Pelajari</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">BCNF - Boyce-Codd Normal Form</h5>
                        <p class="card-text">Bentuk normal yang lebih ketat dari 3NF untuk kasus khusus. Termasuk praktikum.</p>
                        <a href="{{ route('normalization.bcnf') }}" class="btn btn-primary">Pelajari</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>