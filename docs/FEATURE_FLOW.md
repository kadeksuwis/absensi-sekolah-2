# FEATURE_FLOW.md

# ABSENSI-SEKOLAH-2

Versi: 1.0

Status: Aktif

Terakhir Diperbarui: 22 Juni 2026

---

# TUJUAN

Dokumen ini menjelaskan alur penggunaan sistem.

Dokumen ini menjadi acuan utama sebelum membuat:

* Route
* Controller
* Model
* Migration
* View

---

# AKTOR SISTEM

1. Admin
2. Guru

Guru dapat memiliki atribut:

* BK
* Wali Kelas
* Piket

---

# FLOW LOGIN

START

↓

Buka Halaman Login

↓

Input Username

↓

Input Password

↓

Klik Login

↓

Validasi Akun

↓

Berhasil

↓

Masuk Dashboard

↓

END

---

# FLOW DASHBOARD ADMIN

Admin Login

↓

Dashboard

↓

Menampilkan:

* Total Siswa
* Total Guru
* Total Kelas
* Tahun Ajaran Aktif
* Absensi Hari Ini
* Siswa Belum Hadir
* Jadwal Hari Ini
* Aktivitas Terbaru

↓

Admin Memilih Menu

↓

END

---

# FLOW KELOLA SISWA

Admin

↓

Menu Siswa

↓

Daftar Siswa

↓

Pilihan:

* Tambah
* Edit
* Detail
* Import Excel
* Export Excel

↓

Simpan Data

↓

Berhasil

↓

END

---

# FLOW KELOLA GURU

Admin

↓

Menu Guru

↓

Daftar Guru

↓

Tambah Guru

↓

Edit Guru

↓

Atur Atribut

* BK
* Piket

↓

Simpan

↓

END

---

# FLOW KELOLA KELAS

Admin

↓

Menu Kelas

↓

Tambah Kelas

↓

Tentukan:

* Nama Kelas
* Tingkat
* Wali Kelas

↓

Simpan

↓

END

---

# FLOW TAHUN AJARAN

Admin

↓

Menu Tahun Ajaran

↓

Tambah Tahun Ajaran

↓

Pilih Aktif

↓

Jika Aktif

↓

Nonaktifkan Tahun Sebelumnya

↓

Simpan

↓

END

---

# FLOW PENEMPATAN SISWA KE KELAS

Admin

↓

Pilih Tahun Ajaran

↓

Pilih Kelas

↓

Pilih Siswa

↓

Input Nomor Absen

↓

Simpan

↓

Masuk ke Student Class History

↓

END

---

# FLOW SCAN QR

Guru Login

↓

Menu Scan QR

↓

Buka Kamera

↓

Scan QR Siswa

↓

Cari QR Token

↓

Siswa Ditemukan

↓

Cek Hari Libur

↓

Jika Libur

↓

Tolak Scan

↓

END

↓

Jika Tidak Libur

↓

Cek Absensi Hari Ini

↓

Jika Sudah Absen

↓

Tampilkan

"Sudah Absen Hari Ini"

↓

END

↓

Jika Belum Absen

↓

Simpan Absensi

↓

Status = Hadir

↓

Simpan Jam Scan

↓

Tampilkan Berhasil

↓

END

---

# FLOW PERUBAHAN STATUS

Guru

↓

Menu Absensi Hari Ini

↓

Pilih Siswa

↓

Klik Ubah Status

↓

Pilih:

* Hadir
* Terlambat
* Sakit
* Izin
* Alpha
* Dispen

↓

Input Keterangan

↓

Simpan

↓

Buat Attendance Log

↓

END

---

# FLOW SISWA BELUM HADIR

Guru

↓

Dashboard

↓

Pilih

"Siswa Belum Hadir"

↓

Sistem Membandingkan

Data Siswa Aktif

VS

Data Absensi Hari Ini

↓

Tampilkan Daftar

↓

END

---

# FLOW BK

Guru BK Login

↓

Dashboard BK

↓

Menampilkan:

* Alpha
* Terlambat
* Izin
* Sakit
* Dispen

↓

Pilih Salah Satu

↓

Lihat Daftar Siswa

↓

Lihat Detail

↓

END

---

# FLOW WALI KELAS

Guru Wali Login

↓

Menu Kelas Saya

↓

Lihat Daftar Siswa

↓

Lihat Status Kehadiran

↓

Ubah Status Jika Diperlukan

↓

Simpan

↓

Buat Log

↓

END

---

# FLOW JADWAL SEKOLAH

Admin

↓

Menu Jadwal Sekolah

↓

Pilih Hari

↓

Centang Libur ?

↓

YA

↓

Jam Dinonaktifkan

↓

Simpan

↓

END

↓

TIDAK

↓

Gunakan Default ?

↓

YA

↓

Gunakan Jam Default

↓

Simpan

↓

END

↓

TIDAK

↓

Input:

* Jam Masuk
* Batas Terlambat
* Jam Pulang

↓

Simpan

↓

END

---

# FLOW JADWAL KHUSUS

Admin

↓

Menu Jadwal Khusus

↓

Pilih Tanggal

↓

Input:

* Nama Kegiatan
* Jam Masuk
* Jam Pulang

↓

Simpan

↓

Override Jadwal Harian

↓

END

---

# FLOW HARI LIBUR

Admin

↓

Menu Hari Libur

↓

Tambah Libur

↓

Input:

* Nama Libur
* Tanggal Mulai
* Tanggal Selesai
* Jenis

↓

Simpan

↓

END

---

# FLOW LAPORAN HARIAN

Admin / Guru

↓

Menu Laporan

↓

Pilih Tanggal

↓

Generate

↓

Tampilkan:

* Hadir
* Terlambat
* Sakit
* Izin
* Alpha
* Dispen

↓

Export PDF

↓

Export Excel

↓

END

---

# FLOW LOG AKTIVITAS

User Melakukan Aktivitas

↓

Sistem Mencatat

* User
* Aktivitas
* Waktu

↓

Masuk Activity Log

↓

END

---

# FLOW ERROR QR

Guru Scan QR

↓

QR Tidak Ditemukan

↓

Tampilkan

"QR Tidak Terdaftar"

↓

Tidak Menyimpan Absensi

↓

END

---

# FLOW ERROR ABSENSI GANDA

Guru Scan QR

↓

Sudah Ada Absensi Hari Ini

↓

Tampilkan

"Absensi Sudah Tercatat"

↓

Tidak Menyimpan Data Baru

↓

END

---

# PRIORITAS PENGEMBANGAN

VERSI 2.0

WAJIB:

✓ Login

✓ Dashboard

✓ Data Guru

✓ Data Siswa

✓ Data Kelas

✓ Tahun Ajaran

✓ Penempatan Kelas

✓ Scan QR

✓ Absensi

✓ Jadwal Sekolah

✓ Hari Libur

✓ Laporan

✓ Activity Log

---

VERSI SELANJUTNYA

* Scan Pulang
* WhatsApp Gateway
* Portal Orang Tua
* Mobile App
* Fingerprint
* Face Recognition
