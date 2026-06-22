# PROJECT_RULES.md

# ABSENSI-SEKOLAH-2

Versi: 1.2

Status: Aktif

Terakhir Diperbarui: 22 Juni 2026

---

# IDENTITAS PROYEK

Nama Proyek:

Absensi-Sekolah-2

Jenis:

Sistem Absensi Siswa Berbasis QR Code

Sekolah:

SMP Negeri 9 Denpasar

Framework:

Laravel

Database:

MySQL

Template:

AdminLTE

Frontend:

Bootstrap 5

---

# TUJUAN PROYEK

Membangun sistem absensi siswa yang:

* Modern
* Mudah digunakan
* Stabil
* Mudah dikembangkan
* Mendukung monitoring siswa
* Mendukung kebutuhan wali kelas
* Mendukung kebutuhan BK
* Mengurangi absensi manual

---

# IDENTITAS VISUAL

Tema utama sistem:

Merah Sekolah

Warna utama:

Primary:
#B91C1C

Sidebar:
#7F1D1D

Button:
#DC2626

Hover:
#991B1B

Background:
#F8FAFC

---

# TAMPILAN SISTEM

Tampilan harus:

* Bersih
* Profesional
* Modern
* Mudah digunakan guru
* Mobile Friendly
* Responsive

Hindari:

* Warna terlalu mencolok
* Dashboard yang terlalu ramai
* Efek animasi berlebihan

---

# DOKUMEN WAJIB

Sebelum membuat atau mengubah kode WAJIB membaca:

1. SYSTEM_REQUIREMENTS.md
2. PROJECT_RULES.md
3. DATABASE_SCHEMA.md
4. FEATURE_FLOW.md
5. PROJECT_STATUS.md
6. CHANGELOG.md

Jika ada konflik:

SYSTEM_REQUIREMENTS.md memiliki prioritas tertinggi.

---

# ROLE SISTEM

Role resmi:

* admin
* guru

Tidak boleh menambah role baru tanpa persetujuan.

---

# ADMIN

Admin memiliki akses penuh.

Admin dapat:

* Kelola Siswa
* Kelola Guru
* Kelola Kelas
* Kelola Tahun Ajaran
* Kelola User
* Kelola Hari Libur
* Kelola Jadwal Sekolah
* Kelola Jadwal Khusus
* Melihat Seluruh Laporan
* Melihat Log Aktivitas

Admin tidak digunakan untuk scan QR.

Admin tidak digunakan untuk absensi harian.

---

# GURU

Guru dapat:

* Scan QR
* Melihat absensi
* Melihat siswa belum hadir
* Melihat riwayat absensi

Guru dapat memiliki atribut tambahan:

* BK
* Wali Kelas
* Piket

Guru dapat memiliki lebih dari satu atribut.

Contoh:

Guru + BK

Guru + Wali Kelas

Guru + Piket

Guru + BK + Wali Kelas

---

# ABSENSI SISWA

Sistem hanya digunakan untuk absensi siswa.

Tidak digunakan untuk:

* Guru
* Pegawai
* Orang Tua

---

# QR CODE

QR Code merupakan identitas siswa.

QR:

* Unik
* Tetap
* Tidak berubah saat naik kelas

QR digunakan dari:

Kelas 7
→ Kelas 8
→ Kelas 9

QR tidak diganti setiap tahun.

---

# PROSES ABSENSI

Alur utama:

1. Guru membuka halaman scan.
2. Guru menerima kartu siswa.
3. Guru melakukan scan QR.
4. Sistem menyimpan absensi.
5. Sistem menyimpan jam scan.

Status awal:

Hadir

---

# STATUS ABSENSI

Status resmi:

* Hadir
* Terlambat
* Sakit
* Izin
* Alpha
* Dispen

Tidak boleh menambah atau menghapus status tanpa persetujuan.

---

# PERUBAHAN STATUS

Guru dapat mengubah status jika diperlukan.

Contoh:

Hadir → Sakit

Hadir → Izin

Hadir → Terlambat

Hadir → Dispen

Setiap perubahan wajib dicatat pada log.

---

# NOMOR ABSEN

Nomor absen wajib disimpan.

Nomor absen bukan identitas utama siswa.

Nomor absen dapat berubah setiap tahun ajaran.

Identitas utama siswa:

* NIS
* NISN
* QR Token

---

# RIWAYAT KELAS

Riwayat kelas wajib disimpan.

Contoh:

2026/2027 → 7A

2027/2028 → 8A

2028/2029 → 9A

Riwayat tidak boleh hilang.

---

# TAHUN AJARAN

Sistem mendukung banyak tahun ajaran.

Hanya satu tahun ajaran aktif.

Data tahun ajaran lama tetap disimpan.

---

# HARI LIBUR

Admin dapat mengelola:

* Nasional
* Sekolah
* Semester
* Khusus

Saat hari libur:

* Scan QR dinonaktifkan
* Absensi tidak dibuat

---

# JADWAL SEKOLAH

Sistem memiliki:

1. Jadwal Mingguan
2. Jadwal Khusus

Prioritas:

Jadwal Khusus
↓
Jadwal Mingguan

---

# JADWAL MINGGUAN

Setiap hari memiliki:

* Libur
* Gunakan Default
* Jam Masuk
* Batas Terlambat
* Jam Pulang

Jika Libur dicentang:

Field jam tidak dapat diedit.

Jika Gunakan Default dicentang:

Field jam tidak dapat diedit.

---

# JADWAL KHUSUS

Digunakan untuk:

* Upacara
* Ujian
* Class Meeting
* Hari Besar
* Kegiatan Sekolah

Contoh:

17 Agustus

Jam Masuk:
06:30

Jam Pulang:
10:00

---

# LOG AKTIVITAS

Sistem wajib mencatat:

* Login
* Logout
* Scan QR
* Perubahan Status
* Perubahan Data Master

Minimal mencatat:

* User
* Aktivitas
* Waktu

---

# DATABASE RULES

DILARANG:

* Menghapus tabel tanpa izin
* Menghapus kolom tanpa izin
* Mengubah nama tabel tanpa izin
* Mengubah nama kolom tanpa izin

Jika perlu perubahan:

1. Jelaskan alasan
2. Jelaskan dampak
3. Tunggu persetujuan

---

# STANDAR CODING

Gunakan:

* MVC Laravel
* Eloquent ORM
* Form Request Validation
* Named Route
* Relationship Model

Hindari:

* Hardcode Role
* Hardcode ID
* Query Berulang
* Duplikasi Kode

---

# SEBELUM MEMBERIKAN KODE

WAJIB MENJELASKAN:

1. Tujuan perubahan
2. File yang diubah
3. Dampak perubahan
4. Risiko perubahan
5. Cara testing

Baru setelah itu memberikan kode.

---

# JIKA INFORMASI KURANG

Jangan menebak.

Tanyakan terlebih dahulu.

Lebih baik bertanya daripada merusak struktur proyek.

---

# TARGET AKHIR

Membangun sistem Absensi-Sekolah-2 yang:

* Stabil
* Konsisten
* Profesional
* Mudah digunakan sekolah
* Mudah dikembangkan
* Memiliki dokumentasi lengkap
* Siap digunakan pada lingkungan sekolah sebenarnya
