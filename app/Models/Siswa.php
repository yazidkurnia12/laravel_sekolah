<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $table = 'siswa';

    protected $fillable = ['user_id', 'nama_depan', 'nama_belakang', 'email', 'jenis_kelamin', 'agama', 'alamat', 'avatar'];

    public function getAvatar() // function digunakan untuk mengecek apakah gambar ada atau tidak di database
    {
        if (!$this->avatar) {
            return asset('images/default.jpg');
        }
        return asset('images/default.jpg');
    }

    // menghubungkan antara table siswa dengan table mapel
    public function mapel()
    {
        return $this->belongsToMany(Mapel::class)->withPivot(['nilai'])->withTimestamps(); // withTimesstamps menambahkan nilai pada kolom yg membutuhkan timestamps
    }

    /**
     * membuat custom function pada laravel
     * custom function merupakan function
     * yang dapat kita kustomisasi sendiri
     */

     public function RataRataNilai()
     {
        $total = 0; // deklarasi variable yang akan menyimpan nilai pada setiap siswa
        $hitung = 0;   
        foreach ($this->mapel as $mapel) {
            # code...
            $total += $mapel->pivot->nilai; // mentotalkan nilai dari masing2 siswa
            $hitung++; // menghitung total looping yang telah dilakukan
        }
        // $total == 0 ? 0 : berfungsi untuk menyeleksi seandainya data nilai 0
        return  $total == 0 ? 0 :  round($total/$hitung); // rata-rata
     }

     public function nama_lengkap()
     {
         return $this->nama_depan . ' ' . $this->nama_belakang;
     }
}
