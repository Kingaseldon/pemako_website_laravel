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
            <h1 class="page-title">Gallery</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">gallery</a></li>
                <li class="breadcrumb-item active" aria-current="page">images</li>
            </ol>
        </div>
        <div class="ms-auto pageheader-btn">
            <a href="{{ route('galleries.create') }}" class="btn btn-primary btn-icon text-white me-2">
                <span> <i class="fe fe-plus"></i> </span> Add Image
            </a>
        </div>

    </div>
    <div class="row row-sm">
        <div class="col-lg-12">
            <div class="card custom-card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table border text-nowrap text-md-nowrap table-striped mg-b-0">
                            <thead>
                                <tr>
                                   
                                    <th>Image</th>
                                     <th>Caption</th>
                                    <th width="280px">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($galleries as $gallery)
                                    <tr>
                                        <td>{{ $gallery->caption }}</td>
                                        <td><img src="{{ asset('storage/images/' . $gallery->image) }}"
                                                alt="{{ $gallery->caption }}" style="width: 200px;"
                                                class="img-fluid img-thumbnail"></td>

                                        <td>
                                            <form action="{{ route('galleries.destroy', $gallery->id) }}" method="Post">
                                                <a class="btn btn-primary"
                                                    href="{{ route('galleries.edit', $gallery->id) }}">Edit</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger"
                                                    onclick="return confirmDelete();">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- {!! $galleries->links() !!} --}}
    <script>
        function confirmDelete() {
            return window.confirm("Are you sure you want to delete this item?");
        }
    </script>
@endsection
