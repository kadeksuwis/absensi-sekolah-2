# CHANGELOG.md

# ABSENSI-SEKOLAH-2

Dokumen ini digunakan untuk mencatat seluruh perubahan proyek.

Semua perubahan penting wajib dicatat.

---

# FORMAT PENULISAN

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

# VERSI 2.9.0

Tanggal:
2026-06-26

Status:
Development

## Fitur Baru

* CRUD Data Guru disempurnakan.
* CRUD Data Kelas disempurnakan.
* CRUD Data Siswa disempurnakan.
* Validasi NIS unik saat tambah dan edit siswa.
* Validasi email guru.
* Success Message untuk seluruh CRUD.
* Konfirmasi hapus menggunakan SweetAlert.
* Badge Role Guru mendukung BK dan Piket secara bersamaan.
* Filter Wali Kelas agar tidak dapat dipilih lebih dari satu kelas.
* Jumlah siswa pada Data Kelas dihitung otomatis.
* Tampilan seluruh Master Data menggunakan AdminLTE.

---

## Perbaikan

* Perbaikan validasi Data Guru.
* Perbaikan validasi Data Siswa.
* Perbaikan validasi Data Kelas.
* Perbaikan proses Update Guru.
* Perbaikan proses Update Siswa.
* Perbaikan proses Update Kelas.
* Perbaikan proses Delete Guru.
* Perbaikan proses Delete Siswa.
* Perbaikan proses Delete Kelas.
* Perbaikan relasi SchoolClass dengan Student.
* Perbaikan relasi SchoolClass dengan Teacher.
* Perbaikan filter pilihan Wali Kelas.
* Perbaikan tampilan Badge Role Guru.

---

## Perubahan Database

Tambah:

* Tidak ada.

Ubah:

* Tidak ada.

Hapus:

* Tidak ada.

---

## Catatan

* Modul Master Data telah selesai dan stabil.
* CRUD Guru telah selesai.
* CRUD Siswa telah selesai.
* CRUD Kelas telah selesai.
* Seluruh halaman telah menggunakan tampilan AdminLTE.
* Tahap selanjutnya berfokus pada modul Tahun Ajaran sebagai fondasi sebelum implementasi QR Code dan Absensi.

---

## Tahap Berikutnya

1. Tahun Ajaran.
2. User Management.
3. Riwayat Kelas Siswa.
4. Generate QR Code.
5. Scan QR Absensi.
6. Absensi Harian.
7. Jadwal Sekolah.
8. Hari Libur.
9. Monitoring BK.
10. Laporan.
11. Activity Log.

# VERSI 2.8.0

Tanggal:
2026-06-26

Status:
Development

## Fitur Baru

* CRUD Data Siswa selesai
* Halaman Data Siswa menggunakan AdminLTE
* Halaman Tambah Siswa menggunakan AdminLTE
* Halaman Edit Siswa menggunakan AdminLTE
* Fitur Hapus Siswa selesai
* Konfirmasi hapus menggunakan SweetAlert2
* CRUD Guru diperbarui menggunakan AdminLTE
* Halaman Data Guru diperbarui
* Halaman Tambah Guru diperbarui
* Halaman Edit Guru diperbarui
* Badge Role Guru mendukung lebih dari satu status (BK dan Piket)

---

## Perbaikan

* Berhasil migrasi dari layout manual ke AdminLTE.
* Tampilan CRUD menjadi lebih konsisten.
* Tombol Edit dan Hapus menggunakan icon Font Awesome.
* Perbaikan form Edit Guru.
* Perbaikan form Edit Siswa.
* Perbaikan route CRUD Guru.
* Perbaikan route CRUD Siswa.
* Perbaikan proses delete menggunakan method DELETE.
* Perbaikan SweetAlert agar submit form berjalan dengan benar.
* Role Guru sekarang dapat menampilkan BK dan Piket secara bersamaan.
* Pencarian Data Guru dan Data Siswa tetap berfungsi setelah migrasi ke AdminLTE.

---

## Perubahan Database

Tambah:

* Tidak ada.

Ubah:

* Tidak ada.

Hapus:

* Tidak ada.

---

## Catatan

* Seluruh CRUD Master Data (Guru, Kelas, Siswa) sudah menggunakan tampilan AdminLTE.
* Fondasi tampilan V2 yang lama sudah mulai digantikan dengan struktur baru yang lebih bersih.
* Struktur proyek mulai distandarkan agar mudah dikembangkan pada modul berikutnya.

---

## Tahap Berikutnya

1. Menyelesaikan penyempurnaan CRUD Guru.
2. Menyelesaikan penyempurnaan CRUD Kelas.
3. Dashboard Statistik Admin.
4. Import Excel Siswa.
5. Generate QR Code Siswa.
6. Scan QR Absensi.
7. Absensi Masuk dan Pulang.
8. Riwayat Absensi.
9. Monitoring BK.
10. Laporan.


# VERSI 2.7.0

Tanggal:
2026-06-25

Status:
Development

## Fitur Baru

