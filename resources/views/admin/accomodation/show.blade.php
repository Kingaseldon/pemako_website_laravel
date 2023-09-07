@extends('layouts.app')
@section('content')

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
    <div class="page-header">
        <div>
            <h1 class="page-title">Accomodation</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">accomodation</a></li>
                <li class="breadcrumb-item active" aria-current="page">more details</li>
            </ol>
        </div>       

    </div>
    <a class="btn btn-outline-info mb-3" href="{{ route('rooms.index') }}"><span class="ti-angle-left"></span></a>

    <div class="row row-sm">
        <div class="col-lg-12">
            <div class="card custom-card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table border text-nowrap text-md-nowrap table-striped mg-b-0">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>More Description</th>
                                    <th>SLider Images</th>
                                    <th width="280px">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $accomodations->name }}</td>
                                    <td style="text-wrap: wrap;">{{ $accomodations->more_description }}</td>

                                    <td>
                                        @foreach ($accomodations->sliders as $accomodation)
                                            <img src="{{ asset('storage/' . $accomodation->slider) }}"
                                                alt="{{ $accomodation->name }}" style="height:80px ;display: flex"
                                                class="img-fluid ">
                                            <br>
                                        @endforeach

                                    </td>

                                    <td>
                                        <form action="{{ route('rooms.destroy', $accomodations->id) }}" method="Post">
                                            <a class="btn btn-primary"
                                                href="{{ route('rooms.edit', $accomodations->id) }}">Edit</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"
                                                onclick="return confirmDelete();">Delete</button>
                                        </form>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function confirmDelete() {
            return window.confirm("Are you sure you want to delete this item?");
        }
    </script>
@endsection
