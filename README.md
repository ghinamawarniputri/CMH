Ini website base laravel
Running nya: php artisan serve

---

## 📋 Prasyarat
    pastikan versi php di atas 8.2
---

## 🚀 Cara Instalasi

1. **Clone repository**:
   ```bash
   git clone https://github.com/ghinamawarniputri/CMH.git
   ```
2. **Aktifkan Laragon/XAMPP**:

3. **Simpan file Laragon/XAMPP**:
   ```bash
   Laragon -> www
   XAMPP -> htdocs
   ```
4. **Masuk ke dalam file yang sudah di clone**
   ```bash
   $ Ctrl + Shift + ` (buka terminal)
   $ php --ini
    - klik path yang ada (php.ini)
    - search extension_dir = "ext" dan extension=zip
    - hapus tanda ;
   $ php -m 
    - cek apakah ada tulisan zip 
   $ composer install
   $ cp .env.example .env
    - klik .env 
    - ganti database untuk menyesuaikan (yukmaric_bnc_cookies)
   $ php artisan key:generate
   $ php artisan migrate
   ```
5. **Running project**
    ```bash
    php artisan serve
    ```
---

## 📊 Cara Instalasi Database

1. **Masuk ke lokalhost phpmyadmin**
```bash
create database yukmari_bnc_cookies
```

2. **Klik import**
```bash
Masukkan file sql yang ada di folder yang sudah di clone
```
---

## ✅ UPLOAD GITHUB
1. **push github**
    ```bash
    git add .
    git commit -m "deskripsi"
    git pull origin main
    git push -u origin main
    ```
---