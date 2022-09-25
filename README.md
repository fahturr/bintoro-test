# Test Teknis (PT. Bintoro Sinergi Korpora)

<p align="center"><a href="https://bintorocorp.co.id/wp-content/uploads/2021/07/LOGO-FORMAT-1-27.webp" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## Requirement

- Node.js **(v16.17+)**
- Composer **(v2.4.1+)**
- Docker **(v20.10.18+)**

## Installation

Install terlebih dahulu dependencies yang diperlukan untuk menjalankan projek ini
```bash
npm install && composer update
```

## Usage

Duplikat file **.env.example** lalu rename menjadi **.env**, dan isi variablenya seperti berikut berikut
```dotenv
DB_DATABASE=homestead
DB_USERNAME=secret
DB_PASSWORD=secret
```
Generate key App
```bash
php artisan key:generate
```
Jalankan database dari Docker
```bash
docker compose up -d
```
Lakukan migration untuk membuat table di database
```bash
php artisan migrate
```
Inisialisasi komponen Passport
```bash
php artisan passport:install
```
Masukkan **Client ID** dan **Client Secret** ke **.env** yang didapat saat memasukkan perintah `php artisan passport:install`
```dotenv
PASSPORT_PERSONAL_ACCESS_CLIENT_ID="client_id"
PASSPORT_PERSONAL_ACCESS_CLIENT_SECRET="client_secret"
```
Sebelum menjalankan program compile asset terlebih dahulu agar menjadi bundle
```bash
vite build
```
Setelah itu aplikasi sudah dapat dijalankan dengan mengetikkan 
```bash
php artisan serve
```
