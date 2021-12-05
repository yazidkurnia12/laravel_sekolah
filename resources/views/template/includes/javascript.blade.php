<script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
{{-- <script
    src="{{ asset('assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js') }}"></script>
--}}
{{-- <script src="{{ asset('assets/vendor/chartist/js/chartist.min.js') }}"></script>
--}}
<script src="{{ asset('assets/scripts/klorofil-common.js') }}"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

{{-- cdn js toastr --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

{{-- script tastr --}}
<script>
    // jika ada data dalam session sukses tampilkan toastr
    @if(Session::has('sukses'))
        toastr.success("{{ Session::get('sukses') }}", "sukses"); 
    @endif
</script>
<script src="{{ asset('frontend/ckeditor.js') }}"></script>