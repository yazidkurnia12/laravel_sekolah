@extends('template.MainFrontend')

@section('title', 'Blog Page')
<link rel="stylesheet" href="https://rsms.me/inter/inter.css">
<link rel="stylesheet" href="css/tailwind/tailwind.min.css">
<link rel="icon" type="image/png" sizes="16x16" href="favicon-tailwind.png">
<script src="js/main.js"></script>


@section('content')

@section('corosel')
<div class="container d-flex justify-content-center">
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


<div class=""> 
    <section class="py-7 md:py-10 overflow-x-hidden">
      <div class="container px-4 mx-auto">
        <div class="flex flex-wrap lg:flex-nowrap">
          <div class="w-full lg:w-1/2">
            <div class="py-6 lg:pr-32">
              <div class="mb-4">
                <span class="text-xs py-1 px-3 text-blue-600 font-semibold bg-blue-50 rounded-xl">Lorem ipsum</span>
                <h2 class="text-4xl mt-3 font-bold font-heading">Key Features</h2>
              </div>
              <div class="flex items-start py-4">
                <div class="w-8 mr-5 text-blue-500">
                  <svg class="w-8 h-8" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l3 3-3 3m5 0h3M5 20h14a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                  </svg>
                </div>
                <div>
                  <h3 class="mb-2 text-xl font-semibold font-heading">Easy to customize</h3>
                  <p class="text-blueGray-400 leading-loose">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veritatis expedita animi.</p>
                </div>
              </div>
              <div class="flex items-start py-4">
                <div class="w-8 mr-5 text-blue-500">
                  <svg class="w-8 h-8" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"></path>
                  </svg>
                </div>
                <div>
                  <h3 class="mb-2 text-xl font-semibold font-heading">Flexible software</h3>
                  <p class="text-blueGray-400 leading-loose">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veritatis expedita animi.</p>
                </div>
              </div>
              <div class="flex items-start py-4">
                <div class="w-8 mr-5 text-blue-500">
                  <svg class="w-8 h-8" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z"></path>
                  </svg>
                </div>
                <div>
                  <h3 class="mb-2 text-xl font-semibold font-heading">Best access for all of the resources</h3>
                  <p class="text-blueGray-400 leading-loose">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veritatis expedita animi.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="relative w-full lg:w-1/2 my-12 lg:my-0"><img class="relative mx-auto rounded-xl w-full z-10" src="https://images.unsplash.com/photo-1536940135352-b4b3875df888?ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=1050&amp;h=1050&amp;q=80" alt=""><img class="absolute top-0 left-0 w-40 -ml-12 -mt-12" src="metis-assets/elements/blob-tear.svg" alt=""><img class="absolute bottom-0 right-0 w-40 -mr-12 -mb-12" src="metis-assets/elements/blob-tear.svg" alt=""></div>
        </div>
      </div>
    </section>
  </div>

  <section class="w-full bg-white pt-0 pb-7 md:pt-20 md:pb-24">
      <div class="box-border flex flex-col items-center content-center px-8 mx-auto leading-6 text-black border-0 border-gray-300 border-solid md:flex-row max-w-7xl lg:px-16">
  
          <!-- Image -->
          <div class="box-border relative w-full max-w-md px-4 mt-5 mb-4 -ml-5 text-center bg-no-repeat bg-contain border-solid md:ml-0 md:mt-0 md:max-w-none lg:mb-0 md:w-1/2 xl:pl-10">
              <img src="https://cdn.devdojo.com/images/december2020/productivity.png" class="p-2 pl-6 pr-5 xl:pl-16 xl:pr-20 " />
          </div>
  
          <!-- Content -->
          <div class="box-border order-first w-full text-black border-solid md:w-1/2 md:pl-10 md:order-none">
              <h2 class="m-0 text-xl font-semibold leading-tight border-0 border-gray-300 lg:text-3xl md:text-2xl">
                  Boost Productivity
              </h2>
              <p class="pt-4 pb-8 m-0 leading-7 text-gray-700 border-0 border-gray-300 sm:pr-12 xl:pr-32 lg:text-lg">
                  Build an atmosphere that creates productivity in your organization and your company culture.
              </p>
              <ul class="p-0 m-0 leading-6 border-0 border-gray-300">
                  <li class="box-border relative py-1 pl-0 text-left text-gray-500 border-solid">
                      <span class="inline-flex items-center justify-center w-6 h-6 mr-2 text-white bg-yellow-300 rounded-full"><span class="text-sm font-bold">✓</span></span> Maximize productivity and growth
                  </li>
                  <li class="box-border relative py-1 pl-0 text-left text-gray-500 border-solid">
                      <span class="inline-flex items-center justify-center w-6 h-6 mr-2 text-white bg-yellow-300 rounded-full"><span class="text-sm font-bold">✓</span></span> Speed past your competition
                  </li>
                  <li class="box-border relative py-1 pl-0 text-left text-gray-500 border-solid">
                      <span class="inline-flex items-center justify-center w-6 h-6 mr-2 text-white bg-yellow-300 rounded-full"><span class="text-sm font-bold">✓</span></span> Learn the top techniques
                  </li>
              </ul>
          </div>
          <!-- End  Content -->
      </div>
      <div class="box-border flex flex-col items-center content-center px-8 mx-auto mt-2 leading-6 text-black border-0 border-gray-300 border-solid md:mt-20 xl:mt-0 md:flex-row max-w-7xl lg:px-16">
  
          <!-- Content -->
          <div class="box-border w-full text-black border-solid md:w-1/2 md:pl-6 xl:pl-32">
              <h2 class="m-0 text-xl font-semibold leading-tight border-0 border-gray-300 lg:text-3xl md:text-2xl">
                  Automated Tasks
              </h2>
              <p class="pt-4 pb-8 m-0 leading-7 text-gray-700 border-0 border-gray-300 sm:pr-10 lg:text-lg">
                  Save time and money with our revolutionary services. We are the leaders in the industry.
              </p>
              <ul class="p-0 m-0 leading-6 border-0 border-gray-300">
                  <li class="box-border relative py-1 pl-0 text-left text-gray-500 border-solid">
                      <span class="inline-flex items-center justify-center w-6 h-6 mr-2 text-white bg-yellow-300 rounded-full"><span class="text-sm font-bold">✓</span></span> Automated task management workflow
                  </li>
                  <li class="box-border relative py-1 pl-0 text-left text-gray-500 border-solid">
                      <span class="inline-flex items-center justify-center w-6 h-6 mr-2 text-white bg-yellow-300 rounded-full"><span class="text-sm font-bold">✓</span></span> Detailed analytics for your data
                  </li>
                  <li class="box-border relative py-1 pl-0 text-left text-gray-500 border-solid">
                      <span class="inline-flex items-center justify-center w-6 h-6 mr-2 text-white bg-yellow-300 rounded-full"><span class="text-sm font-bold">✓</span></span> Some awesome integrations
                  </li>
              </ul>
          </div>
          <!-- End  Content -->
  
          <!-- Image -->
          <div class="box-border relative w-full max-w-md px-4 mt-10 mb-4 text-center bg-no-repeat bg-contain border-solid md:mt-0 md:max-w-none lg:mb-0 md:w-1/2">
              <img src="https://cdn.devdojo.com/images/december2020/settings.png" class="pl-4 sm:pr-10 xl:pl-10 lg:pr-32" />
          </div>
      </div>
  </section>
  
@endsection