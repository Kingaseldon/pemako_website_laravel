@extends('layouts.frontend.main2')
@section('page-title', 'Gallery')
@section('content')
    <style>
        img {
            width: 100%;
        }

        .masonry {
            margin: 0 30px 0 30px;
            column-count: 3;
            column-gap: 16px;
        }

        .masonry .mItem {
            display: inline-block;
            margin-bottom: 16px;
            width: 100%;
        }

        @media (max-width: 1199px) {
            .masonry {
                column-count: 3;
            }
        }

        @media (max-width: 991px) {
            .masonry {
                column-count: 2;
            }
        }

        @media (max-width: 767px) {
            .masonry {
                column-count: 1;
            }
        }
    </style>

    <header class="experience slider-fade">
        <div>
            <div class="text-center item bg-img" data-overlay-dark="4" data-background="/assets/img/taj.jpeg">
                <div class="v-middle caption">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 offset-md-1">
                                <h1>Pemako Thimphu</h1>
                                <h4>A journey of awakening in Bhutan's Capital</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="hr-droid" id="overview">
        <div class="hr-line green"></div>
        <div><img src="/assets/img/flower.png" class="hr-image" /></div>
        <div class="hr-line purple"></div>
    </div>

    <div class="col-md-12">
        <div class="section-title">Image Gallery</div>
    </div>

    <div class="masonry">    
           @foreach ($galleries as $gallery)   
            <div class="mItem">
                <img src="{{ asset('storage/images/' . $gallery->image) }}" alt="{{ $gallery->caption }}"              >
            </div>
         @endforeach
    </div>
   
@endsection
