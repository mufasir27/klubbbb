erd
![Screenshot (1)](https://github.com/user-attachments/assets/cad84762-5f25-481b-b351-744215c92119)

uml
![Untitled Diagram drawio](https://github.com/user-attachments/assets/85308387-e523-4e36-9bf9-8049112a1d88)


# Konsep Dari Web Yang Saya Buat
Website yang sedang Saya buat merupakan platform untuk imformasi klub bola
# Fitur Yang Tersedia
### Halaman Awal : 
- beranda
- dashboard
- Login
### Authentication :
- Login
### Multi User :
- Admin
   * dapat menambahkan User 
   * dapat menambahkan Kategori
- user
  * datpat mengakses Beranda
- pemain
- * dapat mengakses data pemain  
### yang dapat di akses oleh semua penguna
- Halamn awal
- login
- logout
  
  

# Teknologi Yang Di Gunakan
- Laravel 9
- bootstrap 5
# 1. Prasyarat 
### Pastikan perangkat Anda telah memenuhi prasyarat berikut sebelum menginstal Repository ini:

- PHP: Versi 8.1 atau lebih baru.
- Composer: Dependency Manager untuk PHP.
- MySQL/SQLite: Untuk database.

# 2. Langkah Instalasi  

### Langkah 1: Clone Repository 
```
git clone https://github.com/mufasir27/klubbbb.git
```

### Langkah 2: Pindah ke Direktori Proyek 

```
cd klubbbb
```
- Setelah Itu Masuk Ke dalam Visual Studio Code

```
code .
```
### Langkah 3: Instal Dependensi laravel
```
composer install
```
### Langkah 4: Copy atau Salin File Konfigurasi (.env)

##### Salin file .env.example menjadi .env untuk mengatur variabel lingkungan atau Mengunkan Code berikut:

```
cp .env.example .env
```

### Langkah 5: Atur Konfigurasi .env

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
```

### Langkah 6: Migrasi Database

- Buat sebuah Databases Di xampp Terlebih Dahulu

```
php artisan migrate
```


### Langkah 7: Generate Application Key

- Langkah ini sangat penting untuk setiap aplikasi Laravel, karena tanpa kunci ini, beberapa fitur tidak akan berjalan sebagaimana mestinya :

```
php artisan key:generate
```

### Langkah 8: Jalankan Server Pengembang


php artisan serve




<h1 align="center">Tugas Ukk</h1>
