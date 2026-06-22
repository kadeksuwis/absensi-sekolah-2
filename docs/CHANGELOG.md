# CHANGELOG.md

# ABSENSI-SEKOLAH-2

Dokumen ini digunakan untuk mencatat seluruh perubahan proyek.

Semua perubahan penting wajib dicatat.

---

# FORMAT PENULISAN

Tanggal:
YYYY-MM-DD

Versi:
x.x.x

Kategori:

* Fitur Baru
* Perbaikan
* Perubahan Database
* Catatan

---

# VERSI 2.2.0

Tanggal:
2026-06-22

Status:
Development

## Fitur Baru

- Menambahkan role user
- Menambahkan status aktif user
- Membuat tabel teachers
- Membuat relasi User dan Teacher
- Membuat Admin Seeder
- Membuat akun admin default

---

## Perubahan Database

Tambah tabel:

- teachers

Tambah kolom pada users:

- role
- is_active

---

## Catatan

Fondasi manajemen guru selesai dibuat.


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
* Hari libur
* Activity Log

---

## Perubahan Database

Membuat rancangan tabel:

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

# TEMPLATE VERSI BERIKUTNYA

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

# ATURAN CHANGELOG

WAJIB dicatat:

✓ Penambahan fitur

✓ Penghapusan fitur

✓ Perubahan database

✓ Perubahan role

✓ Perubahan flow sistem

✓ Perubahan dashboard

✓ Perbaikan bug

---

# DILARANG

✗ Mengubah database tanpa mencatat

✗ Menghapus fitur tanpa mencatat

✗ Mengubah flow sistem tanpa mencatat

---

# TUJUAN

Dengan CHANGELOG yang baik:

* Riwayat proyek dapat dilacak.
* AI dapat memahami perubahan sebelumnya.
* Programmer tidak lupa perubahan yang sudah dilakukan.
* Mempermudah maintenance jangka panjang.
