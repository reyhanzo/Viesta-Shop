# Website Viesta Shop untuk PBKK (laravel)
Dibuat untuk menyelesaikan tugas :v
## Catatan dan masalah deployment
1. Pastikan composer sudah terinstall, node.js opsional. Jalankan di folder project.
```cmd
composer install
```
2. Buat database dan sesuaikan credentialsnya di .env
```
DB_DATABASE=<nama DB>
DB_USERNAME=<nama username DB>
DB_PASSWORD=<password DB>
```
3. Buat app key untuk laravel
```cmd
php artisan key:generate
```
4. Buat link dari public ke storage
```cmd
php artisan storage:link
```
5. Jalankan migrations
```cmd
php artisan migrate
```