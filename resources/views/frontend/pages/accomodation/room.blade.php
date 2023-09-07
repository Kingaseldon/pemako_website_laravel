@extends('layouts.frontend.accomodation')
@section('page-title', 'Accomodation')
@section('content')
  <header class="experience slider-fade">
    <div>
      <div class="text-center item bg-img " data-overlay-dark="4"
        data-background="/assets/img/taj.jpeg">
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
    <section class="section-padding">
        <div class="container1">
            <div class="row">
                @foreach ($accomodations as $accomodation)
                    <div class="col-6">
                        <div class="cards split">
                            <div class="image" >
                                <img src="{{ asset('storage/' . $accomodation->image) }}" alt />
                                <a href="{{ route('accommodation.show', $accomodation) }}"
                                    class="section-title room-name">View Details</a>
                            </div>
                            <div class="content">
                                <p class="section-title ">{{$accomodation->name}}</p>
                                <p class="copy">{{$accomodation->description}}</p>
                                <div class="col-md-12 text-center">
                               
                                   @foreach ($accomodation->amenities as $amenity)
                                 
                                    <span class="amenities1"> {{ $amenity->amenity}}</span>
                                   @endforeach

                                </div>
                                <div class="more">
                                    <div class="butn-dark">
                                        <a href="#" data-scroll-nav="1"><span>Book Now</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach


    </section>

@endsection
