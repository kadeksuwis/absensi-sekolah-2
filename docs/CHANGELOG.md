# CHANGELOG.md

# ABSENSI-SEKOLAH-2

Dokumen ini digunakan untuk mencatat seluruh perubahan proyek.

Semua perubahan penting wajib dicatat.

---

# FORMAT PENULISAN

# VERSI x.x.x

Tanggal:
YYYY-MM-DD

Status:
Development

## Fitur Baru

* ...

---

## Perbaikan

* ...

---

## Perubahan Database

Tambah:

* ...

Ubah:

* ...

Hapus:

* ...

---

## Catatan

* ...

---

# VERSI 2.4.0

Tanggal:
2026-06-24

Status:
Development

## Fitur Baru

* RoleMiddleware
* DashboardController
* Dashboard Admin
* Dashboard Guru
* Akun Guru Test
* Redirect dashboard berdasarkan role

---

## Perubahan Database

Tidak ada

---

## Catatan

* Autentikasi selesai.
* Sistem role selesai.
* Admin berhasil login ke dashboard admin.
* Guru berhasil login ke dashboard guru.
* Role-based dashboard berhasil diterapkan.

---

# VERSI 2.3.0

Tanggal:
2026-06-23

Status:
Development

## Fitur Baru

* DashboardController
* RoleMiddleware
* Redirect dashboard berdasarkan role
* Dashboard Admin
* Dashboard Guru

---

## Perubahan Database

Tidak ada

---

## Catatan

* Fondasi role system berhasil dibuat.
* Admin berhasil diarahkan ke dashboard admin.

---

# VERSI 2.2.0

Tanggal:
2026-06-22

Status:
Development

## Fitur Baru

* Menambahkan role user
* Menambahkan status aktif user
* Membuat tabel teachers
* Membuat relasi User dan Teacher
* Membuat AdminSeeder
* Membuat akun admin default

---

## Perubahan Database

Tambah tabel:

* teachers

Tambah kolom pada users:

* role
* is_active

---

## Catatan

* Fondasi manajemen guru selesai dibuat.

---

# VERSI 2.1.0

Tanggal:
2026-06-22

Status:
Development

## Fitur Baru

* Install Laravel Breeze
* Login System
* Register System
* Authentication Middleware
* Session Authentication
* Forgot Password Feature

---

## Perubahan Database

Migration bawaan Laravel berhasil dijalankan:

* users
* cache
* jobs

---

## Catatan

* Laravel Breeze berhasil diinstall.
* Halaman Login berhasil dibuat.
* Halaman Register berhasil dibuat.
* Sistem Authentication dasar berhasil berjalan.
* Database berhasil terkoneksi.
* Migration awal berhasil dijalankan.

---

# VERSI 2.0.0

Tanggal:
2026-06-22

Status:
Planning

## Fitur Baru

* Perencanaan sistem Absensi-Sekolah-2
* Sistem absensi siswa berbasis QR Code
* Riwayat kelas siswa
* Monitoring BK
* Jadwal sekolah
* Hari Libur
* Activity Log

---

## Perubahan Database

Rancangan tabel:

* users
* teachers
* students
* academic_years
* school_classes
* student_class_histories
* attendances
* attendance_logs
* school_schedules
* schedule_overrides
* holidays
* activity_logs

---

## Catatan

* Tahap dokumentasi selesai.
* Belum ada coding Laravel.

---

# ATURAN CHANGELOG

WAJIB dicatat:

* Penambahan fitur
* Penghapusan fitur
* Perubahan database
* Perubahan role
* Perubahan flow sistem
* Perubahan dashboard
* Perbaikan bug

---

# DILARANG

* Mengubah database tanpa mencatat
* Menghapus fitur tanpa mencatat
* Mengubah flow sistem tanpa mencatat

---

# TUJUAN

* Riwayat proyek dapat dilacak.
* AI dapat memahami perubahan sebelumnya.
* Programmer tidak lupa perubahan yang sudah dilakukan.
* Mempermudah maintenance jangka panjang.
