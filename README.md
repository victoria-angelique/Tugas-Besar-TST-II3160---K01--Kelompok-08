# Sistem Manajemen Wahana Dududu World

## Penjelasan sistem

Sistem Manajemen Wahana menyediakan tampilan data wahana yang tersedia di taman Bermain Dududu World. Sistem Manajemen Wahana juga menyediakan fitur rating untuk user memberikan penilaian atas wahana yang sudah dimainkan. Fitur rating ini menyediakan penilaiaan dari angka 1-5 yang mana 5 artinya asyik dan 1 artinya tidak asyik.

## Fitur utama Sistem Wahana Dududu World

Sistem wahana dududu world juga menyediakan **Chart Wahana Terfavorit** dan **Chart Domisili Kota Pengunjung Terbanyak** yang didapat dari sistem reservasi Takut.com

### Cara menjalankan sistem

 1. Clone repository berikut dengan link berikut ini
   ```sh
   git clone https://github.com/your_username_/Project-Name.git
   ```
2. Pastikan **xampp** atau **manager osx** sudah berjalan dan terlampir gambar seperti berikut
   <img width="673" alt="Screenshot 2023-12-18 at 20 27 33" src="https://github.com/victoria-angelique/Tugas-Besar-TST-II3160---K01--Kelompok-08/assets/91114869/65be6ac8-9e93-4538-a8e1-1b4fc83ac20b">
3. Buka link **php myadmin** http://localhost/phpmyadmin/ (http://localhost/phpmyadmin/) dengan web browser, kemudian buatlah database baru dengan nama wahanaku dengan click new sehingga terbuat database seperti berikut
   <img width="1105" alt="Screenshot 2023-12-18 at 20 32 26" src="https://github.com/victoria-angelique/Tugas-Besar-TST-II3160---K01--Kelompok-08/assets/91114869/58e43150-7483-482f-8d1f-019de510307f">
5. Selanjutnya, fetch data dengan command berikut untuk memasukkan data seeder ke dalam database di php my admin tadi
   ```sh
   php spark migrate:refresh
   ```
   ```sh
   php spark db:seed AllSeeder
   ```
5. Jalankan command berikut juga untuk menjalankan sistem di link localhost kalian menggunakan link berikut [http://localhost:8080/] (http://localhost:8080/)
   ```sh
   php spark serve
   ```
