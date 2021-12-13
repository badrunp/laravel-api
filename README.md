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
pastikan sudah mengistal git dan mengistall php minimal versi 7.4.14+ dan juga composernya.

- buka direktori project di terminal anda, lalu ketikan atau copy paste perintah di bawah ini (step by step)
- git clone https://github.com/badrunp/laravel-crud-api-sederhana.git
- cp .env.example .env (copy paste file .env.example)
- composer install
- php artisan optimize:clear 
- php artisan key:generate (generate app key)
- php artisan migrate (migratsi database)
- php artisan db:seed (membuat 10 dumy data posts)
- php artisan serve (menjalankan local serve)

## Route API
http method <b>POST</b> dan <b>PUT</b> harus mengrimkan beberapa data untuk ditambahkan (POST) atau di ubah (PUT) jadi harap melihat kembali data apa yang ada didalam database table posts tersebut.

- http method <b>GET</b> http://localhost:8000/api/posts (menampilkan semua data posts)
- http method <b>GET</b> http://localhost:8000/api/post/1 (menampilkan hanya satu data post berdasarka id)
- http method <b>POST</b> http://localhost:8000/api/post (menambahkan data post)
- http method <b>PUT</b> http://localhost:8000/api/post/1 (mengubah data post berdasarkan id)
- http method <b>DELETE</b> http://localhost:8000/api/post/1 (menghapus data post berdasarkan id)

ingat http method di atas selalu berbeda beda dengan url route yang sama

## Pembuat 
- Muhammad Badrun




