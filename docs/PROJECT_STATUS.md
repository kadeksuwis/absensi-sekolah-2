# PROJECT_STATUS.md

# ABSENSI-SEKOLAH-2

Versi: 2.0

Status: Planning Phase

Terakhir Diperbarui: 22 Juni 2026

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
Laravel

Database:
MySQL

Frontend:
Bootstrap 5

Template:
AdminLTE

Version Control:
Git + GitHub

---

# STATUS PROYEK SAAT INI

Tahap:

Perencanaan dan Dokumentasi

Status:

Belum Coding

---

# FITUR SELESAI (PERENCANAAN)

✓ Analisis Kebutuhan

✓ Struktur Role

✓ Aturan Sistem

✓ Alur Sistem

✓ Struktur Database

✓ Jadwal Sekolah

✓ Hari Libur

✓ Monitoring BK

✓ Riwayat Kelas

✓ QR System

---

# FITUR BELUM DIBUAT

MASTER DATA

□ Data Guru

□ Data Siswa

□ Data Kelas

□ Tahun Ajaran

□ User Management

---

ABSENSI

□ Scan QR

□ Absensi Harian

□ Perubahan Status

□ Log Perubahan

□ Riwayat Absensi

---

JADWAL

□ Jadwal Mingguan

□ Jadwal Khusus

□ Hari Libur

---

LAPORAN

□ Laporan Harian

□ Laporan Bulanan

□ Laporan Tahunan

□ Export Excel

□ Export PDF

---

SISTEM

□ Activity Log

□ Dashboard Admin

□ Dashboard Guru

□ Dashboard BK

---

# ROLE SISTEM

Admin

Guru

Atribut Guru:

* BK
* Wali Kelas
* Piket

---

# STRUKTUR DATABASE

users

teachers

students

academic_years

school_classes

student_class_histories

attendances

attendance_logs

school_schedules

schedule_overrides

holidays

activity_logs

---

# STRUKTUR FOLDER DOKUMENTASI

docs/

├── SYSTEM_REQUIREMENTS.md
├── PROJECT_RULES.md
├── DATABASE_SCHEMA.md
├── FEATURE_FLOW.md
├── PROJECT_STATUS.md
├── ROADMAP_V2.md
└── CHANGELOG.md

---

# CATATAN KHUSUS

QR Code tidak berubah saat siswa naik kelas.

Nomor absen dapat berubah setiap tahun ajaran.

Riwayat kelas wajib disimpan.

Admin tidak melakukan scan QR.

Guru melakukan scan QR.

BK merupakan atribut guru.

Wali Kelas merupakan atribut guru.

---

# BUG YANG DIKETAHUI

Belum ada.

Karena sistem belum memasuki tahap pengembangan.

---

# PRIORITAS SELANJUTNYA

1. Menyelesaikan dokumentasi proyek.

2. Membuat migration database.

3. Membuat model Laravel.

4. Membuat login dan role.

5. Membuat dashboard admin.

6. Membuat master data.

7. Membuat fitur scan QR.

8. Membuat laporan.

---

# STATUS KESELURUHAN

Dokumentasi:
60%

Database Design:
90%

Coding:
0%

Testing:
0%

Deployment:
0%
