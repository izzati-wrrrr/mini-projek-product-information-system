# Product Information System

## Deskripsi
Product Information System adalah sistem sederhana untuk mengelola dan menampilkan informasi produk. Sistem ini menggunakan konsep pemisahan antara Data Layer, Processing Layer, dan Presentation Layer.

## Struktur Project
Product_Information_System/
│
├── blueprint/
├── products.php
├── functions.php
├── index.php
└── README.md

## Arsitektur Sistem
### 1. Data Layer
File: `products.php`
Berisi data produk dalam bentuk multidimensional array.

Data yang disimpan meliputi:
- ID
- Nama
- Kategori
- Harga
- Stok
- Deskripsi

### 2. Processing Layer
File: `functions.php`
Berisi fungsi untuk melakukan proses terhadap data produk.

Fungsi yang digunakan:
- `hitungTotalNilaiStok()` untuk menghitung nilai stok produk.
- `stokKritis()` untuk mengecek apakah stok produk kurang dari 3.

### 3. Presentation Layer
File: `index.php`
Berfungsi untuk menampilkan data produk dalam bentuk tabel HTML.
File ini menggunakan `require_once` untuk mengambil data dan fungsi, kemudian menggunakan `foreach` untuk menampilkan setiap produk.

## Fitur
- Menampilkan daftar produk
- Menghitung total nilai aset gudang
- Menghitung nilai stok setiap produk
- Menandai produk dengan stok kritis
- Menampilkan informasi produk dalam tabel

## Teknologi
- PHP
- HTML
- CSS
- Laragon

## Cara Menjalankan
1. Simpan folder project di:

   `C:\laragon\www\`

2. Jalankan Laragon dan klik **Start All**.
3. Buka browser.
4. Akses:

   `http://localhost/Product_Information_System/`

## Hasil
Sistem menampilkan tabel informasi produk beserta total nilai aset gudang.
Produk dengan stok kurang dari 3 akan diberi tanda visual sebagai stok kritis.