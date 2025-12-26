<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Pemesanan Kursus - BCNF Praktikum</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1>Manajemen Pemesanan Kursus - BCNF Praktikum</h1>
            <a href="{{ route('enrollments.create') }}" class="btn btn-primary">Tambah Pemesanan</a>
        </div>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="card">
            <div class="card-header">
                <h5>Daftar Pemesanan Kursus</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID Mahasiswa</th>
                                <th>ID Kursus</th>
                                <th>Nama Kursus</th>
                                <th>Instruktur</th>
                                <th>Tanggal Pemesanan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($enrollments as $enrollment)
                                <tr>
                                    <td>{{ $enrollment->id_mahasiswa }}</td>
                                    <td>{{ $enrollment->id_kursus }}</td>
                                    <td>{{ $enrollment->nama_kursus }}</td>
                                    <td>{{ $enrollment->instruktur }}</td>
                                    <td>{{ $enrollment->tanggal_pemesanan }}</td>
                                    <td>
                                        <a href="{{ route('enrollments.show', $enrollment) }}" class="btn btn-sm btn-info">Lihat</a>
                                        <a href="{{ route('enrollments.edit', $enrollment) }}" class="btn btn-sm btn-warning">Edit</a>
                                        <form action="{{ route('enrollments.destroy', $enrollment) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus pemesanan ini?')">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center">Belum ada data pemesanan kursus</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="mt-4">
            <a href="{{ route('normalization.bcnf') }}" class="btn btn-secondary">Kembali ke Teori BCNF</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>