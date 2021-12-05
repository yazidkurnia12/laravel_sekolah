<?php

namespace App\Exports;

use App\Models\Siswa;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

// tambahkan WithMapping pada class 
class SiswaExport implements FromCollection, WithMapping, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */

    // function collection
    public function collection()
    {
        return Siswa::all();
    }

    // menambhkan heading pada kolom2
    public function headings(): array
    {
        return [
            'Nama Lengkap',
            'Jenis Kelamin',
            'Agama',
            'Rata-Rata Nilai',
        ];
    }

    // function mapping untuk menampilkan data
    public function map($siswa): array
    {
        return [
            // diambil dari kuztom function nama lengkap
            $siswa->nama_lengkap(),
            $siswa->jenis_kelamin,
            $siswa->agama,
            $siswa->RataRataNilai()

        ];
    }
}
