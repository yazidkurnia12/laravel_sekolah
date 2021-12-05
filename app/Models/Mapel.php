<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    use HasFactory;

    protected $table = 'mapel';
    protected $fillable = ['kode', 'nama', 'semester'];

    // menghubungkan antara table mapel dengan table siswa
    public function siswa()
    {
        return $this->belongsToMany(Siswa::class)->withPivot(['nilai', 'mapel_id']); //belongsToMany menghubungkan seluruh table siswa dengan table mapel
    }

    public function guru()
    {
        return $this->belongsTo(Guru::class);
    }
}
