<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BCNF - Boyce-Codd Normal Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>BCNF - Boyce-Codd Normal Form</h1>
        <p class="lead">Boyce-Codd Normal Form adalah versi yang lebih ketat dari 3NF. Setiap determinan harus berupa kandidat key.</p>

        <h3>Aturan BCNF:</h3>
        <ul>
            <li>Harus memenuhi 3NF</li>
            <li>Untuk setiap dependensi fungsional X → Y, X harus berupa superkey</li>
            <li>Menangani kasus di mana 3NF masih memiliki anomali</li>
        </ul>

        <h3>Contoh:</h3>
        <h4>Tabel yang memenuhi 3NF tetapi tidak BCNF:</h4>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Dosen</th>
                    <th>Mata Kuliah</th>
                    <th>Buku</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Dr. Ahmad</td>
                    <td>Database</td>
                    <td>Database Systems</td>
                </tr>
                <tr>
                    <td>Dr. Ahmad</td>
                    <td>Algoritma</td>
                    <td>Introduction to Algorithms</td>
                </tr>
                <tr>
                    <td>Prof. Budi</td>
                    <td>Database</td>
                    <td>Database Systems</td>
                </tr>
            </tbody>
        </table>
        <p>Dependensi: Mata Kuliah → Buku, Dosen → Mata Kuliah</p>
        <p><em>Mata Kuliah menentukan Buku, tetapi Mata Kuliah bukan superkey.</em></p>

        <h4>Normalisasi ke BCNF:</h4>
        <h5>Tabel Mengajar:</h5>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Dosen</th>
                    <th>Mata Kuliah</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>Dr. Ahmad</td><td>Database</td></tr>
                <tr><td>Dr. Ahmad</td><td>Algoritma</td></tr>
                <tr><td>Prof. Budi</td><td>Database</td></tr>
            </tbody>
        </table>

        <h5>Tabel Buku Mata Kuliah:</h5>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Mata Kuliah</th>
                    <th>Buku</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>Database</td><td>Database Systems</td></tr>
                <tr><td>Algoritma</td><td>Introduction to Algorithms</td></tr>
            </tbody>
        </table>

        <h3>Praktikum BCNF</h3>
        <div class="alert alert-info">
            <strong>Latihan:</strong> Normalisasikan tabel berikut ke bentuk BCNF. Identifikasi apakah ada atribut yang menentukan atribut lain di luar primary key.
        </div>

        <h4>Tabel Pemesanan Kursus:</h4>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID Mahasiswa</th>
                    <th>ID Kursus</th>
                    <th>Nama Kursus</th>
                    <th>Instruktur</th>
                    <th>Tanggal Pemesanan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>M001</td>
                    <td>K001</td>
                    <td>Database Design</td>
                    <td>Dr. Ahmad</td>
                    <td>2025-01-15</td>
                </tr>
                <tr>
                    <td>M002</td>
                    <td>K001</td>
                    <td>Database Design</td>
                    <td>Dr. Ahmad</td>
                    <td>2025-01-16</td>
                </tr>
                <tr>
                    <td>M001</td>
                    <td>K002</td>
                    <td>Web Programming</td>
                    <td>Prof. Budi</td>
                    <td>2025-01-17</td>
                </tr>
            </tbody>
        </table>

        <button class="btn btn-warning mb-3" type="button" data-bs-toggle="collapse" data-bs-target="#solutionbcnf" aria-expanded="false">
            Lihat Solusi
        </button>

        <div class="collapse" id="solutionbcnf">
            <div class="card card-body">
                <h5>Jawaban:</h5>
                <p><strong>Primary Key:</strong> (ID Mahasiswa, ID Kursus)</p>
                <p><strong>Masalah BCNF:</strong> ID Kursus → Nama Kursus, Instruktur. ID Kursus menentukan Nama Kursus dan Instruktur, tetapi ID Kursus bukan superkey.</p>

                <h6>Tabel Pemesanan:</h6>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID Mahasiswa</th>
                            <th>ID Kursus</th>
                            <th>Tanggal Pemesanan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr><td>M001</td><td>K001</td><td>2025-01-15</td></tr>
                        <tr><td>M002</td><td>K001</td><td>2025-01-16</td></tr>
                        <tr><td>M001</td><td>K002</td><td>2025-01-17</td></tr>
                    </tbody>
                </table>

                <h6>Tabel Kursus:</h6>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID Kursus</th>
                            <th>Nama Kursus</th>
                            <th>Instruktur</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr><td>K001</td><td>Database Design</td><td>Dr. Ahmad</td></tr>
                        <tr><td>K002</td><td>Web Programming</td><td>Prof. Budi</td></tr>
                    </tbody>
                </table>
            </div>
        </div>

        <h3>Manfaat Normalisasi:</h3>
        <ul>
            <li>Mengurangi redundansi data</li>
            <li>Meningkatkan integritas data</li>
            <li>Memudahkan maintenance database</li>
            <li>Mengurangi anomali update, insert, dan delete</li>
        </ul>

        <div class="mt-4">
            <a href="{{ route('courses.index') }}" class="btn btn-success me-2">🛠️ Praktikum CRUD - Kelola Kursus</a>
            <a href="{{ route('students.index') }}" class="btn btn-success me-2">🛠️ Praktikum CRUD - Kelola Mahasiswa</a>
            <a href="{{ route('enrollments.index') }}" class="btn btn-success">🛠️ Praktikum CRUD - Kelola Pemesanan</a>
        </div>

        <a href="{{ route('normalization.thirdNF') }}" class="btn btn-secondary">Kembali ke 3NF</a>
        <a href="{{ route('normalization.index') }}" class="btn btn-primary">Kembali ke Menu Utama</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>