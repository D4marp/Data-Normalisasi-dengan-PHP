# Data Normalisasi dengan PHP - Laravel

Aplikasi web pembelajaran normalisasi database menggunakan framework Laravel. Aplikasi ini menyediakan materi teori dan praktikum langsung untuk memahami konsep normalisasi database dari 1NF hingga BCNF.

## 📋 Fitur Utama

### 🎓 Materi Teori
- **1NF (First Normal Form)** - Eliminasi pengulangan data
- **2NF (Second Normal Form)** - Dependensi fungsional penuh
- **3NF (Third Normal Form)** - Dependensi transitif
- **BCNF (Boyce-Codd Normal Form)** - Bentuk normal paling ketat

### 🛠️ Praktikum Interaktif
- **1NF Praktikum**: Manajemen Produk dengan operasi CRUD
- **2NF Praktikum**: Sistem Penjualan dengan relasi produk
- **3NF Praktikum**: Manajemen Karyawan dan Departemen
- **BCNF Praktikum**: Sistem Pendaftaran Kursus (Mahasiswa, Kursus, Pendaftaran)

### 🛡️ Keamanan & Validasi
- Mass Assignment Protection
- Form validation dengan error handling
- CSRF protection
- Input sanitization

## 🚀 Persyaratan Sistem

- **PHP**: >= 8.1
- **Composer**: >= 2.0
- **Node.js**: >= 16.0 (untuk asset compilation)
- **Database**: SQLite (default), MySQL, PostgreSQL
- **Web Server**: Apache/Nginx dengan mod_rewrite

## 📦 Instalasi

### 1. Clone Repository
```bash
git clone https://github.com/D4marp/Data-Normalisasi-dengan-PHP.git
cd Data-Normalisasi-dengan-PHP
```

### 2. Install Dependencies PHP
```bash
composer install
```

### 3. Install Dependencies Node.js (Opsional)
```bash
npm install
npm run build
```

### 4. Konfigurasi Environment
```bash
cp .env.example .env
php artisan key:generate
```

### 5. Setup Database
```bash
# Untuk SQLite (default)
touch database/database.sqlite

# Jalankan migrasi
php artisan migrate

# (Opsional) Seed data contoh
php artisan db:seed
```

### 6. Jalankan Aplikasi
```bash
php artisan serve
```

Aplikasi akan berjalan di: `http://localhost:8000`

## 📁 Struktur Proyek

```
├── app/
│   ├── Http/Controllers/          # Controller untuk CRUD operations
│   │   ├── ProductController.php
│   │   ├── SaleController.php
│   │   ├── EmployeeController.php
│   │   ├── DepartmentController.php
│   │   ├── CourseController.php
│   │   ├── StudentController.php
│   │   └── EnrollmentController.php
│   └── Models/                    # Eloquent Models
│       ├── Product.php
│       ├── Sale.php
│       ├── Employee.php
│       ├── Department.php
│       ├── Course.php
│       ├── Student.php
│       └── Enrollment.php
├── database/
│   ├── migrations/               # Database migrations
│   └── seeders/                  # Database seeders
├── resources/
│   ├── views/
│   │   ├── normalization/        # Halaman teori normalisasi
│   │   └── crud/                 # Halaman CRUD praktikum
│   └── routes/
│       └── web.php              # Route definitions
└── public/                      # Static assets
```

## 🎯 Cara Penggunaan

1. **Akses Halaman Utama**: Kunjungi `http://localhost:8000`
2. **Pelajari Teori**: Klik menu navigasi untuk mempelajari konsep normalisasi
3. **Lakukan Praktikum**: Gunakan tombol "Praktikum" untuk mencoba operasi CRUD
4. **Kelola Data**: Tambah, edit, hapus data untuk memahami dampak normalisasi

### Contoh Operasi CRUD

#### 1NF - Manajemen Produk
- Tambah produk baru
- Edit informasi produk
- Hapus produk
- Lihat daftar produk

#### 2NF - Sistem Penjualan
- Kelola data penjualan
- Relasi dengan tabel produk
- Hitung total otomatis

#### 3NF - Manajemen Karyawan
- Data karyawan dan departemen
- Relasi many-to-one
- Eliminasi dependensi transitif

#### BCNF - Sistem Kursus
- Mahasiswa, Kursus, Pendaftaran
- Relasi many-to-many
- Bentuk normal tertinggi

## 🔧 Konfigurasi Database

### SQLite (Default)
```env
DB_CONNECTION=sqlite
DB_DATABASE=/absolute/path/to/database/database.sqlite
```

### MySQL
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=normalisasi_db
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

### PostgreSQL
```env
DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=normalisasi_db
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

## 🧪 Testing

```bash
# Jalankan semua test
php artisan test

# Jalankan test spesifik
php artisan test --filter=NamaTestClass
```

## 📚 Teknologi yang Digunakan

- **Framework**: Laravel 12.x
- **Database**: SQLite (default), MySQL, PostgreSQL
- **Frontend**: Bootstrap 5.3.0, Blade Templates
- **Authentication**: Laravel Sanctum (opsional)
- **Validation**: Laravel Request Validation
- **ORM**: Eloquent ORM

## 🤝 Kontribusi

1. Fork repository
2. Buat branch fitur (`git checkout -b feature/AmazingFeature`)
3. Commit perubahan (`git commit -m 'Add some AmazingFeature'`)
4. Push ke branch (`git push origin feature/AmazingFeature`)
5. Buat Pull Request

## 📝 Lisensi

Proyek ini menggunakan lisensi MIT - lihat file [LICENSE](LICENSE) untuk detail lebih lanjut.

## 👨‍💻 Pengembang

- **Nama**: [Nama Anda]
- **Email**: [email@example.com]
- **GitHub**: [@D4marp](https://github.com/D4marp)

## 🙏 Acknowledgments

- [Laravel Framework](https://laravel.com/)
- [Bootstrap](https://getbootstrap.com/)
- [Font Awesome](https://fontawesome.com/)
- Komunitas PHP Indonesia

---

**Catatan**: Aplikasi ini dibuat untuk tujuan pembelajaran normalisasi database. Pastikan untuk memahami konsep teori sebelum menggunakan fitur praktikum.
