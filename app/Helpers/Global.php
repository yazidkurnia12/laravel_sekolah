<?php
use App\Models\Siswa;
use App\Models\Guru;

// helper berfungsi untuk menangani operasi yang akan digunakan berulang kali
    function Ranking5Besar(){

        $data['siswa'] = Siswa::all();

        // untuke melakukan kustomisasi terhadap nilai yang diambil dari model kita dapat menggunakan laravel map
        $data['siswa'] = $data['siswa']->map(function($s){
            $s->RataRataNilai = $s->RataRataNilai(); // mengirimkan nilai dari kustom function model ke dalam property $s
            return $s;
        });
        /**
         * namun dikarenakan kebutuhan untuk mengurutkan data untuk menentukan nilai
         * maka kita akan menggunakan helper bawaan laravel yaitu sortby
         */

         $data['siswa'] = $data['siswa']->sortByDesc("RataRataNilai")->take(3);
         // take untuk mengambil hanya beberapa data sesuai kebutuhan
         return $data['siswa'];

    }

    // setelah helper dibuat daftarkan helper didalam file composer.json pada autoload

    function TotalSiswa()
    {
        return $data['total_siswa'] = Siswa::count();
    }
    function TotalGuru()
    {
        return $data['total_guru'] = Guru::count();
    }