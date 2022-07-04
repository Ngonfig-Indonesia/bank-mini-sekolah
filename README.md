
## Web Portal Sekolah

Web Portal Sekolah dibangun menggunakan Framework Laravel 9 sebagai dasar dalam membuat sistem informasi tersebut, dalam hal ini aplikasi di bangun untuk meningkatkan eksistensi dalam sebuah jurusan akutansi tersebut. selain itu fitur utama nya adalah Bank Mini Sekolah.

## Fitur Web Portal

- **[Data Siswa]**
- **[Data Guru]**
- **[Data Alumni]**
- **[Gambar Slide show]**
- **[Artikel]**
- **[Bank Mini Sekolah]**

## Tutorial
Download Bank Mini Sekolah
```
git clone https://github.com/Ngonfig-Indonesia/bank-mini-sekolah.git
```
Install Composer
```
composer install
```
Copy file .env
```
cp .env.example .env
```
Edit File .env
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=websekolah
DB_USERNAME=root
```
Aktifkan Storage Link
```
php artisan storage:link
```
Migration Database
```
php artisan migration
```
Jalankan Aplikasi nya
```
php artisan serve
```
## Contributing

Silahkan yang ingin ikut Berkontribusi bisa menghubungi saya lewat Email : ngonfigid.8000@gmail.com

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
