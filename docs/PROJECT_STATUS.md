# PROJECT_STATUS.md

# ABSENSI-SEKOLAH-2

Versi: 2.4

Status: Development Phase

Terakhir Diperbarui: 24 Juni 2026

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
AdminLTE (Belum Dipasang)

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

---

# FITUR DALAM PENGERJAAN

MASTER DATA

□ CRUD Guru

□ CRUD Siswa

□ CRUD Kelas

□ Tahun Ajaran

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

✓ cache

✓ jobs

✓ teachers

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

1. CRUD Guru

2. CRUD Siswa

3. CRUD Kelas

4. Tahun Ajaran

5. User Management

6. Riwayat Kelas Siswa

7. QR Code Siswa

---

# STATUS KESELURUHAN

Dokumentasi:
100%

Database Design:
95%

Backend:
25%

Frontend:
10%

Testing:
10%

Deployment:
0%

---

# CATATAN PENTING

Dashboard Admin dan Dashboard Guru sudah berjalan.

Role Middleware sudah berjalan.

Admin dan Guru berhasil login ke dashboard masing-masing.

Tahap berikutnya fokus ke Master Data.