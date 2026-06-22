# DATABASE_SCHEMA.md

# ABSENSI-SEKOLAH-2

Versi: 1.0

Status: Aktif

Terakhir Diperbarui: 22 Juni 2026

---

# TUJUAN DATABASE

Database dirancang untuk:

* Absensi siswa berbasis QR Code
* Monitoring kehadiran siswa
* Monitoring BK
* Riwayat kelas siswa
* Jadwal sekolah
* Hari libur
* Laporan absensi
* Audit perubahan data

---

# RELASI UTAMA

users
↓
teachers

students
↓
student_class_histories
↓
school_classes
↓
academic_years

students
↓
attendances
↓
attendance_logs

school_schedules

schedule_overrides

holidays

activity_logs

---

# TABEL USERS

Digunakan untuk login ke sistem.

## Kolom

| Kolom         | Tipe               |
| ------------- | ------------------ |
| id            | bigint             |
| teacher_id    | bigint nullable    |
| username      | string unique      |
| password      | string             |
| role          | enum               |
| is_active     | boolean            |
| last_login_at | timestamp nullable |
| created_at    | timestamp          |
| updated_at    | timestamp          |

## Role

* admin
* guru

## Catatan

Admin dapat tidak memiliki teacher_id.

Guru wajib memiliki teacher_id.

---

# TABEL TEACHERS

Data guru.

## Kolom

| Kolom      | Tipe      |
| ---------- | --------- |
| id         | bigint    |
| nama       | string    |
| is_bk      | boolean   |
| is_piket   | boolean   |
| created_at | timestamp |
| updated_at | timestamp |

## Catatan

Guru dapat:

* Guru biasa
* Guru BK
* Guru Piket
* Guru BK + Piket

---

# TABEL SCHOOL_CLASSES

Data kelas.

## Kolom

| Kolom         | Tipe            |
| ------------- | --------------- |
| id            | bigint          |
| nama_kelas    | string          |
| tingkat       | integer         |
| wali_kelas_id | bigint nullable |
| created_at    | timestamp       |
| updated_at    | timestamp       |

## Contoh

7A

7B

8A

8B

9A

9B

---

# TABEL STUDENTS

Data utama siswa.

## Kolom

| Kolom         | Tipe            |
| ------------- | --------------- |
| id            | bigint          |
| nis           | string unique   |
| nisn          | string unique   |
| nama          | string          |
| jenis_kelamin | enum            |
| qr_token      | string unique   |
| foto          | string nullable |
| is_active     | boolean         |
| created_at    | timestamp       |
| updated_at    | timestamp       |

## Catatan

QR tidak berubah saat siswa naik kelas.

QR digunakan selama siswa aktif di sekolah.

---

# TABEL ACADEMIC_YEARS

Tahun ajaran.

## Kolom

| Kolom      | Tipe      |
| ---------- | --------- |
| id         | bigint    |
| nama       | string    |
| is_active  | boolean   |
| created_at | timestamp |
| updated_at | timestamp |

## Contoh

2026/2027

2027/2028

---

# TABEL STUDENT_CLASS_HISTORIES

Riwayat kelas siswa.

## Kolom

| Kolom            | Tipe      |
| ---------------- | --------- |
| id               | bigint    |
| student_id       | bigint    |
| academic_year_id | bigint    |
| class_id         | bigint    |
| nomor_absen      | integer   |
| created_at       | timestamp |
| updated_at       | timestamp |

## Contoh

Kadek

2026/2027 → 7A → No 1

2027/2028 → 8A → No 5

2028/2029 → 9A → No 3

---

# TABEL ATTENDANCES

Data absensi harian.

## Kolom

| Kolom            | Tipe            |
| ---------------- | --------------- |
| id               | bigint          |
| student_id       | bigint          |
| class_history_id | bigint          |
| tanggal          | date            |
| jam_scan         | time            |
| status           | enum            |
| keterangan       | text nullable   |
| scanned_by       | bigint nullable |
| created_at       | timestamp       |
| updated_at       | timestamp       |

