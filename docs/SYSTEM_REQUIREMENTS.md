# SYSTEM_REQUIREMENTS.md

# ABSENSI-SEKOLAH-2

Versi: 1.0

Status: Aktif

Terakhir Diperbarui: 22 Juni 2026

---

# TUJUAN SISTEM

Absensi-Sekolah-2 adalah sistem absensi siswa berbasis QR Code yang digunakan untuk mendigitalisasi proses absensi siswa di SMP Negeri 9 Denpasar.

Sistem dirancang agar:

* Mudah digunakan guru
* Mempermudah monitoring siswa
* Membantu wali kelas
* Membantu guru BK
* Menghasilkan laporan yang akurat

---

# IDENTITAS SEKOLAH

Nama Sekolah:

SMP Negeri 9 Denpasar

Jenjang:

SMP

Tema Sistem:

Merah Sekolah

---

# PENGGUNA SISTEM

## Admin

Admin bertugas mengelola seluruh sistem.

Hak akses:

* Kelola Guru
* Kelola Siswa
* Kelola Kelas
* Kelola Tahun Ajaran
* Kelola User
* Kelola Jadwal Sekolah
* Kelola Hari Libur
* Melihat Seluruh Laporan
* Melihat Log Aktivitas

Admin tidak melakukan scan QR.

---

## Guru

Guru bertugas melakukan absensi dan monitoring siswa.

Hak akses:

* Scan QR
* Melihat Absensi
* Mengubah Status Absensi
* Melihat Riwayat Absensi

Guru dapat memiliki atribut tambahan:

* BK
* Wali Kelas
* Piket

---

# KEBUTUHAN LOGIN

Sistem harus memiliki:

* Login
* Logout
* Session
* Middleware Role

Role resmi:

* admin
* guru

---

# KEBUTUHAN DATA SISWA

Sistem harus menyimpan:

* NIS
* NISN
* Nama
* Jenis Kelamin
* QR Token
* Foto (Opsional)
* Status Aktif

Setiap siswa memiliki QR unik.

---

# KEBUTUHAN DATA GURU

Sistem harus menyimpan:

* Nama Guru

Atribut tambahan:

* BK
* Piket

---

# KEBUTUHAN KELAS

Sistem harus menyimpan:

* Nama Kelas
* Tingkat
* Wali Kelas

Contoh:

7A

7B

8A

8B

9A

9B

---

# KEBUTUHAN TAHUN AJARAN

Sistem harus mendukung banyak tahun ajaran.

Contoh:

2026/2027

2027/2028

2028/2029

Hanya satu tahun ajaran yang aktif.

---

# KEBUTUHAN RIWAYAT KELAS

Sistem harus menyimpan riwayat kelas siswa.

Contoh:

2026/2027 → 7A

2027/2028 → 8A

2028/2029 → 9A

Riwayat tidak boleh hilang.

---

# KEBUTUHAN NOMOR ABSEN

Sistem harus menyimpan nomor absen.

Nomor absen dapat berubah setiap tahun ajaran.

Nomor absen bukan identitas utama siswa.

---

# KEBUTUHAN QR CODE

QR Code:

* Unik
* Tetap
* Tidak berubah saat naik kelas

QR digunakan dari kelas 7 sampai kelas 9.

QR digunakan pada kartu siswa.

---

# KEBUTUHAN ABSENSI

Guru melakukan scan QR siswa.

Saat scan berhasil:

* Data absensi dibuat
* Jam scan disimpan
* Status awal = Hadir

Sistem harus menolak:

* QR tidak terdaftar
* Absensi ganda pada hari yang sama

---

# KEBUTUHAN STATUS ABSENSI

Status resmi:

* Hadir
* Terlambat
* Sakit
* Izin
* Alpha
* Dispen

Guru dapat mengubah status.

Perubahan wajib dicatat.

---

# KEBUTUHAN LOG PERUBAHAN

Sistem harus menyimpan:

* Status lama
* Status baru
* User yang mengubah
* Waktu perubahan
* Catatan

---

# KEBUTUHAN BK

Guru BK harus dapat melihat:

* Siswa Alpha
* Siswa Terlambat
* Siswa Sakit
* Siswa Izin
* Siswa Dispen

BK tidak mengubah data master.

---

# KEBUTUHAN WALI KELAS

Wali kelas harus dapat:

* Melihat siswa di kelasnya
* Melihat status absensi siswa
* Mengubah status absensi
* Melihat rekap kelas

---

# KEBUTUHAN JADWAL SEKOLAH

Sistem harus memiliki:

1. Jadwal Mingguan
2. Jadwal Khusus

Prioritas:

Jadwal Khusus
↓
Jadwal Mingguan

---

# KEBUTUHAN JADWAL MINGGUAN

Setiap hari memiliki:

* Libur
* Gunakan Default
* Jam Masuk
* Batas Terlambat
* Jam Pulang

Hari:

* Senin
* Selasa
* Rabu
* Kamis
* Jumat
* Sabtu
* Minggu

---

# KEBUTUHAN JADWAL KHUSUS

Digunakan untuk:

* Upacara
* Ujian
* Class Meeting
* Kegiatan Sekolah

Jadwal khusus dapat menggantikan jadwal harian.

---

# KEBUTUHAN HARI LIBUR

Sistem harus mendukung:

* Libur Nasional
* Libur Sekolah
* Libur Semester
* Libur Khusus

Saat hari libur:

* Scan QR dinonaktifkan
* Absensi tidak dibuat

---

# KEBUTUHAN DASHBOARD

Dashboard Admin:

* Total Siswa
* Total Guru
* Total Kelas
* Tahun Ajaran Aktif
* Absensi Hari Ini
* Siswa Belum Hadir

Dashboard Guru:

* Scan QR
* Absensi Hari Ini
* Siswa Belum Hadir

Dashboard BK:

* Monitoring Alpha
* Monitoring Terlambat
* Monitoring Sakit
* Monitoring Izin
* Monitoring Dispen

---

# KEBUTUHAN LAPORAN

Sistem harus memiliki:

* Laporan Harian
* Laporan Bulanan
* Laporan Tahunan
* Laporan Per Kelas
* Laporan Per Siswa

Export:

* PDF
* Excel

---

# KEBUTUHAN ACTIVITY LOG

Sistem harus mencatat:

* Login
* Logout
* Scan QR
* Perubahan Status
* Perubahan Data Master

---

# NON FUNCTIONAL REQUIREMENTS

Sistem harus:

* Mudah digunakan
* Responsive
* Mobile Friendly
* Stabil
* Mudah dipelihara
* Mudah dikembangkan

---

# TARGET VERSI 2.0

Fitur wajib:

✓ Login

✓ Role Admin

✓ Role Guru

✓ Master Data

✓ QR Code

✓ Absensi

✓ Jadwal Sekolah

✓ Hari Libur

✓ Monitoring BK

✓ Laporan

✓ Activity Log

---

# FITUR MASA DEPAN

Tidak termasuk versi 2.0:

* Scan Pulang
* WhatsApp Gateway
* Portal Orang Tua
* Mobile App
* Fingerprint
* Face Recognition
