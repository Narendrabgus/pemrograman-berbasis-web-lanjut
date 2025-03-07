<?php
    class PwlMahasiswa{ // nama dari class ini harus diawali dengan huruf besar
                        // nama dari class harus sama dengan nama file
        //daftar properti / atribut (properti dan atribut sama saja) yang akan digunakan
        public $nim; // dalam php, program akan mengidentifikasi secara otomatis apakah atribut itu integer atau float atau string 
        public $nama;
        public $programStudi;
        public $universitas;

        // ini adalah method
        // sebelum method harus mengidentifikasi/mendeklarasikan properti/atribut yang akan digunakan
        function setData($universitas, $nim, $nama, $programStudi){   // dalam kurung "(...)" yang terdapat setelah method itu namanya parameter
                                                        // untuk method yang menyimpan nilai seperti setData (nama method boleh bebas tidak harus setData) itu harus mengisi parameter
            $this->nim = $nim; 
            $this->nama = $nama;
            $this->programStudi = $programStudi;
            $this->universitas = $universitas;
        } 
        function getData(){                             // pada method yang mengambil atau menampilkan data itu tidak perlu mengisi parameter karena method tersebut hanya mengambil data yang sudah ada
            return [
                "
                <br> <br>
                Data Mahasiswa $this->universitas : <br>
                nim => $this->nim <br> 
                nama => $this->nama <br> 
                programStudi => $this->programStudi <br> <br>"
            ];   // panah tunggal "->" digunakan untuk mengakses selain dalam array, disini digunakan untuk mengakses atribut nim 
        }// sedangkan panah ganda "=>" digunakan untuk mendefinisikan pasangan kunci dan nilai dalam array asosiatif, tidak bisa digunakan selain di array
    }