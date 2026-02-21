# 📦 Ujian Lab Shizukaa — CRUD Produk

Aplikasi web berbasis **PHP Native** untuk mengelola data produk menggunakan operasi **CRUD** (Create, Read, Update, Delete). Dibangun sebagai bagian dari Ujian Laboratorium menggunakan XAMPP sebagai web server lokal.

---

## 🧰 Teknologi yang Digunakan

| Komponen       | Detail                        |
|----------------|-------------------------------|
| Server-side    | PHP 7.x / 8.x (Native)       |
| Database       | MySQL (via XAMPP)             |
| Web Server     | Apache (XAMPP)                |
| Ekstensi PHP   | `mysqli` (procedural)        |
| Frontend       | HTML5 + CSS Inline            |

---

## ✨ Fitur Aplikasi

- ✅ **Lihat Produk** — Menampilkan semua data produk dalam tabel
- ✅ **Tambah Produk** — Form dengan upload gambar (JPG/PNG)
- ✅ **Edit Produk** — Ubah data produk termasuk ganti gambar
- ✅ **Hapus Produk** — Hapus data dengan konfirmasi dialog
- ✅ **Format Harga** — Harga ditampilkan dalam format Rupiah (Rp)

---

## 📁 Struktur Folder

```
ujian-lab-riskhan/
├── koneksi.php          # Konfigurasi & koneksi ke database MySQL
├── index.php            # Halaman utama: Daftar semua produk
├── tambah_produk.php    # Halaman form tambah produk
├── proses_tambah.php    # Backend: Proses insert data & upload gambar
├── edit_produk.php      # Halaman form edit produk
├── proses_edit.php      # Backend: Proses update data & ganti gambar
├── proses_hapus.php     # Backend: Proses hapus data produk
├── gambar/              # Folder penyimpanan gambar produk (buat manual)
└── README.md            # Dokumentasi proyek ini
```

---

## 🗄️ Skema Database

**Nama Database:** `ukk`

**Nama Tabel:** `produk`

```sql
CREATE DATABASE IF NOT EXISTS ukk;

USE ukk;

CREATE TABLE produk (
    id              INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nama_produk     VARCHAR(100) NOT NULL,
    deskripsi       TEXT,
    harga_beli      DECIMAL(15, 2) NOT NULL,
    harga_jual      DECIMAL(15, 2) NOT NULL,
    gambar_produk   VARCHAR(255) DEFAULT NULL
);
```

---

## ⚙️ Cara Instalasi (Setup)

### Prasyarat
- [XAMPP](https://www.apachefriends.org/) sudah terinstal dan Apache + MySQL sudah berjalan.

### Langkah-langkah

**1. Clone atau copy project**
```bash
# Jika menggunakan Git
git clone https://github.com/shizukaudzri/ujian-lab-Shizukaa.git

# Letakkan folder di dalam:
C:/xampp/htdocs/ujian lab riskhan/
```

**2. Buat folder `gambar`**

Buat folder bernama `gambar` di dalam folder project untuk menyimpan gambar produk.
```
ujian lab riskhan/
└── gambar/   ← Buat folder ini
```

**3. Buat database**

- Buka browser dan akses `http://localhost/phpmyadmin`
- Buat database baru dengan nama `ukk`
- Klik tab **SQL**, lalu jalankan query berikut:

```sql
CREATE TABLE produk (
    id              INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nama_produk     VARCHAR(100) NOT NULL,
    deskripsi       TEXT,
    harga_beli      DECIMAL(15, 2) NOT NULL,
    harga_jual      DECIMAL(15, 2) NOT NULL,
    gambar_produk   VARCHAR(255) DEFAULT NULL
);
```

**4. Konfigurasi koneksi (jika diperlukan)**

Buka file `koneksi.php` dan sesuaikan jika konfigurasi MySQL-mu berbeda:
```php
$host    = "localhost";
$user    = "root";
$pass    = "";       // Isi password jika ada
$nama_db = "ukk";
```

**5. Jalankan aplikasi**

Buka browser dan akses:
```
http://localhost/ujian%20lab%20riskhan/
```
atau:
```
http://localhost/ujian lab riskhan/
```

---

## 🧭 Cara Penggunaan

| Halaman              | URL                          | Fungsi                        |
|----------------------|------------------------------|-------------------------------|
| Daftar Produk        | `index.php`                  | Lihat semua produk            |
| Tambah Produk        | `tambah_produk.php`          | Isi form & upload gambar      |
| Edit Produk          | `edit_produk.php?id={id}`    | Ubah data produk              |
| Hapus Produk         | `proses_hapus.php?id={id}`   | Hapus (via link di tabel)     |

---

## 🤝 Kontribusi

Project ini dibuat untuk tujuan ujian laboratorium. Jika ingin berkontribusi, silakan buat *pull request* dengan penjelasan perubahan yang dilakukan.

---

## 👨‍💻 Author

**Shizukaa (shizukaudzri)**
> Dibuat untuk Ujian Laboratorium 2024
