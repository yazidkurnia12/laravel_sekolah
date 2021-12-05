<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guru;

class GuruController extends Controller
{
    public function profile(Guru $guru)
    {
        $data['title'] = 'Profile Page';
        $data['guru'] = $guru;
        // $data['guru'] = Guru::find($id);
        return view('guru.profile', $data);
    }
}
