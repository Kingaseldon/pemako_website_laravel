@extends('layouts.app')
@section('content')
    <div class="page-header">
        <div>
            <h1 class="page-title">Dining</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Dining</a></li>
                <li class="breadcrumb-item active" aria-current="page">dining</li>
            </ol>
        </div>
        {{-- <div class="ms-auto pageheader-btn">
            <a href="javascript:void(0);" class="btn btn-primary btn-icon text-white me-2">
                <span> <i class="fe fe-plus"></i> </span> Add Account
            </a>
            <a href="javascript:void(0);" class="btn btn-success btn-icon text-white">
                <span> <i class="fe fe-log-in"></i> </span> Export
            </a>
        </div> --}}
    </div>
    @if ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show mb-0" role="alert">
            <span class="alert-inner--text">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
            </span>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span> </button>
        </div>
    @endif
    @if ($message = Session::get('success'))
        <br>
        <div class="alert alert-success alert-dismissible fade show" role="alert"> <span class="alert-inner--text">
                <p>{{ $message }}</p>
            </span>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span> </button>
        </div>
    @endif
    <div class="col-lg-12 ">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Edit Dining</h4>
            </div>
            <div class="card-body">
                <form class="form-horizontal" action="{{ route('dining.update', $dining->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('patch')
                    <div class="row mb-4">
                        <label for="inputName" class="col-md-3 form-label">Name</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" value="{{ $dining->name }}" name="name"
                                placeholder="Name">
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="inputName" class="col-md-3 form-label">Description</label>
                        <div class="col-md-9">
                            <textarea type="text" class="form-control"  name="description"
                                placeholder="Name">{{ $dining->description }}</textarea>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="inputImage" class="col-md-3 form-label">Image</label>
                        <div class="col-md-9">
                            <input type="file" class="form-control @error('image') is-invalid @enderror" name="image"
                                id="imageInput">
                            @if ($dining->image)
                                <img src="{{ asset('storage/images/' . $dining->image) }}"
                                    style="height: 100px; width: 150px; margin-top: 5px;" id="previewImage">
                            @else
                                <span>No image found!</span>
                            @endif
                            @error('image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

            <div class="mb-0 mt-4 row justify-content-end">
                <div class="col-md-9">
                    <button class="btn btn-primary" type="submit">Update</button>
                    <a class="btn btn-secondary" href="{{ route('dining.index') }}">Cancel</a>
                </div>
            </div>
            </form>
        </div>
    </div>
    </div>
    <script>
        document.getElementById('imageInput').addEventListener('change', function(event) {
            const previewImage = document.getElementById('previewImage');
            if (event.target.files && event.target.files[0]) {
                previewImage.src = URL.createObjectURL(event.target.files[0]);
            }
        });
    </script>
@endsection
