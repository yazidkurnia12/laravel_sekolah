@extends('template.MainFrontend');

@section('title', 'Registeration Page')
    
@section('content')

<div class="container">

    <section class="w-full bg-white">
      
        <div class="mx-auto max-w-7xl">
    
            <div class="flex flex-col lg:flex-row">
                <div class="relative w-full bg-cover lg:w-6/12 xl:w-7/12 bg-gradient-to-r from-white via-white to-gray-100">
    
                    <div class="relative flex flex-col items-center justify-center w-full h-full px-10 my-20 lg:px-16 lg:my-0">
                        <div class="flex flex-col items-start space-y-8 tracking-tight lg:max-w-3xl">
                            <div class="relative">
                                <p class="mb-2 font-medium text-gray-700 uppercase">Work smarter</p>
                                <h2 class="text-5xl font-bold text-gray-900 xl:text-6xl">Knowlage is power</h2>
                            </div>
                            <p class="text-2xl text-gray-700">Lets Join Us and Open Your World.</p>
                            <a href="#_" class="inline-block px-8 py-5 text-xl font-medium text-center text-white transition duration-200 bg-blue-600 rounded-lg hover:bg-blue-700 ease">Get Started Today</a>
                        </div>
                    </div>
                </div>
    
                <div class="w-full bg-white lg:w-7/12 xl:w-5/12">
    
                    <div class="flex flex-col items-start justify-start w-full h-full p-10 lg:p-16 xl:p-24">
                        <h4 class="w-full text-3xl font-bold">Signup</h4>
                        <p class="text-lg text-gray-500">or, if you have an account you can <a href="{{ url('/login') }}" class="text-blue-600 underline">sign in</a></p>
                        <div class="relative w-full mt-10 space-y-4">
                            {!! Form::open(['url' => '/postregister']) !!}
                            <div class="relative">
                                <label class="font-small text-gray-900">Nama Depan</label>
                                {!! Form::text('nama_depan','', 
                                ['class' => 'block w-full px-4 py-2 mt-2 text-xl placeholder-gray-400 bg-gray-200 rounded-sm focus:outline-none focus:ring-4 focus:ring-blue-600 focus:ring-opacity-50', 
                                'placeholder' => 'Nama Depan']); !!}
                            </div>

                            <div class="relative">
                                <label class="font-small text-gray-900">Nama Belakang</label>
                                {!! Form::text('nama_belakang','', 
                                ['class' => 'block w-full px-4 py-1 mt-2 text-xl placeholder-gray-400 bg-gray-200 rounded-sm focus:outline-none focus:ring-4 focus:ring-blue-600 focus:ring-opacity-50', 
                                'placeholder' => 'Nama Belakang']); !!}                            
                            </div>

                            <div class="relative">
                                <label class="font-small text-gray-900">Email</label>
                                {!! Form::email('email','', 
                                ['class' => 'block w-full px-4 py-1 mt-2 text-xl placeholder-gray-400 bg-gray-200 rounded-sm focus:outline-none focus:ring-4 focus:ring-blue-600 focus:ring-opacity-50', 
                                'placeholder' => 'email']); !!}                            
                            </div>

                            <div class="relative">
                                <label class="font-small text-gray-900">Password</label>
                                {!! Form::password('password', 
                                ['class' => 'block w-full px-4 py-1 mt-2 text-xl placeholder-gray-400 bg-gray-200 rounded-sm focus:outline-none focus:ring-4 focus:ring-blue-600 focus:ring-opacity-50', 
                                'placeholder' => 'password']); !!}                            
                            </div>

                            <div class="relative">
                                <label class="font-small text-gray-900">Agama</label>
                                {!! Form::text('agama','', 
                                ['class' => 'block w-full px-4 py-1 mt-2 text-xl placeholder-gray-400 bg-gray-200 rounded-sm focus:outline-none focus:ring-4 focus:ring-blue-600 focus:ring-opacity-50', 
                                'placeholder' => 'Agama']); !!}                           
                            </div>
                            
                            <div class="relative">
                                <label class="font-small text-gray-900">Alamat</label>
                                {!! Form::textarea('alamat','', 
                                ['class' => 'block w-full px-4 py-1 mt-2 text-xl placeholder-gray-400 bg-gray-200 rounded-sm focus:outline-none focus:ring-4 focus:ring-blue-600 focus:ring-opacity-50', 
                                'placeholder' => 'Alamat']); !!}                           
                            </div>
                            
                            <div class="relative mt-3">
                                <label class="font-small text-gray-900">Jenis Kelamin</label>
                                {!! Form::select('jenis_kelamin', ['' => 'PILIH', 'Lk' => 'LAKI-LAKI', 'Pr' => 'PEREMPUAN'], ['class' => 'bg-gray-200 rounded-lg mt-3 py-3 w-full']); !!}                           
                            </div>
                            

                            <div class="relative">
                                {{-- <a href="#_" class="inline-block w-full px-5 py-4 text-lg font-medium text-center text-white transition duration-200 bg-blue-600 rounded-lg hover:bg-blue-700 ease">Create Account</a> --}}
                                <input value="kirim" type="submit" class="inline-block mt-4 w-full px-5 py-4 text-lg font-medium text-center text-white transition duration-200 bg-blue-600 rounded-lg hover:bg-blue-700 ease">
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    </section>
</div>


@endsection