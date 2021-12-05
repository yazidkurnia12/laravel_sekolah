@extends('template/main')

@section('title', 'index')

@section('content')

    @if (session('sukses_message'))
        <div class="container mt-3">

            {{ session('sukses_message') }}

        </div>
    @endif

    <div class="container d-flex justify-content-between">
        <h1 class="ml-5 mt-3">Dashboard</h1>

    </div>


    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
            </div>
        </div>
    </div>
@endsection
