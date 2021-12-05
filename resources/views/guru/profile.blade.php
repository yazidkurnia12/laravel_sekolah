@extends('template.main')

@section('header')
    {{-- link cdn editable --}}
    <link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/>

@section('title', ''. $title)
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

                                    {{-- <img @if ($siswa['avatar'] == null)
                                    src="{{ asset('images/default.jpg') }}"
                                @else
                                    src="{{ asset('images/' . $siswa['avatar']) }}"

                                    @endif style="width: 150px; height: 150px"
                                    class="img-circle" alt="Avatar"> --}}

                                    <img src="" class="img-circle" alt="Avatar" >

                                    <br>

                                    <h1>{{ $guru->nama }}</h1>
                                 
                                    <span class="online-status status-available">Available</span>
                                </div>
                                <div class="profile-stat">
                                    <div class="row">
                                        <div class="col-md-4 stat-item">
                                          
                                        </div>
                                        <div class="col-md-4 stat-item">
                                            15 <span>Awards</span>
                                        </div>
                                        <div class="col-md-4 stat-item">
                                            2174 <span>Points</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END PROFILE HEADER -->

                            <!-- PROFILE DETAIL -->
                           

                            <!-- END PROFILE DETAIL -->
                        </div>
                        <!-- END LEFT COLUMN -->
                        <!-- RIGHT COLUMN -->
                        <div class="profile-right">
                           

                            <hr>

                            <!-- AWARDS -->

                            <!-- END AWARDS -->
                            <!-- TABBED CONTENT -->
                            <div class="custom-tabs-line tabs-line-bottom left-aligned">
                                <ul class="nav" role="tablist">
                                    <li class="active"><a href="#tab-bottom-left1" role="tab"
                                            data-toggle="tab">Mata Pelajaran yang Diampu</a></li>
                                </ul>
                            </div>
                       
                                <div class="panel-body">
                                    <table class="table table-striped table-responsive">
                                        <thead>
                                            <tr>
                                               
                                                <th>Nama</th>
                                                <th>Semester</th>
                                            
                                            </tr>
                                        </thead>
                                        <tbody>
                                           @foreach ($guru->mapel as $mapel)
                                               <tr>
                                                   <td>{{ $mapel->nama }}</td>
                                                   <td>{{ $mapel->semester }}</td>
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
                  
                    {{-- end of modal --}}



                </div>
                <!-- END MAIN CONTENT -->
        </div>

    @endsection
    @section('footer')
    {{-- put script js here --}}

    @endsection
