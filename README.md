# Laravel crud api sederhana

ini adalah projek laravel sederhana yang saya buat menggunakan laravel versi 8 yang berfokus pada pembuatan api crud atau (create, read, update, delete), projek ini sangat mudah untuk dipahami bagi kalian yang lagi belajar membuat api menggunakan laravel versi 8.

## Dibuat menggunakan
- Laravel versi 8

## Fitur utama (CRUD)
- Create (Tambah data)
- Read (Menampilkan data)
- Update (Mengubah data)
- Delete (Menghapus data)

## Instalasi 
- buka direktori project di terminal anda, lalu ketikan atau copy paste perintah di bawah (step by step).
- https://github.com/badrunp/laravel-crud-api-sederhana.git
- cp .env.example .env (copy paste file .env.example)
- composer install
- php artisan optimize:clear 
- php artisan key:generate (generate app key)
- php artisan migrate (migratsi database)
- php artisan db:seed (membuat 10 dumy data posts)
- php artisan serve (menjalankan local serve)

## Route API
- http method GET http://localhost:8000/api/posts (menampilkan semua data posts)
- http method GET http://localhost:8000/api/post/1 (menampilkan hanya satu data post berdasarka id)
- http method POST http://localhost:8000/api/post (menambahkan data post)
- http method PUT http://localhost:8000/api/post/1 (mengubah data post berdasarkan id)
- http method DELETE http://localhost:8000/api/post/1 (menghapus data post berdasarkan id)

ingat http method di atas selalu berbeda beda dengan url route yang sama

## Author 
- Muhammad Badrun




