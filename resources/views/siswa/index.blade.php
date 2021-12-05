@extends('template/main')

@section('title', 'index')

@section('content')

    @if (session('sukses_message'))
        <div class="container mt-3">
            {{-- <div class="alert"> --}}
                <div class="alert alert-success">
                    {{ session('sukses_message') }}
                </div>
            {{-- </div> --}}
        </div>
    @endif

    <div class="container d-flex justify-content-between">
        <h1 class="ml-5 mt-3">Data Siswa</h1>

    </div>


    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">Data Siswa</h3>
                    </div>

                    <div class="panel-body">

                        <div class="container">
                            <button type="button" class="btn btn-primary rounded-pill" data-toggle="modal"
                                data-target="#staticBackdrop">
                                Tambah Data
                            </button>
                            <a href="{{ url('/siswa/export') }}" class="btn btn-success">Download EXCEL</a>
                            <a href="{{ url('/siswa/export/pdf') }}" class="btn btn-danger">Download PDF</a>
                        </div>
                       
                        <table class="table table-hover mt-3">
                            <thead>
                                <tr class="text-light">
                                    <td>No</td>
                                    <td>Nama depan</td>
                                    <td>Nama belakang</td>
                                    <td>Jenis kelamin</td>
                                    <td>Agama</td>
                                    <td>Alamat</td>
                                    <td>Rata-Rata Nilai</td>
                                    <td>Aksi</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data_siswa as $d)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            <a href="{{ url('siswa/profile/' . $d->id) }}">{{ $d['nama_depan'] }}</a>
                                        </td>
                                        <td>
                                            <a href="{{ url('siswa/profile/' . $d->id) }}">{{ $d['nama_belakang'] }}</a>
                                        </td>
                                        <td>{{ $d['jenis_kelamin'] }}</td>
                                        <td>{{ $d['agama'] }}</td>
                                        <td>{{ $d['alamat'] }}</td>
                                        {{-- pemanggilan kustom function --}}
                                        <td>{{ $d->RataRataNilai() }}</td>
                                        <td> 
                                            <a href="/siswa/{{ $d['id'] }}/edit" class="btn btn-warning btn-sm">Edit</a>
                                            {{-- menambahkan siswa-id sebagai kustom function yang menyimpan id siswa --}}
                                          <a href="#" class="btn btn-danger btn-sm delete" siswa-id="{{ $d->id }}">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach 
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- modal --}}

    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ url('/siswa/create') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="nama_depan">Nama Depan</label>
                            <input type="text" class="form-control @error('nama_depan') is-invalid @enderror"
                                id="nama_depan" name="nama_depan" value="{{ old('nama_depan') }}">
                            @error('nama_depan')
                                <div class="text-sm text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="nama_belakang">Nama Belakang</label>
                            <input type="text" class="form-control" id="nama_belakang" name="nama_belakang"
                                value="{{ old('nama_belakang') }}">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                                name="email" value="{{ old('email') }}">
                            @error('email')
                                <div class="text-sm text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                            <select class="form-control @error('jenis_kelamin') is-invalid @enderror" id="jenis_kelamin"
                                name="jenis_kelamin">
                                <option value="Lk" {{ old('jenis_kelamin') == 'Lk' ? ' selected' : '' }}>Laki-laki</option>
                                <option value="Pr" {{ old('jenis_kelamin') == 'Pr' ? ' selected' : '' }}>Perempuan</option>
                            </select>
                            @error('jenis_kelamin')
                                <div class="text-sm text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="agama">Agama</label>
                            <input type="text" class="form-control @error('agama') is-invalid @enderror" id="agama"
                                name="agama" value="{{ old('agama') }}">
                            @error('agama')
                                <div class="text-sm text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <textarea name="alamat" id="alamat" class="form-control"
                                cols="30">{{ old('alamat') }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="file">Image</label>
                            <input type="file" class="form-control" id="file" name="file">
                            @error('file')
                                <div class="text-sm text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('footer')
    <script>
        // jquery
        $('.delete').click(function () {
            var siswa_id = $(this).attr('siswa-id');

            // script js swal dapat diambil dari situs swal
            swal({
                title: "Apakah anda Yakin?",
                text: "Mau menghapus data siswa " + siswa_id + "?",
                icon: "warning",
                buttons: true,
                dangerMode: true,
                })
                .then((willDelete) => {
                if (willDelete) {
                    window.location="/siswa/"+ siswa_id +"/delete";
                } else {
                    swal("Data tidak dihapus");
                }
            });
        });
    </script>
@endsection
