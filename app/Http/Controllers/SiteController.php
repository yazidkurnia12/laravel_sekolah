<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Str;
use App\Models\Siswa;
use App\Models\post;

class SiteController extends Controller
{
    public function home()
    {
        $post = post::all();
        return view('sites.home', compact(['post'])); 
    }

    public function registration()
    {
        return view('sites.registration');
    }

    public function postregistration(Request $request)
    {
        // dd($request->all());
        $user = new User; // mendefinisikan model didalam variable

        //insert ke table user
        $user->role = 'siswa';
        $user->name = $request->nama_depan;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->remember_token = Str::random(60);
        $user->save();

        $request->request->add(['user_id' => $user->id]); // mengambil id dari table user di saat akun user dibuat
        $siswa = Siswa::create($request->all()); //menyimpan seluruh data siswa didalam variable siswa dan insert ke table siswa
        
        return redirect('/')->with('sukses', 'pendaftaran berhasil');

    }

    public function singlepost($slug)
    {
        $post = post::where('slug', $slug)->first();
        return view('sites.singlepost', compact(['post']));
    }
}
