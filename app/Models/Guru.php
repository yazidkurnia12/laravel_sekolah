<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;
    protected $table = 'guru';
    protected $fillable = ['nama', 'telpon', 'alamat'];

    public function mapel() //untuk merelasikan guru dan mapel dengan relasi one to many nama function harus sama dengan nama table relasinya
    {
        return $this->hasMany(Mapel::class);  
    }
}
