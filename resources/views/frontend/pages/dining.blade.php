@extends('layouts.frontend.main2')
@section('page-title', 'Dining')
@section('content')
    @php
        $counter = 1;
    @endphp

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
    <section class="services section-padding accordion">
        <div class="container">
            <h4 class="section-title text-uppercase">Inspired Dining</h4>
            <h6 class="text-center">From globally acclaimed luscious cuisines to less known but equally delicious dishes of
                the Himalayan Kingdom, the hotel’s restaurants are another joint for experimentation, discovery and
                realization. Within an atmosphere of matchless tranquility, test and taste Bhutan’s famed Ema Datsi; sip and
                uncover the exclusivity of Suja (salted butter tea). </h6>

            @foreach ($dinings as $index => $dining)
                <div class="row">
                    @if ($index % 2 == 0)
                        <div class="col-md-6 p-0 animate-box fadeInLeft">
                            <div class="img left">
                                <img src="{{ asset('storage/images/' . $dining->image) }}" alt="">
                            </div>
                        </div>
                        <div class="col-md-6 p-0 bg-cream valign animate-box fadeInRight">
                            <div class="content">
                                <div class="cont text-left">
                                    <h4>{{ $dining->name }}</h4>
                                    <p class="lead">{{ $dining->description }}</p>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="col-md-6 bg-cream p-0 order2 valign animate-box fadeInLeft">
                            <div class="content">
                                <div class="cont text-left">
                                    <h4>{{ $dining->name }}</h4>
                                    <p class="lead">{{ $dining->description }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 p-0 order1 animate-box fadeInRight">
                            <div class="img">
                                <img src="{{ asset('storage/images/' . $dining->image) }}" alt="{{ $dining->name }}">
                            </div>
                        </div>
                    @endif
                </div>
            @endforeach





        </div>
    </section>
    <br>
@endsection
