@extends('template.main')

@section('header')
    {{-- link cdn editable --}}
    <link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/>

@section('title', 'Profile')
@section('content')

    {{-- <div class="main"> --}}
        <!-- MAIN CONTENT -->

        @if (session('sukses'))
            <div class="alert alert-success" role="alert">
                <h4>{{ session('sukses') }}</h4>
            </div>
        @elseif (session('failed'))
            <div class="alert alert-warning" role="alert">
                <h4>{{ session('failed') }}</h4>
            </div>

        @endif

        {{-- <div class="main-content"> --}}
            {{-- < class="container-fluid"> --}}
                <div class="panel panel-profile">
                    <div class="clearfix">
                        <!-- LEFT COLUMN -->
                        <div class="profile-left">
                            <!-- PROFILE HEADER -->
                            <div class="profile-header">
                                <div class="overlay"></div>
                                <div class="profile-main">

                                    <img @if ($siswa['avatar'] == null)
                                    src="{{ asset('images/default.jpg') }}"
                                @else
                                    src="{{ asset('images/' . $siswa['avatar']) }}"

                                    @endif style="width: 150px; height: 150px"
                                    class="img-circle" alt="Avatar">


                                    <h3 class="name">{{ $siswa['nama_depan'] }}</h3>
                                    <span class="online-status status-available">Available</span>
                                </div>
                                <div class="profile-stat">
                                    <div class="row">
                                        <div class="col-md-4 stat-item">
                                            {{--
                                            karena table telah berelasikita dapat menghitung berapa
                                            banyak mata pelajaran yang diambil oleh satu orang
                                            siswa tanpa menggunakan query yang dihandle
                                            langsung oleh laravel.
                                            --}}
                                            {{ $siswa->mapel->count() }} <span>Mata Pelajaran</span>
                                        </div>
                                        <div class="col-md-4 stat-item">
                                            {{ $siswa->RataRataNilai() }} <span>Rata-Rata Nilai</span>
                                        </div>
                                        <div class="col-md-4 stat-item">
                                            2174 <span>Points</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END PROFILE HEADER -->
                            <!-- PROFILE DETAIL -->
                            <div class="profile-detail">
                                <div class="profile-info">
                                    <h4 class="heading">Info Profile</h4>
                                    <ul class="list-unstyled list-justify">
                                        <li>Jenis Kelamin <span>{{ $siswa['jenis_kelamin'] }}</span></li>
                                        <li>Agama <span>{{ $siswa['agama'] }}</span></li>
                                        <li>Alamat <span>{{ $siswa['alamat'] }}</span></li>
                                        {{-- <li>Website <span><a
                                                    href="https://www.themeineed.com">www.themeineed.com</a></span>
                                            --}}
                                        </li>
                                    </ul>
                                </div>

                                <div class="text-center"><a href="{{ url('/siswa/' . $siswa['id'] . '/edit') }}"
                                        class="btn btn-warning">Edit Profile</a></div>
                            </div>
                            <!-- END PROFILE DETAIL -->
                        </div>
                        <!-- END LEFT COLUMN -->
                        <!-- RIGHT COLUMN -->
                        <div class="profile-right">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                Tambah Nilai
                            </button>

                            <hr>

                            <!-- AWARDS -->

                            <!-- END AWARDS -->
                            <!-- TABBED CONTENT -->
                            <div class="custom-tabs-line tabs-line-bottom left-aligned">
                                <ul class="nav" role="tablist">
                                    <li class="active"><a href="#tab-bottom-left1" role="tab"
                                            data-toggle="tab">Perkembangan</a></li>
                                </ul>
                            </div>
                            {{-- <div class="tab-content">
                                <div class="tab-pane fade in active" id="tab-bottom-left1">
                                    <ul class="list-unstyled activity-timeline">
                                        <li>
                                            <i class="fa fa-comment activity-icon"></i>
                                            <p>Commented on post <a href="#">Prototyping</a> <span class="timestamp">2
                                                    minutes ago</span></p>
                                        </li>
                                        <li>
                                            <i class="fa fa-cloud-upload activity-icon"></i>
                                            <p>Uploaded new file <a href="#">Proposal.docx</a> to project <a href="#">New
                                                    Year Campaign</a> <span class="timestamp">7 hours ago</span></p>
                                        </li>
                                        <li>
                                            <i class="fa fa-plus activity-icon"></i>
                                            <p>Added <a href="#">Martin</a> and <a href="#">3 others colleagues</a> to
                                                project repository <span class="timestamp">Yesterday</span></p>
                                        </li>
                                        <li>
                                            <i class="fa fa-check activity-icon"></i>
                                            <p>Finished 80% of all <a href="#">assigned tasks</a> <span class="timestamp">1
                                                    day ago</span></p>
                                        </li>
                                    </ul>
                                    <div class="margin-top-30 text-center"><a href="#" class="btn btn-default">See all
                                            activity</a></div>
                                </div>
                                <div class="tab-pane fade" id="tab-bottom-left2">
                                    <div class="table-responsive">
                                        <table class="table project-table">
                                            <thead>
                                                <tr>
                                                    <th>Title</th>
                                                    <th>Progress</th>
                                                    <th>Leader</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><a href="#">Spot Media</a></td>
                                                    <td>
                                                        <div class="progress">
                                                            <div class="progress-bar" role="progressbar" aria-valuenow="60"
                                                                aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                                                                <span>60% Complete</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><img src="assets/img/user2.png" alt="Avatar"
                                                            class="avatar img-circle"> <a href="#">Michael</a></td>
                                                    <td><span class="label label-success">ACTIVE</span></td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#">E-Commerce Site</a></td>
                                                    <td>
                                                        <div class="progress">
                                                            <div class="progress-bar" role="progressbar" aria-valuenow="33"
                                                                aria-valuemin="0" aria-valuemax="100" style="width: 33%;">
                                                                <span>33% Complete</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><img src="assets/img/user1.png" alt="Avatar"
                                                            class="avatar img-circle"> <a href="#">Antonius</a></td>
                                                    <td><span class="label label-warning">PENDING</span></td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#">Project 123GO</a></td>
                                                    <td>
                                                        <div class="progress">
                                                            <div class="progress-bar" role="progressbar" aria-valuenow="68"
                                                                aria-valuemin="0" aria-valuemax="100" style="width: 68%;">
                                                                <span>68% Complete</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><img src="assets/img/user1.png" alt="Avatar"
                                                            class="avatar img-circle"> <a href="#">Antonius</a></td>
                                                    <td><span class="label label-success">ACTIVE</span></td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#">Wordpress Theme</a></td>
                                                    <td>
                                                        <div class="progress">
                                                            <div class="progress-bar" role="progressbar" aria-valuenow="75"
                                                                aria-valuemin="0" aria-valuemax="100" style="width: 75%;">
                                                                <span>75%</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><img src="assets/img/user2.png" alt="Avatar"
                                                            class="avatar img-circle"> <a href="#">Michael</a></td>
                                                    <td><span class="label label-success">ACTIVE</span></td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#">Project 123GO</a></td>
                                                    <td>
                                                        <div class="progress">
                                                            <div class="progress-bar progress-bar-success"
                                                                role="progressbar" aria-valuenow="100" aria-valuemin="0"
                                                                aria-valuemax="100" style="width: 100%;">
                                                                <span>100%</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><img src="assets/img/user1.png" alt="Avatar"
                                                            class="avatar img-circle"> <a href="#">Antonius</a></td>
                                                    <td><span class="label label-default">CLOSED</span></td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#">Redesign Landing Page</a></td>
                                                    <td>
                                                        <div class="progress">
                                                            <div class="progress-bar progress-bar-success"
                                                                role="progressbar" aria-valuenow="100" aria-valuemin="0"
                                                                aria-valuemax="100" style="width: 100%;">
                                                                <span>100%</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><img src="assets/img/user5.png" alt="Avatar"
                                                            class="avatar img-circle"> <a href="#">Jason</a></td>
                                                    <td><span class="label label-default">CLOSED</span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div> --}}
                            {{-- <div class="tab-content"> --}}
                                {{-- {{ json_encode($categories) }}
                                --}}
                                <div class="panel-body">
                                    <table class="table table-striped table-responsive">
                                        <thead>
                                            <tr>
                                                <th>Kode</th>
                                                <th>Nama</th>
                                                <th>Semester</th>
                                                <th>Nilai</th>
                                                <th>Guru</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($siswa->mapel as $mapel)
                                                <tr>
                                                    <td>{{ $mapel->kode }}</td>
                                                    <td>{{ $mapel->nama }}</td>
                                                    <td>{{ $mapel->semester }}</td>
                                                    <td>
                                                    {{-- componen diambil dari x-editable --}}
                                                        <a href="#" class="nilai" data-type="text" data-pk="{{ $mapel->id }}" 
                                                            data-url=" {{ url('/api/siswa/' . $siswa->id . '/editnilai') }} " 
                                                            data-title="Masukan Nilai">{{ $mapel->pivot->nilai }}
                                                            {{-- href di arahkan ke route api.php dikarenakan edit data menggunakan ajax --}}
                                                        </a>
                                                    </td>
                                                    <td><a href="{{ url('/guru/' . $mapel->guru_id . '/profile') }}">{{ $mapel->guru->nama }}</a></td>
                                                    <td>
                                                        <a href="{{ url('/siswa/' . $siswa->id . '/' . $mapel->id . '/delete') }}" class="btn btn-danger btn-sm"
                                                        onclick="return confirm('Apakah data akan dihapus')">Delete</a>
                                                    </td>

                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                {{--
                            </div> --}}
                            <!-- END TABBED CONTENT -->
                            <div class="panel">
                                <div id="chart-nilai">

                                </div>
                            </div>
                        </div>
                        <!-- END RIGHT COLUMN -->
                    </div>





































                    {{-- modal --}}
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header bg-primary">
                                    <h5 class="modal-title" id="exampleModalLabel">Tambah Nilai</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form method="POST" action="{{ url('/siswa/' . $siswa->id . '/addNilai') }}"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label for="mapel">Mata Pelajaran</label>
                                            <select class="form-control" id="mapel" name="mapel">
                                                @foreach ($mata_pelajaran as $mp)
                                                    <option value="{{ $mp->id }}">{{ $mp->nama }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="nilai">Nilai</label>
                                            <input type="text" class="form-control @error('nilai') is-invalid @enderror"
                                                id="nilai" name="nilai" value="{{ old('nilai') }}" placeholder="Nilai">
                                            @error('nilai')
                                                <div class="text-sm text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    {{-- end of modal --}}



                </div>
                <!-- END MAIN CONTENT -->
        </div>

    @endsection
    @section('footer')
          {{-- script cdn editable --}}
          <script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js"></script>

        <script src="https://code.highcharts.com/highcharts.js"></script>
        <script>
            Highcharts.chart('chart-nilai', {
                chart: {
                    type: 'column'
                },
                title: {
                    text: 'Laporan Nilai Siswa'
                },
                xAxis: {
                    /*
                        cara menampilja 
                    */
                    categories: {!!json_encode($categories) !!},
                    crosshair: true
                },
                yAxis: {
                    min: 0,
                    title: {
                        text: 'Nilai'
                    }
                },
                tooltip: {
                    headerFormat: '<span style="font-size:10px">{point.key}</span><table>',

                    footerFormat: '</table>',
                    shared: true,
                    useHTML: true
                },
                plotOptions: {
                    column: {
                        pointPadding: 0.2,
                        borderWidth: 0
                    }
                },
                series: [{
                    name: 'Nilai',
                    data: {!!json_encode($nilai) !!}

                }]
            });

            //script jquery untuk menampilkan editable
            $(document).ready(function() {
                $('.nilai').editable();
            });
        </script>
         
      
      
    @endsection
