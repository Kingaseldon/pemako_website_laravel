@extends('layouts.app')
@section('content')
    <div class="page-header">
        <div>
            <h1 class="page-title">Accomodation</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">accomodation</a></li>
                <li class="breadcrumb-item active" aria-current="page">rooms</li>
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
                <h4 class="card-title">Add Room </h4>
            </div>
            <div class="card-body">
                <form class="form-horizontal" action="{{ route('rooms.update', $room->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('patch') {{-- Specify the HTTP verb for updating --}}

                    <div class="row mb-4">
                        <label for="inputName" class="col-md-3 form-label">Name</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="name" value="{{ $room->name }}"
                                placeholder="Name">
                        </div>
                    </div>

                    <div class="row mb-4">
                        <label for="inputEmail3" class="col-md-3 form-label">Image</label>
                        <div class="col-md-9">
                            <input type="file" class="form-control" name="image" placeholder="image" id="imageInput">
                            @if ($room->image)
                                <img id="previewImage" src="{{ asset('storage/' . $room->image) }}" alt="room Image"
                                    style="max-width: 300px;">
                            @else
                                <img id="previewImage" src="" alt="room Image"
                                    style="max-width: 300px; display: none;">
                            @endif
                        </div>
                    </div>

                    <div class="row mb-4">
                        <label for="inputDescription" class="col-md-3 form-label">Description</label>
                        <div class="col-md-9">
                            <textarea class="form-control" name="description" placeholder="Description">{{ $room->description }}</textarea>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="inputName" class="col-md-3 form-label">MoreDescription</label>
                        <div class="col-md-9">
                            <textarea type="text" class="form-control" name="more_description" placeholder="Description">{{ $room->more_description }}</textarea>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="inputAmenities" class="col-md-3 form-label">Amenities</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="amenity"
                                value="{{ implode(', ', $room->amenities->pluck('amenity')->toArray()) }}"
                                placeholder="Enter amenities separated by commas">
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="inputSlider" class="col-md-3 form-label">Slider Images</label>
                        <div class="col-md-9">
                            <p class="placeholder-text">Select multiple slider images...</p>
                            <input type="file" name="slider[]" multiple>
                        </div>
                    </div>

                    <!-- Existing Slider Images -->
                    @if ($room->sliders->count() > 0)
                        <div class="row mb-4">
                            <label class="col-md-3 form-label">Existing Slider Images</label>
                            <div class="col-md-9">
                                @foreach ($room->sliders as $slider)
                                    <div class="existing-slider">
                                        <img src="{{ asset('storage/' . $slider->slider) }}" alt="Slider Image"
                                            class="existing-slider-image" style="height:80px"> <br>
                                        <input type="hidden" name="existing_sliders[]" value="{{ $slider->slider }}">
                                        <label class="remove-checkbox">
                                            <input type="checkbox" name="remove_sliders[]"
                                                value="{{ $slider->slider }}">
                                            Remove
                                        </label>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif

                    <div class="mb-0 mt-4 row justify-content-end">
                        <div class="col-md-9">
                            <button class="btn btn-primary" type="submit">Update</button>
                            <a class="btn btn-secondary" href="{{ route('rooms.index') }}">Cancel</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        document.getElementById('imageInput').addEventListener('change', function(event) {
            const previewImage = document.getElementById('previewImage');
            previewImage.style.display = 'block';
            previewImage.src = URL.createObjectURL(event.target.files[0]);
        });
    </script>
@endsection