* Modul Data Siswa
* Halaman Data Siswa
* Tambah Siswa
* Relasi Student ke SchoolClass
* Generate QR Token otomatis (UUID)
* Validasi NIS unik
* Menu Data Siswa pada Admin

## Perubahan Database

### students

* nis
* nama
* class_id
* qr_token

## Perbaikan

* Route Data Siswa menggunakan prefix `/admin`
* Dropdown kelas mengambil data dari tabel school_classes
* QR Token dibuat otomatis menggunakan UUID
* Relasi Student ↔ SchoolClass berhasil diterapkan

## Catatan

* Edit siswa masih dalam pengembangan.
* Hapus siswa masih dalam pengembangan.
* Import Excel siswa belum dibuat.
* QR Code fisik belum dibuat.
* Scan QR Absensi belum dibuat.
* Halaman daftar siswa per kelas masih tahap berikutnya.

## Tahap Berikutnya

1. Selesaikan Edit Siswa.
2. Selesaikan Hapus Siswa.
3. Halaman siswa berdasarkan kelas.
4. Import Excel siswa.
5. Generate QR Code.
6. Scan QR Absensi.
7. Dashboard statistik siswa.


# VERSI 2.6.0

Tanggal:
2026-06-24

Status:
Development

## Fitur Baru

* CRUD Data Guru selesai
* Tambah Guru
* Edit Guru
* Hapus Guru
* Relasi User dan Teacher
* CRUD Data Kelas
* Tambah Kelas
* Edit Kelas
* Hapus Kelas
* Relasi Wali Kelas ke Teacher

## Perubahan Database

### teachers

* user_id
* nama
* nip
* is_bk
* is_piket

### school_classes

* nama_kelas
* wali_teacher_id

## Perbaikan

* URL admin menggunakan prefix `/admin`
* Route guru menggunakan prefix `/guru`
* Halaman edit guru sudah berfungsi
* Halaman hapus guru sudah berfungsi
* Dropdown wali kelas menampilkan data guru
* Proteksi database satu guru hanya boleh menjadi wali satu kelas

## Catatan

* Fitur jumlah siswa pada Data Kelas ditunda sampai tabel siswa dibuat.
* Fitur lihat siswa per kelas ditunda sampai modul siswa selesai.
* Filter dropdown wali kelas agar tidak menampilkan wali yang sudah digunakan sedang dikerjakan.

## Tahap Berikutnya

1. Selesaikan filter wali kelas.
2. Buat modul Data Siswa.
3. Buat relasi siswa dengan kelas.
4. Buat import Excel siswa.
5. Buat QR Token siswa.
6. Buat fitur absensi QR.


# VERSI 2.5.0

Tanggal:
2026-06-24

Status:
Development

## Fitur Baru

- CRUD Data Guru
- Form Tambah Guru
- Penyimpanan User Guru
- Penyimpanan Teacher
- Relasi User dan Teacher

## Perubahan Database

Tidak ada

## Catatan

Master Data Guru mulai dikembangkan.
Data guru berhasil disimpan ke tabel users dan teachers.

# VERSI 2.4.0

Tanggal:
2026-06-24

Status:
Development

## Fitur Baru

* RoleMiddleware
* DashboardController
* Dashboard Admin
* Dashboard Guru
* Akun Guru Test
* Redirect dashboard berdasarkan role

---

## Perubahan Database

Tidak ada

---

## Catatan

* Autentikasi selesai.
* Sistem role selesai.
* Admin berhasil login ke dashboard admin.
* Guru berhasil login ke dashboard guru.
* Role-based dashboard berhasil diterapkan.

---

# VERSI 2.3.0

Tanggal:
2026-06-23

Status:
Development

## Fitur Baru

* DashboardController
* RoleMiddleware
* Redirect dashboard berdasarkan role
* Dashboard Admin
* Dashboard Guru

---

## Perubahan Database

Tidak ada

---

## Catatan

* Fondasi role system berhasil dibuat.
* Admin berhasil diarahkan ke dashboard admin.

---

# VERSI 2.2.0

Tanggal:
2026-06-22

Status:
Development

## Fitur Baru

* Menambahkan role user
* Menambahkan status aktif user
* Membuat tabel teachers
* Membuat relasi User dan Teacher
* Membuat AdminSeeder
* Membuat akun admin default

---

## Perubahan Database

Tambah tabel:

* teachers

Tambah kolom pada users:

* role
* is_active

---

## Catatan

* Fondasi manajemen guru selesai dibuat.

---

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
* Hari Libur
* Activity Log

---

## Perubahan Database

Rancangan tabel:

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

# ATURAN CHANGELOG

WAJIB dicatat:

* Penambahan fitur
* Penghapusan fitur
* Perubahan database
* Perubahan role
* Perubahan flow sistem
* Perubahan dashboard
* Perbaikan bug

---

# DILARANG

* Mengubah database tanpa mencatat
* Menghapus fitur tanpa mencatat
* Mengubah flow sistem tanpa mencatat

---

# TUJUAN

* Riwayat proyek dapat dilacak.
* AI dapat memahami perubahan sebelumnya.
* Programmer tidak lupa perubahan yang sudah dilakukan.
* Mempermudah maintenance jangka panjang.
