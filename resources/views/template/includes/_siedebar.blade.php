<div id="sidebar-nav" class="sidebar">
    <div class="sidebar-scroll">
        <nav>
            <ul class="nav">
                <li><a href="{{ url('/dashboard') }}" class=""><i class="lnr lnr-home"></i> <span>Dashboard</span></a>
                </li>
                {{-- menentukan akses --}}
                @if (auth()->user()->role == 'admin')
                    <li><a href="{{ url('/siswa') }}"><i class="lnr lnr-user"></i>
                            <span>Siswa</span></a>
                    </li>
                    <li><a href="{{ url('/news') }}"><i class="lnr lnr-bookmark"></i>
                            <span>News</span></a>
                    </li>
                @endif
            </ul>
        </nav>
    </div>
</div>
