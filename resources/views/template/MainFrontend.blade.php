@include('template/front_include.header')

      {{-- bootstrp corosel --}}
        {{-- @include('template/front_include.corosel') --}}
        @yield('corosel')
      {{-- end bootstrp corosel --}}
     
      {{-- bannner --}}
        @include('template/front_include.banner')
      {{-- end of banner --}}

      {{-- news post --}}
        {{-- @include('template/front_include.new_post') --}}
      {{-- end of new post --}}
      
      @yield('content')

      {{-- komentar --}}
      @include('template/front_include.komentar')
      {{-- end of komentar --}}


      @include('template/front_include.footer')