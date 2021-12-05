@extends('template/main')

@section('title', 'index')

@section('content')

    @if (session('sukses_message'))
        <div class="container mt-3">
            {{-- <div class="alert"> --}}
                <div class="alert alert-success">
                    {{ session('sukses_message') }}
                </div>
            {{-- </div> --}}
        </div>
    @endif

    <div class="container d-flex justify-content-between">
        <h1 class="ml-5 mt-3">New Post</h1>

    </div>


    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">Add New Post</h3>
                    </div>

                    <div class="panel-body">
                        <div class="row">
                                {{-- form tambah post --}}
                                <form method="POST" action="{{ route('post.create') }}" enctype="multipart/form-data">
                                    <div class="col-md-8">
                                            @csrf

                                            <div class="form-group">
                                                <label for="title">Title</label>
                                                <input type="text" class="form-control @error('title') is-invalid @enderror"
                                                    id="title" name="title" value="{{ old('title') }}">
                                                @error('title')
                                                    <div class="text-sm text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label for="content">Content</label>
                                                <textarea name="content" id="content" class="form-control"
                                                    cols="30">{{ old('content') }}</textarea>
                                            </div>

                                    </div>
                                    <div class="col-md-4 pt-3">
                                        <label for="thumbnail">Thumbnail</label>
                                            <div class="input-group mb-3">
                                                <span class="input-group-btn">
                                                    <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                                                        <i class="fa fa-picture-o"></i> Choose
                                                    </a>
                                                </span>
                                                <input id="thumbnail" class="form-control" type="text" name="thumbnail">
                                                <img id="holder" style="margin-top:15px;max-height:100px;">
                                            </div>
                                            <div class="input-group py-5">
                                                <button type="submit" class="btn btn-primary">Save Post</button>
                                            </div>
                                    </div>
                                </form>
                        </div>   
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- modal --}}

    

@endsection

@section('footer')
   <script>
    ClassicEditor
        .create( document.querySelector( '#content' ) )
        .catch( error => {
            console.error( error );
        } );
    $(document).ready(function () {
        $('#lfm').filemanager('image');
    });

</script>
 <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
@endsection
