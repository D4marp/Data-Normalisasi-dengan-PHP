<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Penjualan - 2NF Praktikum</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h5>Detail Penjualan</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <strong>ID Penjualan:</strong>
                            </div>
                            <div class="col-sm-9">
                                {{ $sale->id_penjualan }}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <strong>ID Produk:</strong>
                            </div>
                            <div class="col-sm-9">
                                {{ $sale->id_produk }}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <strong>Nama Produk:</strong>
                            </div>
                            <div class="col-sm-9">
                                {{ $sale->nama_produk }}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <strong>Harga Satuan:</strong>
                            </div>
                            <div class="col-sm-9">
                                Rp {{ number_format($sale->harga_satuan, 0, ',', '.') }}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <strong>Jumlah:</strong>
                            </div>
                            <div class="col-sm-9">
                                {{ $sale->jumlah }}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <strong>Total:</strong>
                            </div>
                            <div class="col-sm-9">
                                Rp {{ number_format($sale->total, 0, ',', '.') }}
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('sales.index') }}" class="btn btn-secondary">Kembali</a>
                        <a href="{{ route('sales.edit', $sale) }}" class="btn btn-warning">Edit</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>