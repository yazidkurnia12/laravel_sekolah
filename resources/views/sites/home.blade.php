@extends('template.MainFrontend')

@section('title', 'Landing Page')
    

@section('content')
@section('corosel')
<div class="container d-flex justify-content-center pb-24">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="{{ asset('images/sekolah1.jpg') }}" class="d-block" alt="1" style="width: 1000px; height: 500px;">
        </div>
        <div class="carousel-item">
          <img src="{{ asset('images/sekolah2.jpg') }}" class="d-block" alt="2" style="width: 1000px; height: 500px;">
        </div>
        <div class="carousel-item">
          <img src="{{ asset('images/sekolah3.jpg') }}" class="d-block" alt="3" style="width: 1000px; height: 500px;">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div> 
</div>

<section class="py-0 bg-white">
    <div class="container max-w-6xl mx-auto">
        <div class="container mb-10">
            {{-- {{ config('sekolah.features_tittle') }} untuk memanggil custom config dari file sekolah --}}
            <h2 class="text-4xl font-bold tracking-tight text-center">{{ config('sekolah.features_headers') }}</h2>
            <p class="mt-2 text-lg text-center text-gray-600">{{ config('sekolah.features_tittle') }}</p>
        </div>
        <div class="grid grid-cols-4 gap-8 mt-10 sm:grid-cols-8 lg:grid-cols-12 sm:px-8 xl:px-0">

            @foreach ($post as $v)

                <div class="flex flex-col items-center justify-between col-span-4 mb-5 px-8 py-12 space-y-4 bg-gray-100 sm:rounded-xl"
                data-aos="fade-right" data-aos-duration="2000">
                  
                       <img src="{{ $v->thumbnail() }}" alt="" style="width: 50px; height: 50px">
                    
                    <h4 class="text-xl font-medium text-gray-700">{{ $v->title }}</h4>
                    <a target="_blank" href="{{ route('site.single.post' , $v->slug) }}" class="text-base text-center text-gray-500">more >
                        <br><br> created : {{ $v->created_at->format('d M Y') }}
                    </a>
                </div>

            @endforeach
 
        </div>
    </div>
</section>


@endsection