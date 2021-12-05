<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Siswa;
use App\Exports\SiswaExport;
use App\Models\User;

// mendaftarkan class meetwebsite
use Maatwebsite\Excel\Facades\Excel;

// mendaftarkan class PDF
use PDF;

class SiswaController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('cari')) {
            # code...
            $data_siswa = Siswa::where('nama_depan', 'LIKE', '%' . $request->cari . '%')->get();
        } else {
            $data_siswa = Siswa::all();
        }
        return view('siswa.index', ['data_siswa' => $data_siswa]);
    }

    public function create(Request $request)
    {
        // memberikan validasi pada setiap inputan
        // dd($request->all());


        $this->validate($request, [
            'nama_depan' => 'required|min:5',
            'email' => 'required|email|unique:users',
            'jenis_kelamin' => 'required',
            'agama' => 'required',
            'file' => 'mimes:jpg, png, JPG, jpeg'
        ]);

        // mengirimkan data yang diterima dari inputan langsung ke dalam model
        $user = new User; // mendefinisikan model didalam variable

        //insert ke table user
        $user->role = 'siswa';
        $user->name = $request->nama_depan;
        $user->email = $request->email;
        $user->password = bcrypt('rahasia');
        $user->remember_token = Str::random(60);

        $user->save();
        // setelah berhasil diinputkan arahkan halaman ke halaman siswa dan berikan ->with untuk memberikan session flash
        $request->request->add(['user_id' => $user->id]); // mengambil id dari table user di saat akun user dibuat
        $siswa = Siswa::create($request->all()); //menyimpan seluruh data siswa didalam variable siswa dan insert ke table siswa
        if ($request->hasFile('file')) { //hasfile digunakan untuk memeriksa apakah ada file yang diupload
            # code...
            $request->file('file')->move('images/', $request->file('file')->getClientOriginalName()); //move berfungsi untuk mengirim gambar ke direktori
            $siswa->avatar = $request->file('file')->getClientOriginalName(); //mendapatkan nama file yang diupload
            $siswa->save(); // menyimpan hasil inputan request
        }
        return redirect('/siswa')->with('sukses_message', 'Data berhasil diinputkan');
    }


    public function edit(Siswa $siswa)
    {
        
        // menyimpan model didalam sebuah variable
        // $siswa = Siswa::where('id', $id)->first(); karena menggunakan route model binding maka coding bisa dihapus     
        return view('siswa.edit', ['siswa' => $siswa]);
    }

    public function update(Request $request, Siswa $siswa)
    {
        // dd($request->all());
        // $siswa = Siswa::find($id); // menyimpan model didalam sebuah variable (model memanggil data dengan id tertentu)
        if ($request->hasFile('file')) { //hasfile digunakan untuk memeriksa apakah ada file yang diupload
            # code...
            $request->file('file')->move('images/', $request->file('file')->getClientOriginalName()); //move berfungsi untuk mengirim gambar ke direktori
            $siswa->avatar = $request->file('file')->getClientOriginalName();
            $siswa->save();
        }
        return redirect('/siswa')->with('sukses_message', 'Data berhasil diubah');
    }

    public function delete(Siswa $siswa)
    {
        // $siswa = Siswa::find($id); // menyimpan model didalam sebuah variable (model memanggil data dengan id tertentu)
        $siswa->delete($siswa);
        return redirect('/siswa')->with('sukses', 'Data Berhasil Dihapus');
    }

    public function profile(Siswa $siswa)
    {
        $data['siswa'] = $siswa; // mengambil data berdasarkan id siswa
        $data['mata_pelajaran'] = \App\Models\Mapel::all();

        $categories = []; // buat variable baru untuk menyimpan array mata pelajaran
        $nilai = [];

        foreach ($data['mata_pelajaran'] as $d) { // looping seluruh data mata pelajaran
           if ($data['siswa']->mapel()->wherePivot('mapel_id', $d->id)->first()) { // cek apakah siswa memiliki data nilai pada mapel
               $categories[] = $d->nama; // simpan nama mata pelajaran kedalam categories

               //memanggil data dari table sisea dimana kolom mapel_id pada pivot = request->id pada table pivot ambil data pada kolom nilai
               $nilai[] = $data['siswa']->mapel()->wherePivot('mapel_id', $d->id)->first()->pivot->nilai; 
               /**
                * note :
                * nilai pada table pivot harus terisi seluruhnya 
                * contoh mata pelajaran ada 4, maka satu siswa harus telah memiliki nilai dari keempat
                * mata pelajaran tersebut didalam table pivot
                */
           }
        }

        return view('siswa.profile', $data, ['categories' => $categories, 'nilai' => $nilai]); 
    }

    public function addNilai(Request $request, Siswa $siswa)
    {
        // $siswa = Siswa::find($siswa); // memanggil data siswa berdasarkan id
        if ($siswa->mapel()->where('mapel_id', $request->mapel)->exists()) { //untuk mengecek apakah mapel dengan id sudah ada didatabse atau belum 
            /**
             * where pada kondisi untuk pivot table 
             */
            return redirect('/siswa/profile/' . $siswa->id)->with('failed', 'Data nilai Telah tersedia');
        }
        $siswa->mapel()->attach($request->mapel, ['nilai' => $request->nilai]); // menambahkan data kedalam pivot table

        return redirect('/siswa/profile/' . $siswa->id)->with('sukses', 'berhasil menambahkan nilai');
    }

    public function deleteNilai(Siswa $siswa ,$id_mapel)
    {
        // $siswa = Siswa::find($id_siswa);
        $siswa->mapel()->detach($id_mapel); // menghapus data dari table pivot dengan idmapel tertentu
        return redirect()->back()->with('sukses', 'nilai berhasil dihapus');
    }


    public function export()
    {
        return Excel::download(new SiswaExport, 'Siswa.xlsx');
    }

    public function exportPdf()
    {
        $data['siswa'] = Siswa::all(); // memanggil dan menyimpan data siswa didalam variable array
        $pdf = PDF::loadview('pdf.SiswaPdf', $data); // mamanggil file yang akan diload menjadi pdf
        return $pdf->download('Data Siswa.pdf'); // mendownload file yg telah diload
    }
}
