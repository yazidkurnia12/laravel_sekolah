<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function editnilai(Request $request, $id)
    {
      $siswa = \App\Models\Siswa::find($id); // temukan data siswa dengan id tersebut
      $siswa->mapel()->updateExistingPivot($request->pk, ['nilai'  => $request->value]); 
      // model siswa dengan relasi model update nilai pada pivot pk
      // ['kolom' => request->value]
    }
}
