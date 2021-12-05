<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class checkRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$roles)
    {
        //middleware berfungsi untuk mengatur proses sebelum diekseskusi pada controller contohnya ialah pengecekan role pada sistem login multi user
        if (in_array($request->user()->role, $roles)) { // kondisi bila role dari user yang baru diinputkan itu ada maka lanjutkan ekseskusi controller
            # code...
            return $next($request);
        } // jika tidak ada maka
        return redirect('/');
        //setelah selesai tambahkan middleware di kernel.php
    }
}
