<?php
    include "PwlMahasiswa.php"; // ini adalah syntax untuk memanggil file dan dapat menggunakan class yang sudah ada di dalam file yang dipanggil
                                // jika dalam satu folder maka cukup panggil nama filenya saja
    $MahasiswaTI = new PwlMahasiswa();  // "new 'class(disini pakai PwlMahasiswa)' " adalah syntax untuk menambahkan objek baru yang disimpan di variable MahasiswaTI 
                                        // setelah "new" itu harus sama dengan nama class yang berkaitan
                                        // jadi, cara kerjanya adalah 'variable' MahasiswaTI menyimpan nilai baru dengan menggunakan metode yang ada dalam file PwlMahasiswa.php
    $MahasiswaUndip = new PwlMahasiswa();
    $MahasiswaUdinus = new PwlMahasiswa();

    $MahasiswaTI -> setData ('Universitas Terbuka', '12345678', 'Fulan', 'Hukum'); // parameter dalam setData itu berisikan data sesuai dengan urutan yang telah dibuat
    // line diatas ini itu 'setData' dipanggil oleh variable $MahasiswaTI untuk memasukkan nilai yang berada di dalam parameter 
    print_r($MahasiswaTI -> getData()); // print_r digunakan untuk menampilkan / output hasil array
    // line diatas ini itu 'getData' dipanggil oleh variable $MahasiswaTI untuk menampilkan data (menggunakan 'print_r') yang sudah di input menggunakan 'setData' 

    $MahasiswaUndip -> setData ('Universitas Diponegoro', '40020623650145', 'Pasya Oduane', 'Informasi dan Hubungan Masyarakat');
    $MahasiswaUdinus -> setData ('Universitas Dian Nuswantoro', 'A11.2023.14983', 'Muhammad Narendra Bagus Nurseto', 'Teknik Informatika');

    print_r($MahasiswaUndip -> getData());
    print_r($MahasiswaUdinus -> getData());

