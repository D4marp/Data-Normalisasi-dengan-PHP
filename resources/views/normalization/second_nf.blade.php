<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2NF - Second Normal Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>2NF - Second Normal Form</h1>
        <p class="lead">Bentuk normal kedua memastikan bahwa setiap atribut non-key bergantung sepenuhnya pada primary key utuh, bukan hanya sebagian.</p>

        <h3>Aturan 2NF:</h3>
        <ul>
            <li>Harus memenuhi 1NF</li>
            <li>Semua atribut non-key harus bergantung sepenuhnya pada primary key</li>
            <li>Tidak ada dependensi parsial</li>
        </ul>

        <h3>Contoh:</h3>
        <h4>Tabel yang tidak memenuhi 2NF:</h4>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID Mahasiswa</th>
                    <th>ID Mata Kuliah</th>
                    <th>Nama Mahasiswa</th>
                    <th>Nama Mata Kuliah</th>
                    <th>Nilai</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>MK001</td>
                    <td>Ahmad</td>
                    <td>Matematika</td>
                    <td>A</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>MK002</td>
                    <td>Ahmad</td>
                    <td>Fisika</td>
                    <td>B</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>MK001</td>
                    <td>Budi</td>
                    <td>Matematika</td>
                    <td>A</td>
                </tr>
            </tbody>
        </table>
        <p><em>Nama Mahasiswa bergantung hanya pada ID Mahasiswa, bukan pada kombinasi primary key.</em></p>

        <h4>Normalisasi ke 2NF:</h4>
        <h5>Tabel Mahasiswa:</h5>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID Mahasiswa</th>
                    <th>Nama Mahasiswa</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>1</td><td>Ahmad</td></tr>
                <tr><td>2</td><td>Budi</td></tr>
            </tbody>
        </table>

        <h5>Tabel Mata Kuliah:</h5>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID Mata Kuliah</th>
                    <th>Nama Mata Kuliah</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>MK001</td><td>Matematika</td></tr>
                <tr><td>MK002</td><td>Fisika</td></tr>
            </tbody>
        </table>

        <h5>Tabel Nilai:</h5>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID Mahasiswa</th>
                    <th>ID Mata Kuliah</th>
                    <th>Nilai</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>1</td><td>MK001</td><td>A</td></tr>
                <tr><td>1</td><td>MK002</td><td>B</td></tr>
                <tr><td>2</td><td>MK001</td><td>A</td></tr>
            </tbody>
        </table>

        <h3>Praktikum 2NF</h3>
        <div class="alert alert-info">
            <strong>Latihan:</strong> Normalisasikan tabel berikut ke bentuk 2NF. Identifikasi primary key dan dependensi parsial.
        </div>

        <h4>Tabel Penjualan:</h4>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID Penjualan</th>
                    <th>ID Produk</th>
                    <th>Nama Produk</th>
                    <th>Harga Satuan</th>
                    <th>Jumlah</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>001</td>
                    <td>P001</td>
                    <td>Laptop</td>
                    <td>10000000</td>
                    <td>1</td>
                    <td>10000000</td>
                </tr>
                <tr>
                    <td>002</td>
                    <td>P001</td>
                    <td>Laptop</td>
                    <td>10000000</td>
                    <td>2</td>
                    <td>20000000</td>
                </tr>
                <tr>
                    <td>003</td>
                    <td>P002</td>
                    <td>Mouse</td>
                    <td>150000</td>
                    <td>3</td>
                    <td>450000</td>
                </tr>
            </tbody>
        </table>

        <button class="btn btn-warning mb-3" type="button" data-bs-toggle="collapse" data-bs-target="#solution2nf" aria-expanded="false">
            Lihat Solusi
        </button>

        <div class="collapse" id="solution2nf">
            <div class="card card-body">
                <h5>Jawaban:</h5>
                <p><strong>Primary Key:</strong> (ID Penjualan, ID Produk)</p>
                <p><strong>Dependensi Parsial:</strong> Nama Produk dan Harga Satuan bergantung hanya pada ID Produk, bukan pada kombinasi primary key.</p>

                <h6>Tabel Produk:</h6>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID Produk</th>
                            <th>Nama Produk</th>
                            <th>Harga Satuan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr><td>P001</td><td>Laptop</td><td>10000000</td></tr>
                        <tr><td>P002</td><td>Mouse</td><td>150000</td></tr>
                    </tbody>
                </table>

                <h6>Tabel Detail Penjualan:</h6>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID Penjualan</th>
                            <th>ID Produk</th>
                            <th>Jumlah</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr><td>001</td><td>P001</td><td>1</td><td>10000000</td></tr>
                        <tr><td>002</td><td>P001</td><td>2</td><td>20000000</td></tr>
                        <tr><td>003</td><td>P002</td><td>3</td><td>450000</td></tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="mt-4">
            <a href="{{ route('sales.index') }}" class="btn btn-success me-2">🛠️ Praktikum CRUD - Kelola Penjualan</a>
        </div>

        <a href="{{ route('normalization.firstNF') }}" class="btn btn-secondary">Kembali ke 1NF</a>
        <a href="{{ route('normalization.thirdNF') }}" class="btn btn-primary">Lanjut ke 3NF</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>