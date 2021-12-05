@extends('template/main')

@section('title', 'Add Post')

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
                        <h3 class="panel-title">Data Post</h3>
                    </div>

                    <div class="panel-body">

                        <div class="container">
                           
                            <a href="{{ route('post.add') }}" class="btn btn-success">Add New Post</a>
                         
                        </div>
                       
                        <table class="table table-hover mt-3">
                            <thead>
                                <tr class="text-light">
                                    <th>ID</th>
                                    <th>TITLE</th>
                                    <th>USER</th>
                                    <th>ACTIONS</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($post as $d)
                                    <tr>
                                        <td>{{ $d->id }}</td>
                                        <td>{{ $d->title }}</td>
                                        <td>{{ $d->user->name }}</td>
                                        <td> 
                                            {{-- pemanggilan prety url --}}
                                            <a target="_blank" href="{{ route('site.single.post', $d->slug) }}" class="btn btn-info btn-sm">View</a>
                                            <a href="#" class="btn btn-warning btn-sm">Edit</a>
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
