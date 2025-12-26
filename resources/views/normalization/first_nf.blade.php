<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1NF - First Normal Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>1NF - First Normal Form</h1>
        <p class="lead">Bentuk normal pertama memastikan bahwa setiap kolom berisi nilai atomik (tidak dapat dibagi lagi).</p>

        <h3>Aturan 1NF:</h3>
        <ul>
            <li>Setiap kolom harus berisi nilai tunggal (atomik)</li>
            <li>Tidak ada pengulangan grup nilai</li>
            <li>Setiap record harus unik</li>
        </ul>

        <h3>Contoh:</h3>
        <h4>Tabel yang tidak memenuhi 1NF:</h4>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID Mahasiswa</th>
                    <th>Nama</th>
                    <th>Mata Kuliah</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Ahmad</td>
                    <td>Matematika, Fisika, Kimia</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Budi</td>
                    <td>Biologi, Kimia</td>
                </tr>
            </tbody>
        </table>

        <h4>Tabel yang memenuhi 1NF:</h4>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID Mahasiswa</th>
                    <th>Nama</th>
                    <th>Mata Kuliah</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Ahmad</td>
                    <td>Matematika</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Ahmad</td>
                    <td>Fisika</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Ahmad</td>
                    <td>Kimia</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Budi</td>
                    <td>Biologi</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Budi</td>
                    <td>Kimia</td>
                </tr>
            </tbody>
        </table>

        <h3>Praktikum 1NF</h3>
        <div class="alert alert-info">
            <strong>Latihan:</strong> Normalisasikan tabel berikut ke bentuk 1NF.
        </div>

        <h4>Tabel yang belum dinormalisasi:</h4>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID Produk</th>
                    <th>Nama Produk</th>
                    <th>Kategori</th>
                    <th>Harga</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>P001</td>
                    <td>Laptop Gaming</td>
                    <td>Elektronik, Gaming</td>
                    <td>15000000</td>
                </tr>
                <tr>
                    <td>P002</td>
                    <td>Buku Programming</td>
                    <td>Buku, Pendidikan, Programming</td>
                    <td>250000</td>
                </tr>
                <tr>
                    <td>P003</td>
                    <td>Mouse Wireless</td>
                    <td>Elektronik, Komputer</td>
                    <td>150000</td>
                </tr>
            </tbody>
        </table>

        <button class="btn btn-warning mb-3" type="button" data-bs-toggle="collapse" data-bs-target="#solution1nf" aria-expanded="false">
            Lihat Solusi
        </button>

        <div class="collapse" id="solution1nf">
            <div class="card card-body">
                <h5>Jawaban:</h5>
                <p>Tabel di atas melanggar 1NF karena kolom "Kategori" berisi multiple values. Solusinya:</p>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID Produk</th>
                            <th>Nama Produk</th>
                            <th>Kategori</th>
                            <th>Harga</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>P001</td>
                            <td>Laptop Gaming</td>
                            <td>Elektronik</td>
                            <td>15000000</td>
                        </tr>
                        <tr>
                            <td>P001</td>
                            <td>Laptop Gaming</td>
                            <td>Gaming</td>
                            <td>15000000</td>
                        </tr>
                        <tr>
                            <td>P002</td>
                            <td>Buku Programming</td>
                            <td>Buku</td>
                            <td>250000</td>
                        </tr>
                        <tr>
                            <td>P002</td>
                            <td>Buku Programming</td>
                            <td>Pendidikan</td>
                            <td>250000</td>
                        </tr>
                        <tr>
                            <td>P002</td>
                            <td>Buku Programming</td>
                            <td>Programming</td>
                            <td>250000</td>
                        </tr>
                        <tr>
                            <td>P003</td>
                            <td>Mouse Wireless</td>
                            <td>Elektronik</td>
                            <td>150000</td>
                        </tr>
                        <tr>
                            <td>P003</td>
                            <td>Mouse Wireless</td>
                            <td>Komputer</td>
                            <td>150000</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="mt-4">
            <a href="{{ route('products.index') }}" class="btn btn-success me-2">🛠️ Praktikum CRUD - Kelola Produk</a>
        </div>

        <a href="{{ route('normalization.index') }}" class="btn btn-secondary">Kembali ke Menu</a>
        <a href="{{ route('normalization.secondNF') }}" class="btn btn-primary">Lanjut ke 2NF</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>