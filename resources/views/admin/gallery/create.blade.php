@extends('layouts.app')
@section('content')
    <div class="page-header">
        <div>
            <h1 class="page-title">Gallery</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
                <li class="breadcrumb-item active" aria-current="page">gallery</li>
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
                <h4 class="card-title">Add Gallery Image</h4>
            </div>
            <div class="card-body">
                <form class="form-horizontal" action="{{ route('galleries.store') }}" method="POST"enctype="multipart/form-data">
                @csrf
                    <div class="row mb-4">
                        <label for="inputName" class="col-md-3 form-label">Caption</label>
                        <div class="col-md-9"><input type="text" class="form-control" name="caption" placeholder="Name">
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="inputEmail3" class="col-md-3 form-label">Image</label>
                        <div class="col-md-9"><input type="file" class="form-control" name="image" placeholder="image"></div>
                    </div>
                    <div class="mb-0 mt-4 row justify-content-end">
                        <div class="col-md-9">
                            <button class="btn btn-primary" type="submit">Save</button>
                            <a class="btn btn-secondary" href="{{ route('galleries.index') }}">Cancel</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
