@extends('template/main')

@section('title', 'index')

@section('content')

    <div class="container d-flex justify-content-between">
        <h1 class="ml-5 mt-3">Ubah Data Siswa</h1>

    </div>


    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="panel">
                    <div class="panel-heading">


                    </div>
                    <div class="panel-body">
                        @if (session('sukses_message'))
                            <div class="container mt-3">
                                <div class="alert alert-success" role="alert">
                                    {{ session('sukses_message') }}
                                </div>
                            </div>
                        @endif

                        <form method="POST" action="/siswa/ {{ $siswa->id }} /update" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="nama_depan">Nama Depan</label>
                                <input type="text" class="form-control" id="nama_depan" name="nama_depan"
                                    value="{{ $siswa->nama_depan }}">
                            </div>
                            <div class="form-group">
                                <label for="nama_belakang">Nama Belakang</label>
                                <input type="text" class="form-control" id="nama_belakang" name="nama_belakang"
                                    value="{{ $siswa->nama_belakang }}">
                            </div>
                            <div class="form-group">
                                <label for="jenis_kelamin">Jenis Kelamin</label>
                                <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                                    <option value="Lk" @if ($siswa->jenis_kelamin == 'Lk')
                                        selected @endif>Laki-laki</option>
                                    <option value="Pr" @if ($siswa->jenis_kelamin == 'Pr')
                                        selected @endif>Perempuan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="agama">Agama</label>
                                <input type="text" class="form-control" id="agama" name="agama" value="{{ $siswa->agama }}">
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <textarea name="alamat" id="alamat" class="form-control"
                                    cols="30">{{ $siswa->alamat }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="file">Image</label>
                                <input type="file" class="form-control" id="file" name="file">
                            </div>
                            <button type="submit" class="btn btn-warning text-light ml-3">Ubah</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    </div>

@endsection
