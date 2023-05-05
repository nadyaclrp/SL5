# Self Learning 5 Web Programming 
Nama	:		Nadya Clarine Purba  <br>
NIM	: 		2502040511<br>
Kelas	: 		PPTI 12<br>
<br>
Website Profile ini dikumpulkan dengan tujuan pemenuhan tugas Self-Learning 5  mata kuliah Web Programming, dengan menggunakan **Laravel** dan CSS Framework yaitu **Tailwind**.<br>
Pada web ini akan ditampilkan profile pribadi  yang akan memberikan gambaran tentang diri saya, lewat beberapa section, berupa: biodata, skills, pengalaman project, riwayat pendidikan, dan kontak.

![DisplayFull](https://github.com/nadyaclrp/SL5/blob/main/Documentation/ProfileView.gif)

## Full View
![FullView](https://github.com/nadyaclrp/SL5/blob/main/Documentation/FullView.png)


## Landing Page
Ini adalah tampilan awal website yang berisikan navigasi bar yang terdiri dari section-section pada website ini, yaitu  **Biodata, Skills, Experiences, Education, dan Reach**. Dilengkapi dengan foto diri pada sisi kiri serta kategori website, nama diri, dan deskripsi singkat halaman pada sisi kanan.


![LandingPage](https://github.com/nadyaclrp/SL5/blob/main/Documentation/Landing%20Page.png)

## Biodata
Section ini berisikan deskripsi diri dan hobi saya selaku pembuat website.

![AboutMe](https://github.com/nadyaclrp/SL5/blob/main/Documentation/Biodata.png)

## Skills
Section ini berisikan skills general dilengkapi rating yang mucul ketika di hover, dan rincian bahasa pemograman yang sudah saya pelajari.


![Skills](https://github.com/nadyaclrp/SL5/blob/main/Documentation/Skills.png)


## Experiences
Section ini berisikan nama aplikasi, deskripsi aplikasi, dan gambar tampilan aplikasi dari projek kolaborasi dengan tim saya. Warna border project dibedakan berdasarkan jenis projectnya, border *red* (merah) untuk project "Machine Learning", border *gold* (emas kekuningan) untuk project "Artificial Intellegence", dan border *silver* (perak) untuk project dengan jenis lainnya. Kemudian akan ditampilkan project details dari tiap project yang diklik.


![Experiences](https://github.com/nadyaclrp/SL5/blob/main/Documentation/Experiences.png)


**Fugemy's Project Details View**
![ProjectDetails_Fugemy](https://github.com/nadyaclrp/SL5/blob/main/Documentation/ProjectDetails_Fugemy.png)

## Education
Section ini berisikan riwayat pendidikan formal dan riwayat pencapaian saya.


![Education](https://github.com/nadyaclrp/SL5/blob/main/Documentation/Education.png)


## Reach
Section ini dibuat dengan tampilan berupa footer yang berisikan gambar diri, kontak dan social media yang dapat dihubungi, pilihan section, serta keterangan institusi yang dituju. Yang mana, ketika diklik tiap-tiap ikon dan tulisannya dapat langsung redirect ke link pribadi  kontak dan sosial media saya.

![Reach](https://github.com/nadyaclrp/SL5/blob/main/Documentation/Reach.png) 


# Tutorial Mengunduh dan Menjalankan Website

--> **Dengan Git Clone**
1. Install Git terlebih dahulu, pada perangkat Anda. Installasi dapat menggunakan link berikut: https://www.atlassian.com/git/tutorials/install-git#windows
2. Jalankan clone repository ini pada terminal perangkat Anda
`> https://github.com/nadyaclrp/SL5.git`.
3. Buka folder repository yang sudah terdownload pada code editor Anda (Disarankan menggunakan Visual Studio Code).
4. Jalankan perintah `composer install` dan `cp .env.example .env` pada terminal.
5. Jalankan perintah `npm install` untuk menginstall node package manager pada device.
6. Jalankan perintah `npm run build` dan `php artisan key:generate`.
7. Jalankan program dengan perintah `php artisan serve`.
8. Anda sudah dapat menjalankan program secara langsung pada device Anda, melalui link yang ditampilkan pada terminal.


--> **Manual**
1. Download repository dengan buka dan pilih pada tombol `Code > Download ZIP`.
2. Buka folder yang sudah didownload pada Code Editor Anda (Disarankan menggunakan Visual Studio Code).
3. Install npm package dengan NodeJS terlebih dahulu pada device Anda. Atau dapat mengikuti cara pada link berikut: https://radixweb.com/blog/installing-npm-and-nodejs-on-windows-and-mac
4. Install package Tailwind CSS untuk Laravel pada device Anda. Atau dapat mengikuti cara pada link berikut: https://tailwindcss.com/docs/guides/laravel
5. Buka terminal code editor Anda.
6. Jalankan perintah `npm run dev` dan `php artisan serve` untuk menjalankan program.
7. Anda sudah dapat menjalankan program secara langsung pada device Anda, melalui link yang ditampilkan pada terminal.
