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

Tahap dokumentasi selesai.

Belum ada coding Laravel.

---

# TEMPLATE PERUBAHAN BERIKUTNYA

Tanggal:
YYYY-MM-DD

Versi:
x.x.x

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

...

---

# CONTOH

Tanggal:
2026-07-01

Versi:
2.1.0

Status:
Development

## Fitur Baru

* CRUD Guru
* CRUD Kelas

---

## Perbaikan

* Perbaikan validasi login

---

## Perubahan Database

Tambah kolom:

teachers.is_bk

teachers.is_piket

---

## Catatan

Tahap master data selesai.

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

* Riwayat proyek dapat dilacak
* AI dapat memahami perubahan sebelumnya
* Programmer tidak lupa perubahan yang sudah dilakukan
* Mempermudah maintenance jangka panjang
