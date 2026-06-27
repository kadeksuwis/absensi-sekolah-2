# PROJECT_STATUS.md

# ABSENSI-SEKOLAH-2

Versi: 2.9

Status: Development Phase

Terakhir Diperbarui: 26 Juni 2026

---

# RINGKASAN PROYEK

Absensi-Sekolah-2 adalah sistem absensi siswa berbasis QR Code untuk SMP Negeri 9 Denpasar.

Sistem digunakan untuk:

* Absensi siswa
* Monitoring kehadiran
* Monitoring BK
* Laporan absensi
* Riwayat kelas siswa

QR Code menggunakan kartu pelajar siswa dan tetap digunakan selama siswa aktif bersekolah.

---

# INFORMASI TEKNOLOGI

Framework:
Laravel 12

Database:
MySQL

Frontend:
Bootstrap 5

Authentication:
Laravel Breeze

Template:
AdminLTE 3

Version Control:
Git + GitHub

---

# STATUS PROYEK SAAT INI

Tahap:

Master Data

Status:

Sedang Dikembangkan

---

# FITUR SELESAI

✓ Dokumentasi Proyek

✓ Struktur Database

✓ Flow Sistem

✓ Laravel Install

✓ Database Connection

✓ Migration Awal Laravel

✓ Laravel Breeze

✓ Login

✓ Logout

✓ Register

✓ Session Authentication

✓ Role User

✓ Status Aktif User

✓ Tabel Teachers

✓ Relasi User → Teacher

✓ Admin Seeder

✓ Akun Admin Default

✓ Akun Guru Test

✓ Login Admin

✓ Login Guru

✓ DashboardController

✓ RoleMiddleware

✓ Dashboard Admin

✓ Dashboard Guru

✓ Redirect Dashboard Berdasarkan Role

✓ CRUD Guru

✓ CRUD Siswa

✓ CRUD Kelas

✓ Relasi Guru ↔ User

✓ Relasi Siswa ↔ Kelas

✓ Validasi Data Guru

✓ Validasi Data Siswa

✓ Validasi Data Kelas

✓ Validasi NIS Unik

✓ QR Token Otomatis (UUID)

✓ Filter Wali Kelas

✓ Badge Multi Role Guru (BK & Piket)

✓ SweetAlert Konfirmasi Hapus

✓ Success Message CRUD

✓ Tampilan AdminLTE untuk seluruh Master Data

✓ Tahun Ajaran

# FITUR DALAM PENGERJAAN

MASTER DATA



□ User Management

---

# FITUR BELUM DIBUAT

ABSENSI

□ Scan QR

□ Absensi Harian

□ Status Hadir

□ Status Terlambat

□ Status Sakit

□ Status Izin

□ Status Alpha

□ Status Dispen

□ Riwayat Absensi

---

JADWAL

□ Jadwal Mingguan

□ Jadwal Default

□ Override Jadwal

□ Hari Libur

---

LAPORAN

□ Laporan Harian

□ Laporan Bulanan

□ Laporan Tahunan

□ Laporan Per Kelas

□ Laporan Per Siswa

□ Export Excel

□ Export PDF

---

SISTEM

□ Dashboard BK

□ Activity Log

□ Backup Database

---

# DATABASE YANG SUDAH DIBUAT

✓ users

✓ teachers

✓ school_classes

✓ students

✓ cache

✓ jobs

✓ academic_years

---

# ROLE SISTEM

Admin

Guru

Atribut Guru:

* BK
* Wali Kelas
* Piket

---

# PRIORITAS BERIKUTNYA

1. Tahun Ajaran

2. User Management

3. Riwayat Kelas Siswa

4. Generate QR Code

5. Scan QR

6. Absensi Harian

7. Jadwal Sekolah

8. Hari Libur

9. Laporan

10. Activity Log

---

# STATUS KESELURUHAN

Dokumentasi:
100%

Database Design:
95%

Backend:
60%

Frontend:
55%

Testing:
70%

Deployment:
0%

---

# CATATAN PENTING

Dashboard Admin dan Dashboard Guru sudah berjalan.

Master Data Guru, Kelas, dan Siswa telah selesai.

Seluruh CRUD Master Data telah menggunakan AdminLTE.

Validasi dasar CRUD telah diterapkan.

Tahap berikutnya fokus pada Tahun Ajaran sebagai fondasi sebelum QR Code dan Absensi.