<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3NF - Third Normal Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>3NF - Third Normal Form</h1>
        <p class="lead">Bentuk normal ketiga memastikan bahwa tidak ada dependensi transitif antara atribut non-key.</p>

        <h3>Aturan 3NF:</h3>
        <ul>
            <li>Harus memenuhi 2NF</li>
            <li>Tidak ada atribut non-key yang bergantung pada atribut non-key lainnya</li>
            <li>Semua atribut non-key harus bergantung langsung pada primary key</li>
        </ul>

        <h3>Contoh:</h3>
        <h4>Tabel yang tidak memenuhi 3NF:</h4>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID Mahasiswa</th>
                    <th>Nama Mahasiswa</th>
                    <th>ID Jurusan</th>
                    <th>Nama Jurusan</th>
                    <th>Alamat Jurusan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Ahmad</td>
                    <td>JUR001</td>
                    <td>Teknik Informatika</td>
                    <td>Jl. Sudirman No. 1</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Budi</td>
                    <td>JUR001</td>
                    <td>Teknik Informatika</td>
                    <td>Jl. Sudirman No. 1</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Cici</td>
                    <td>JUR002</td>
                    <td>Sistem Informasi</td>
                    <td>Jl. Thamrin No. 2</td>
                </tr>
            </tbody>
        </table>
        <p><em>Nama Jurusan dan Alamat Jurusan bergantung pada ID Jurusan, bukan pada ID Mahasiswa (dependensi transitif).</em></p>

        <h4>Normalisasi ke 3NF:</h4>
        <h5>Tabel Mahasiswa:</h5>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID Mahasiswa</th>
                    <th>Nama Mahasiswa</th>
                    <th>ID Jurusan</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>1</td><td>Ahmad</td><td>JUR001</td></tr>
                <tr><td>2</td><td>Budi</td><td>JUR001</td></tr>
                <tr><td>3</td><td>Cici</td><td>JUR002</td></tr>
            </tbody>
        </table>

        <h5>Tabel Jurusan:</h5>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID Jurusan</th>
                    <th>Nama Jurusan</th>
                    <th>Alamat Jurusan</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>JUR001</td><td>Teknik Informatika</td><td>Jl. Sudirman No. 1</td></tr>
                <tr><td>JUR002</td><td>Sistem Informasi</td><td>Jl. Thamrin No. 2</td></tr>
            </tbody>
        </table>

        <h3>Praktikum 3NF</h3>
        <div class="alert alert-info">
            <strong>Latihan:</strong> Normalisasikan tabel berikut ke bentuk 3NF. Identifikasi dependensi transitif.
        </div>

        <h4>Tabel Karyawan:</h4>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID Karyawan</th>
                    <th>Nama Karyawan</th>
                    <th>ID Departemen</th>
                    <th>Nama Departemen</th>
                    <th>Lokasi Departemen</th>
                    <th>Gaji</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>K001</td>
                    <td>Ahmad</td>
                    <td>D001</td>
                    <td>IT</td>
                    <td>Jakarta</td>
                    <td>8000000</td>
                </tr>
                <tr>
                    <td>K002</td>
                    <td>Budi</td>
                    <td>D001</td>
                    <td>IT</td>
                    <td>Jakarta</td>
                    <td>7500000</td>
                </tr>
                <tr>
                    <td>K003</td>
                    <td>Cici</td>
                    <td>D002</td>
                    <td>HR</td>
                    <td>Bandung</td>
                    <td>7000000</td>
                </tr>
            </tbody>
        </table>

        <button class="btn btn-warning mb-3" type="button" data-bs-toggle="collapse" data-bs-target="#solution3nf" aria-expanded="false">
            Lihat Solusi
        </button>

        <div class="collapse" id="solution3nf">
            <div class="card card-body">
                <h5>Jawaban:</h5>
                <p><strong>Dependensi Transitif:</strong> Nama Departemen dan Lokasi Departemen bergantung pada ID Departemen, bukan langsung pada ID Karyawan.</p>

                <h6>Tabel Karyawan:</h6>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID Karyawan</th>
                            <th>Nama Karyawan</th>
                            <th>ID Departemen</th>
                            <th>Gaji</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr><td>K001</td><td>Ahmad</td><td>D001</td><td>8000000</td></tr>
                        <tr><td>K002</td><td>Budi</td><td>D001</td><td>7500000</td></tr>
                        <tr><td>K003</td><td>Cici</td><td>D002</td><td>7000000</td></tr>
                    </tbody>
                </table>

                <h6>Tabel Departemen:</h6>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID Departemen</th>
                            <th>Nama Departemen</th>
                            <th>Lokasi Departemen</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr><td>D001</td><td>IT</td><td>Jakarta</td></tr>
                        <tr><td>D002</td><td>HR</td><td>Bandung</td></tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="mt-4">
            <a href="{{ route('employees.index') }}" class="btn btn-success me-2">🛠️ Praktikum CRUD - Kelola Karyawan</a>
            <a href="{{ route('departments.index') }}" class="btn btn-success">🛠️ Praktikum CRUD - Kelola Departemen</a>
        </div>

        <a href="{{ route('normalization.secondNF') }}" class="btn btn-secondary">Kembali ke 2NF</a>
        <a href="{{ route('normalization.bcnf') }}" class="btn btn-primary">Lanjut ke BCNF</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>