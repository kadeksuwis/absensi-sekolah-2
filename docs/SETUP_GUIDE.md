# SETUP_GUIDE.md

# ABSENSI-SEKOLAH-2

Versi: 1.0

Status: Aktif

---

# TUJUAN

Dokumen ini menjelaskan cara menyiapkan proyek dari nol.

---

# PERSYARATAN

Pastikan sudah terinstall:

* PHP 8.2+
* Composer
* NodeJS
* NPM
* Git
* MySQL
* VS Code

---

# CLONE PROJECT

```bash
git clone https://github.com/NAMA_USERNAME/absensi-sekolah-2.git

cd absensi-sekolah-2
```

---

# INSTALL DEPENDENCY PHP

```bash
composer install
```

---

# INSTALL DEPENDENCY JAVASCRIPT

```bash
npm install
```

---

# COPY FILE ENV

```bash
cp .env.example .env
```

Windows:

```bash
copy .env.example .env
```

---

# GENERATE APP KEY

```bash
php artisan key:generate
```

---

# KONFIGURASI DATABASE

Edit file:

```text
.env
```

Contoh:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=absensi_sekolah_2
DB_USERNAME=root
DB_PASSWORD=
```

---

# BUAT DATABASE

Masuk phpMyAdmin.

Buat database:

```text
absensi_sekolah_2
```

---

# JALANKAN MIGRATION

```bash
php artisan migrate
```

---

# INSTALL LARAVEL BREEZE

```bash
composer require laravel/breeze --dev
```

Install Breeze:

```bash
php artisan breeze:install
```

---

# INSTALL DEPENDENCY SETELAH BREEZE

```bash
npm install

npm run build
```

---

# JALANKAN MIGRATION KEMBALI

```bash
php artisan migrate
```

---

# INSTALL ADMINLTE

Paket yang digunakan akan ditentukan pada fase dashboard.

Status:

Belum Dipasang.

---

# MENJALANKAN PROJECT

```bash
php artisan serve
```

Akses:

```text
http://127.0.0.1:8000
```

---

# MENJALANKAN VITE

Terminal kedua:

```bash
npm run dev
```

---

# LOGIN DEFAULT

Belum tersedia.

Akan dibuat setelah modul User selesai.

---

# DOKUMENTASI WAJIB DIBACA

Urutan membaca:

1. START_HERE.md
2. SYSTEM_REQUIREMENTS.md
3. PROJECT_RULES.md
4. DATABASE_SCHEMA.md
5. FEATURE_FLOW.md
6. PROJECT_STATUS.md
7. ROADMAP_V2.md
8. CHANGELOG.md

---

# TROUBLESHOOTING

## Composer Error

```bash
composer install
```

ulang kembali.

---

## Node Modules Hilang

```bash
npm install
```

---

## APP_KEY Missing

```bash
php artisan key:generate
```

---

## Migration Error

Pastikan database:

```text
absensi_sekolah_2
```

sudah dibuat.

---

# STATUS DOKUMEN

Aktif

Digunakan untuk semua instalasi proyek Absensi-Sekolah-2.
