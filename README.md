# Test Teknis (PT. Bintoro Sinergi Korpora)

<p align="center"><a href="https://bintorocorp.co.id" target="_blank"><img src="https://bintorocorp.co.id/wp-content/uploads/2021/07/LOGO-FORMAT-1-27.webp" width="400" alt="Laravel Logo"></a></p>

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

Masukkan **Client ID** dan **Client Secret** ke **.env** yang didapat saat memasukkan
perintah `php artisan passport:install`

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

## API Spec

## User

### POST /user/login

Request Body

```json
{
    "email": "fahtur.rf@gmail.com",
    "password": "123456"
}
```

Response Body

```json
{
    "message": "login success",
    "data": {
        "token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIzIiwianRpIjoiNTA5OGVhNjk1NDU1ODNiZTM3M2M2YjAyMzA4MzczMDc0ZTcwMTliN2E0NzliOGZmNGM2YjVhMjY5OTY0ZjU2YTY4ZjA3ZWI4NGNmODYyYzMiLCJpYXQiOjE2NjQwOTg0NDAuNTQ4NDM2LCJuYmYiOjE2NjQwOTg0NDAuNTQ4NDM4LCJleHAiOjE2OTU2MzQ0NDAuNTM0MjcxLCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.KsYSARbH-IoC9T3UQHEPIoi2GWlel5du8_JztHhh1yaw12yTww1CzOCjZlzaBGSLB3C1mjDeT1mkfCJsn7vb7CvklKMDlpXavRazjgn7F6MuqneYE6w90w-Djhls0RiV8Lc7pSEyJWZpzp48m4s2kyufwKWJQezXmb4Mhk2RQ856cY3V_5-c96AmADnDSc2n-qjIqCpvUo4-KrfJ3GWFChEcz1i8oQuRUNh8AUhmx_cQJjGk3aJXqx9msB5vhu88zizc8RKGeY_gVg0JwUDGHOHmsMaEUcGc8mLi42v-9odyVwo7Qd3D9m41wVL8TN1Nnc6DQHffe7qdKSWEgTrQxbU7MXG7PPXayEnCWLmRge7bD5J1dX7aG5G4QIbDYb7xBSZQn_rZKjzF5DBQgSQGuZWpdCCM6iuYlqjLyU7DI1aHJYGLI5jumC6MOhEAcxJagbPJWdwo0nqxmDPqAfgeTovuMSaXh8ipNA67hXNW2gCjz9REZ71A_Ri-Kjk0NVqdlepWPSFoUX625iyzslhBY-ZVSwQHfrulr_djtJ-SHBHuezh_9w0_UPkb7r25VdiTt1PeqvraYnFdfg3ykgsj7InRHb_0QIarcitrg42ys90bBBksHIB321DpdBJFOGur3J5QIJez7zYMlXPjkFh8gHgmLXbCrWcUxxbQkZjq8KI"
    }
}
```

### POST /user/register

Request Body

```json
{
    "name": "Fahtur",
    "email": "fahtur.rf@gmail.com",
    "password": "123456"
}
```

Response Body

```json
{
    "message": "user registered successfully"
}
```

## Blog

## GET /blog

Response Body

```json
{
    "message": "user registered successfully",
    "data": [
        {
            "id": 1,
            "title": "Corporate Social Responsibilites",
            "description": "Pada Kali ini kita menunjukkan sebuah program",
            "content": "Corporate Social Responsibility adalah aktivitas bisnis dimana perusahaan bertanggung jawab secara sosial kepada pemangku kepentingan dan masyarakat luas sebagai bentuk perhatiannya dalam meningkatkan kesejahteraan dan berdampak positif bagi lingkungan.",
            "id_user": 1,
            "created_at": "2022-09-25T09:34:11.000000Z",
            "updated_at": "2022-09-25T09:34:11.000000Z"
        }
    ]
}
```

## GET /blog/{id}

Response Body

```json
{
    "message": "user registered successfully",
    "data": [
        {
            "id": 1,
            "title": "Corporate Social Responsibilites",
            "description": "Pada Kali ini kita menunjukkan sebuah program",
            "content": "Corporate Social Responsibility adalah aktivitas bisnis dimana perusahaan bertanggung jawab secara sosial kepada pemangku kepentingan dan masyarakat luas sebagai bentuk perhatiannya dalam meningkatkan kesejahteraan dan berdampak positif bagi lingkungan.",
            "id_user": 1,
            "created_at": "2022-09-25T09:34:11.000000Z",
            "updated_at": "2022-09-25T09:34:11.000000Z"
        }
    ]
}
```

## POST /blog

Request Header

```http request
Authorization: Bearer <Token>
```

Request Body

```json
{
    "title": "Corporate Social Responsibilites",
    "description": "Pada Kali ini kita menunjukkan sebuah program",
    "content": "Corporate Social Responsibility adalah aktivitas bisnis dimana perusahaan bertanggung jawab secara sosial kepada pemangku kepentingan dan masyarakat luas sebagai bentuk perhatiannya dalam meningkatkan kesejahteraan dan berdampak positif bagi lingkungan.",
    "id_user": 1
}
```

Response Body

```json
{
    "message": "blog posted successfully"
}
```

## PUT or PATCH /blog/{id}

Request Header

```http request
Authorization: Bearer <Token>
```

Request Body

```json
{
    "title": "Corporate Social Responsibilites",
    "description": "Pada Kali ini kita menunjukkan sebuah program",
    "content": "Corporate Social Responsibility adalah aktivitas bisnis dimana perusahaan bertanggung jawab secara sosial kepada pemangku kepentingan dan masyarakat luas sebagai bentuk perhatiannya dalam meningkatkan kesejahteraan dan berdampak positif bagi lingkungan.",
    "id_user": 1
}
```

Response Body

```json
{
    "message": "blog edited successfully"
}
```

## DELETE /blog/{id}

Request Header

```http request
Authorization: Bearer <Token>
```

Response Body

```json
{
    "message": "blog deleted successfully"
}
```