## Status

* Hadir
* Terlambat
* Sakit
* Izin
* Alpha
* Dispen

## Catatan

Saat scan:

Status otomatis = Hadir

Guru dapat mengubah status jika diperlukan.

---

# TABEL ATTENDANCE_LOGS

Riwayat perubahan absensi.

## Kolom

| Kolom         | Tipe          |
| ------------- | ------------- |
| id            | bigint        |
| attendance_id | bigint        |
| status_lama   | string        |
| status_baru   | string        |
| catatan       | text nullable |
| changed_by    | bigint        |
| created_at    | timestamp     |

## Contoh

Hadir → Sakit

Hadir → Izin

Hadir → Terlambat

---

# TABEL SCHOOL_SCHEDULES

Jadwal mingguan sekolah.

## Kolom

| Kolom           | Tipe          |
| --------------- | ------------- |
| id              | bigint        |
| hari            | string        |
| is_holiday      | boolean       |
| use_default     | boolean       |
| jam_masuk       | time nullable |
| batas_terlambat | time nullable |
| jam_pulang      | time nullable |
| created_at      | timestamp     |
| updated_at      | timestamp     |

## Hari

* Senin
* Selasa
* Rabu
* Kamis
* Jumat
* Sabtu
* Minggu

---

# TABEL SCHEDULE_OVERRIDES

Jadwal khusus tanggal tertentu.

## Kolom

| Kolom           | Tipe          |
| --------------- | ------------- |
| id              | bigint        |
| tanggal         | date          |
| nama_kegiatan   | string        |
| is_holiday      | boolean       |
| jam_masuk       | time nullable |
| batas_terlambat | time nullable |
| jam_pulang      | time nullable |
| created_at      | timestamp     |
| updated_at      | timestamp     |

## Contoh

17 Agustus

Class Meeting

Ujian Sekolah

Pesantren Kilat

---

# TABEL HOLIDAYS

Hari libur.

## Kolom

| Kolom           | Tipe          |
| --------------- | ------------- |
| id              | bigint        |
| nama_libur      | string        |
| tanggal_mulai   | date          |
| tanggal_selesai | date          |
| jenis           | string        |
| keterangan      | text nullable |
| created_at      | timestamp     |
| updated_at      | timestamp     |

## Jenis

* Nasional
* Sekolah
* Semester
* Khusus

---

# TABEL ACTIVITY_LOGS

Log aktivitas sistem.

## Kolom

| Kolom      | Tipe            |
| ---------- | --------------- |
| id         | bigint          |
| user_id    | bigint          |
| aktivitas  | string          |
| deskripsi  | text nullable   |
| ip_address | string nullable |
| created_at | timestamp       |

## Contoh Aktivitas

Login

Logout

Scan QR

Tambah Siswa

Edit Siswa

Ubah Status Absensi

Tambah Hari Libur

---

# RELASI DATABASE

users
→ teachers

school_classes
→ teachers (wali kelas)

students
→ student_class_histories

academic_years
→ student_class_histories

school_classes
→ student_class_histories

students
→ attendances

attendances
→ attendance_logs

users
→ activity_logs

---

# DATABASE RULES

1. Jangan menghapus tabel tanpa persetujuan.

2. Jangan menghapus kolom tanpa persetujuan.

3. Jangan mengganti nama tabel tanpa persetujuan.

4. Jangan mengganti nama kolom tanpa persetujuan.

5. Semua perubahan database wajib dicatat pada CHANGELOG.md.

---

# FITUR MASA DEPAN

Belum digunakan pada versi awal:

* Scan Pulang
* Notifikasi WhatsApp
* Portal Orang Tua
* Mobile App
* Fingerprint
* Face Recognition

Fitur dapat ditambahkan tanpa mengubah struktur inti database.
