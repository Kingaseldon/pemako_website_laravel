@extends('layouts.app')
@section('page-title', 'Dasbard')

@section('content')

    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div>
            <h1 class="page-title">Dashboard 01</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Dashboard 01</li>
            </ol>
        </div>
        <div class="ms-auto pageheader-btn"> <a href="javascript:void(0);" class="btn btn-primary btn-icon text-white me-2">
                <span> <i class="fe fe-plus"></i> </span> Add Account </a> <a href="javascript:void(0);"
                class="btn btn-success btn-icon text-white"> <span> <i class="fe fe-log-in"></i> </span> Export </a> </div>
    </div>
    <!-- PAGE-HEADER END --> <!-- ROW-1 -->
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                    <div class="card overflow-hidden">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h6 class="">Total Rooms</h6>
                                    <h3 class="mb-2 number-font">{{$room}}</h3>                                 
                                    
                                </div>
                                <div class="col col-auto">
                                    <div class="counter-icon bg-primary-gradient box-shadow-primary brround ms-auto"> <i
                                            class="fe fe-trending-up text-white mb-5 "></i> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                    <div class="card overflow-hidden">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h6 class="">Gallery</h6>
                                    <h3 class="mb-2 number-font">{{$gallery}}</h3>
                                 
                                </div>
                                <div class="col col-auto">
                                    <div class="counter-icon bg-danger-gradient box-shadow-danger brround  ms-auto"> <i
                                            class="icon icon-rocket text-white mb-5 "></i> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                    <div class="card overflow-hidden">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h6 class="">Dining</h6>
                                    <h3 class="mb-2 number-font">{{$dining}}</h3>                                   
                                </div>
                                <div class="col col-auto">
                                    <div class="counter-icon bg-secondary-gradient box-shadow-secondary brround ms-auto"> <i
                                            class="fe fe-dollar-sign text-white mb-5 "></i> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                    <div class="card overflow-hidden">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h6 class="">Total Cost</h6>
                                    <h3 class="mb-2 number-font">$3</h3>
                                
                                </div>
                                <div class="col col-auto">
                                    <div class="counter-icon bg-success-gradient box-shadow-success brround  ms-auto"> <i
                                            class="fe fe-briefcase text-white mb-5 "></i> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
