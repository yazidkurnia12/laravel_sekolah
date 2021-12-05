@extends('template.MainFrontend')

@section('title', 'Post')
<link rel="stylesheet" href="https://rsms.me/inter/inter.css">
<link rel="stylesheet" href="css/tailwind/tailwind.min.css">
<link rel="icon" type="image/png" sizes="16x16" href="favicon-tailwind.png">
<script src="js/main.js"></script>


@section('content')

<div class="container flex flex-col mx-auto py-5">
    <div class="items-center">
        <h2 class="d-flex justify-content-center">{{ $post->title }}</h2>        
    </div>

    <p class="pt-7">
        {{ $post->content }}
       
    </p>
    <ul>
        <li> <i class="lnr lnr-user"></i> Created by : {{ $post->user->name }}</li>
        <li> <i class="lnr lnr-"></i>
            {{-- cara pemanggilan tanggal dengan pengolahan tanggal --}}
            Date Created : {{ $post->created_at->format('d M Y') }}
            {{-- 
                list yang dapat ditambahkan pada pengolahan tanggal
                1. difforhumans : memberi keterangan kapan berita di publish    
            --}}
        </li>
    </ul>
</div>


@endsection