@extends('layouts.frontend.accomodation')
@section('page-title', 'Accomodation')
@section('content')
    <header class="experience slider-fade">
        <div>
            <div class="text-center item bg-img " data-overlay-dark="4" data-background="/assets/img/taj.jpeg">
                <div class="v-middle caption">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 offset-md-1">
                                <h1>Pemako Thimphu</h1>
                                <h4>Accomodation</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="hr-droid" id="overview">
        <div class="hr-line green"></div>
        <div><img src="/assets/img/flower.png" class="hr-image"></div>
        <div class="hr-line purple"></div>
    </div>
    <section class="rooms-page section-padding" data-scroll-index="1">
        <div class="container">
            <!-- project content -->

            <div class="row">
                <div class="col-md-12">
                    <!-- <div class="room-subtitle">Pemako Thimphu</div> -->
                    <div class="room-title">{{ $accomodations->name }}</div>
                </div>
                <div class="col-md-7 justify">
                    <p class="mb-30">{{ $accomodations->more_description }}</p>

                    <br><br>
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="list-unstyled page-list mb-30">
                                <li>
                                    <div class="page-list-icon"> <span class="ti-minus"></span>
                                    </div>
                                    <div class="page-list-text">
                                        <p>Gaze and let your soul disapper into breathtaking</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="page-list-icon"> <span class="ti-minus"></span>
                                    </div>
                                    <div class="page-list-text">
                                        <p>Scenic greeneriesnof the virgin Himalayas</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="page-list-icon"> <span class="ti-minus"></span>
                                    </div>
                                    <div class="page-list-text">
                                        <p>Deluxe Mountain View Rooms are your stairways for a
                                            legendary experience</p>
                                    </div>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="col-md-5 ">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="slider-hero1">
                                <div class="featured-carousel owl-carousel">
                                    @foreach ($accomodations->sliders as $accomodation)
                                        <div class="item">
                                            <div class="work">
                                                <div class="img d-flex align-items-center justify-content-center"
                                                    style="background-image: url('{{ asset('storage/' . $accomodation->slider) }}');">
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>

                                <div class="my-5 text-center">
                                    <ul class="thumbnail">
                                        @foreach ($accomodations->sliders as $accomodation)
                                            <li class="@if ($loop->first) active @endif img">
                                                <a href="#">
                                                    <img src="{{ asset('storage/' . $accomodation->slider) }}"
                                                        alt="Image" class="img-fluid">
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>







                        </div>
                        <div id="imageModal" class="modal fade" tabindex="-1" role="dialog"
                            aria-labelledby="imageModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <button type="button" class="close close-image" data-dismiss="modal"
                                            aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <img id="modalImage" src alt="Pop-up Image">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 pt-4">
                            <h6 class="text-center ">Room Amenities</h6>
                            <div class="row room-facilities">
                                  @foreach ($accomodations->amenities as $amenity)
                                    <div class="col-md-6">
                                        <ul>
                                            <li class="amenities">{{ $amenity->amenity }}</li>
                                        </ul>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                    </div>
                </div>


                <div class="col-md-8">
                    <div class="butn-dark mt-15 mb-30 "> <a href="rooms2.html"><span>
                                Floor Plan</span></a> </div>
                </div>
                <div class="col-md-4 flex-center">
                    <div class="butn-dark mt-15 mb-30 "> <a href="rooms2.html"><span>Book
                                Now</span></a> </div>
                </div>

            </div>
        </div>

    </section>

@endsection
