# ROADMAP_V2.md

# ABSENSI-SEKOLAH-2

Versi: 2.4

Status: Aktif

Terakhir Diperbarui: 24 Juni 2026

---

# TUJUAN ROADMAP

Dokumen ini digunakan untuk menentukan urutan pengembangan sistem.

Semua fitur harus mengikuti roadmap.

Hindari membuat fitur yang belum masuk prioritas.

---

# TARGET AKHIR

Membangun sistem absensi siswa berbasis QR Code yang:

* Stabil
* Mudah digunakan
* Siap digunakan sekolah
* Mudah dikembangkan
* Memiliki dokumentasi lengkap

---

# FASE 1

PERSIAPAN PROYEK

Status:
SELESAI ✅

Target:

✓ Dokumentasi

✓ Analisis Kebutuhan

✓ Struktur Database

✓ Flow Sistem

✓ Aturan Proyek

Output:

Dokumentasi proyek lengkap.

---

# FASE 2

AUTENTIKASI DAN FONDASI USER

Status:
SELESAI ✅

Target:

✓ Laravel Install

✓ Database Setup

✓ Laravel Breeze

✓ Login

✓ Logout

✓ Register

✓ User Role

✓ User Active Status

✓ Teacher Table

✓ Teacher Model

✓ User ↔ Teacher Relationship

✓ Admin Seeder

✓ Admin Login

Output:

Fondasi user dan autentikasi selesai.

---

# FASE 3

ROLE DAN DASHBOARD

Status:
SELESAI ✅

Target:

✓ RoleMiddleware

✓ DashboardController

✓ Dashboard Admin

✓ Dashboard Guru

✓ Redirect Dashboard Berdasarkan Role

✓ Akun Guru Test

Output:

Admin dan Guru memiliki dashboard masing-masing.

---

# FASE 4

MASTER DATA

Status:
HAMPIR SELESAI 🔄

Target:

✓ CRUD Guru

✓ CRUD Siswa

✓ CRUD Kelas

□ Tahun Ajaran

□ User Management

✓ Penempatan Wali Kelas

Output:

Output:

Master Data utama telah selesai dan siap digunakan sebagai fondasi modul Absensi.

---

# FASE 5

RIWAYAT KELAS

Status:
BELUM DIMULAI

Target:

□ Student Class History

□ Nomor Absen

□ Naik Kelas

□ Riwayat Tahun Ajaran

Output:

Riwayat siswa tersimpan.

---

# FASE 6

QR CODE SISWA

Status:
BELUM DIMULAI

Target:

□ Generate QR

□ Cetak QR

□ Download QR

□ QR Token

Output:

Semua siswa memiliki QR unik.

---

# FASE 7

ABSENSI SISWA

Status:
BELUM DIMULAI

Target:

□ Scan QR

□ Simpan Absensi

□ Cek Absensi Ganda

□ Jam Scan

□ Status Hadir Otomatis

□ Riwayat Absensi

Output:

Absensi berjalan normal.

---

# FASE 8

STATUS ABSENSI

Status:
BELUM DIMULAI

Target:

□ Hadir

□ Terlambat

□ Sakit

□ Izin

□ Alpha

□ Dispen

□ Log Perubahan

Output:

Guru dapat memperbarui status.

---

# FASE 9

JADWAL SEKOLAH

Status:
BELUM DIMULAI

Target:

□ Jadwal Mingguan

□ Jadwal Default

□ Jadwal Khusus

□ Override Jadwal

Output:

Jam sekolah dapat dikontrol.

---

# FASE 10

HARI LIBUR

Status:
BELUM DIMULAI

Target:

□ Hari Libur Nasional

□ Hari Libur Sekolah

□ Hari Libur Semester

□ Hari Libur Khusus

Output:

Absensi otomatis menyesuaikan hari libur.

---

# FASE 11

LAPORAN

Status:
BELUM DIMULAI

Target:

□ Laporan Harian

□ Laporan Bulanan

□ Laporan Tahunan

□ Laporan Per Kelas

□ Laporan Per Siswa

□ Export Excel

□ Export PDF

Output:

Data siap dicetak.

---

# FASE 12

ACTIVITY LOG

Status:
BELUM DIMULAI

Target:

□ Login Log

□ Scan Log

□ Edit Log

□ Delete Log

Output:

Aktivitas sistem tercatat.

---

# FASE 13

TESTING

Status:
BELUM DIMULAI

Target:

□ Uji Login

□ Uji Role

□ Uji Dashboard

□ Uji Master Data

□ Uji QR

□ Uji Absensi

Output:

Sistem stabil.

---

# FASE 14

VERSI PRODUKSI

Status:
BELUM DIMULAI

Target:

□ Optimasi

□ Backup Database

□ Dokumentasi Akhir

□ Deployment

Output:

Versi produksi siap digunakan.

---

# FITUR MASA DEPAN

Tidak termasuk target versi 2.x

* Scan Pulang
* WhatsApp Gateway
* Portal Orang Tua
* Mobile App Android
* Fingerprint
* Face Recognition
* Notifikasi BK Otomatis
