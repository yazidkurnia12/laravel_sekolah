@extends('template.main')


@section('title', 'Dashboard')
@section('content')

<div class="col-md-3">
    <div class="metric bg-white">
        <span class="icon"><i class="lnr lnr-user"></i></span>
        <p>
            <span class="number">{{ TotalSiswa() }}</span>
            <span class="title">Total Siswa</span>
        </p>
    </div>
</div>
<div class="col-md-3">
    <div class="metric">
        <span class="icon"><i class="lnr lnr-user"></i></span>
        <p>
            <span class="number">{{ TotalGuru() }}</span>
            <span class="title">Total Guru</span>
        </p>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">Juara Umum dan Peringkat 5 Besar</h3>
                </div>

                <div class="panel-body">

                    <table class="table table-hover mt-3 table-striped">
                        <thead>
                            <tr class="text-light">
                                 <td>Ranking</td>
                                 <td>Nama</td>
                                 <td>Nilai</td>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- memanggil function pada helper --}}
                            @foreach (Ranking5Besar() as $siswa)
                            <tr>
                               <td>{{ $loop->iteration }}</td>
                               {{-- <td>{{ $siswa->nama_depan }} {{ $siswa->nama_belakang }}</td> --}}

                               {{-- mengarahkan kepada custom function nama_lengkap pada model siswa --}}
                               <td>{{ $siswa->nama_lengkap() }}</td>
                               <td>{{ $siswa->RataRatanilai() }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
