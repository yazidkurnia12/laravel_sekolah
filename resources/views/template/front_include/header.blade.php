<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.2/tailwind.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>

    <header class="w-full px-8 text-gray-700 bg-blue" >

        <div class="container flex flex-col flex-wrap items-center ml-5 space-x-6 justify-between py-0 mx-auto md:flex-row max-w-7xl">
          <div class="relative flex mt-5 flex-col md:flex-row">
              <a href="#_" class="flex items-center mb-5 font-medium text-gray-900 lg:w-auto lg:items-center lg:justify-center md:mb-0">
                  <span class="mx-auto text-xl font-black leading-none text-gray-900 select-none">tails<span class="text-indigo-600">.</span></span>
              </a>
              <nav class="flex flex-wrap items-center mb-5 text-base md:mb-0 md:pl-8 md:ml-8 md:border-l md:border-gray-200">
                  <a href="#_" class="mr-5 font-medium leading-6 text-gray-600 hover:text-gray-900">Home</a>
                  {{-- <a href="#_" class="mr-5 font-medium leading-6 text-gray-600 hover:text-gray-900">Features</a>
                  <a href="#_" class="mr-5 font-medium leading-6 text-gray-600 hover:text-gray-900">Pricing</a>
                  <a href="#_" class="mr-5 font-medium leading-6 text-gray-600 hover:text-gray-900">Blog</a> --}}
              </nav>
          </div>
      
          <div class="inline-flex items-center ml-5 space-x-6 lg:justify-end">
              <a href="{{ url('/login') }}" class="text-base font-medium leading-6 text-gray-600 whitespace-no-wrap transition duration-150 ease-in-out hover:text-gray-900">
                  Sign in
              </a>
              <span class="inline-flex rounded-md shadow-sm">
                  <a href="{{ url('/register') }}" class="inline-flex items-center justify-center px-4 py-2 text-base font-medium leading-6 text-white whitespace-no-wrap transition duration-150 ease-in-out bg-indigo-600 border border-transparent rounded-md hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700">
                      Sign up
                  </a>
              </span>
          </div>
        </div>
      </header>