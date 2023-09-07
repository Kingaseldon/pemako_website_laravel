@extends('layouts.frontend.main')
@section('page-title', 'Pemako Thimphu')

@section('content')


@include('layouts.frontend.includes.splash')
<div class="modal fade" id="success-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Success</h5>

            </div>
            <div class="modal-body">
                <div class="alert alert-success">
                    Your booking request has been sent, we will get back to you soon.
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Ok</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="error-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Sorry</h5>
            </div>
            <div class="modal-body">
                <div class="alert alert-danger">
                    Your request could not be sent at this time, please try again later.
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Ok</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="booking-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Your details</h5>
            </div>
            <div class="modal-body">
                <p class="modal-p">Please Provide us with correct email address, we will be contacting you through email </p>
                <div id="error-message"></div>
                <form id="additional-details-form">
                    <input type="hidden" id="PropertyId" value="2" />
                    <div class="form-group">
                        <label for="name" class="col-form-label">Name:</label>
                        <input type="text" required="required" class="form-control" id="name">
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-form-label">Email:</label>
                        <input type="text" required="required" class="form-control" id="email">
                    </div>
                    <div class="form-group">
                        <label for="contact" class="col-form-label">Contact #:</label>
                        <input type="text" required="required" class="form-control" id="contact">
                    </div>
                    <div class="form-group">
                        <label for="country" class="col-form-label">Country:</label>
                        <input type="text" required="required" class="form-control" id="country">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="submitForm">Submit Request</button>
            </div>
        </div>
    </div>
</div>




<header class="header slider-fade">
    <div>
        <div class="text-center item bg-img" data-overlay-dark="2" data-background="/assets/img/taj.jpg">
            <div class="thim-middle caption">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 offset-md-1">
                            <h1 style="color: #f8f8ff;">Pemako Thimphu</h1>
                            <h4>An urban sanctuary in the heart of Bhutan's capital</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</header>


<div class="booking-wrapper">
    <div class="container">
        <div class="booking-inner clearfix">
            <form action=https://live.ipms247.com/booking/book-rooms-pemakothimphu target="_blank" id="booking-search" class="form1 clearfix" method="post">
                <div class="col1 c1 p-1">
                    <div class="input1_wrapper">
                        <label>Check in</label>
                        <div class="input1_inner">
                            <input name="eZ_chkin" type="text" required="required" id="CheckInDate" class="input datepicker border" placeholder="Check in">
                        </div>
                    </div>
                </div>
                <div class="col1 c2 p-1">
                    <div class="input1_wrapper">
                        <label>Check out</label>
                        <div class="input1_inner">
                            <input name="eZ_chkout" type="text" required="required" id="CheckOutDate" class="input datepicker border" placeholder="Check out">
                        </div>
                    </div>
                </div>
                <div class="col2 c3 p-1">
                    <div class="select1_wrapper">
                        <label>Adults</label>
                        <div class="select1_inner">
                            <select name="eZ_adult" class="select" required="required" id="NoOfAdults" style="width: 100%">
                                <option value="1">Adults</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col2 c4 p-1">
                    <div class="select1_wrapper">
                        <label>Children</label>
                        <div class="select1_inner">
                            <select name="eZ_child" class="select" id="NoOfChildren" style="width: 100%">
                                <option value="0">Children</option>
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>
                    </div>
                </div>
                <input name="eZ_room" id="eZ_room" type="hidden" class="txtbox" value="1">
                <input name="eZ_Nights" id="eZ_Nights" type="hidden" class="txtbox res_nights2" value="0">
                <input type="hidden" name="ArDt" id="ArDt" value="04-07-2023">
                <input name="hidBodyLanguage" id="hidBodyLanguage" type="hidden" class="txtbox" value="en">
                <input name="calformat" id="calformat" type="hidden" class="txtbox" value="dd-mm-yy">
                <input type="hidden" name="acturl" id="acturl" value="https://live.ipms247.com/booking/book-rooms-pemakothimphu">
                <div class="col3 c6 p-1">
                    <button type="submit" class="btn-form1-submit">Request Booking</button>
                </div>
            </form>
        </div>
    </div>
</div>




<div class="hr-droid" id="overview">
    <div class="hr-line green"></div>
    <div><img src="/assets/img/flower.png" class="hr-image"></div>
    <div class="hr-line purple"></div>
</div>

<div class="container">
    <div class="row align-items-center pb-5">
        <div class="col-lg-6 col-md-6 order-2 order-md-1 mt-4 pt-2 mt-sm-0 opt-sm-0">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-6">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 mt-4 pt-2">
                            <div class="card work-desk rounded border-0 shadow-lg overflow-hidden">
                                <img src="/assets/img/thimphu/feature/1.jpeg" class="img-fluid" alt="taj tashi" />
                                <div class="img-overlay bg-dark"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-6">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="card work-desk rounded border-0 shadow-lg overflow-hidden">
                                <img src="/assets/img/thimphu/feature/image3.jpeg" class="img-fluid" alt="Image" />
                                <div class="img-overlay bg-dark"></div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12 mt-4 pt-2">
                            <div class="card work-desk rounded border-0 shadow-lg overflow-hidden">
                                <img src="/assets/img/thimphu/feature/kj12.jpg" class="img-fluid" alt="Image" />
                                <div class="img-overlay bg-dark"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6 col-md-6 col-12 order-1 order-md-2">
            <div class="section-title ml-lg-5">
                <h5 class="section-title text-uppercase">Pemako Thimphu</h5>
                <!-- <h4 class="section-title mb-4">
            5 Star Hotel in Thimphu, Bhutan
          </h4> -->
                <!-- <p class="text-black">Pemako is your perfect introduction to the mythical Kingdom of Bhutan, a secluded and ancient culture set high in the Himalayas.
          </p> -->
                <p class="text-black">
                    Pemako Thimphu is centrally located in the middle of the city. It’s imposing structure dominates the Thimphu’s skyline, mirroring the fortresses ( Dzong ) of ancient Bhutan. The traditional murals and colours adorning the walls and ceilings are a good first introduction to Bhutanese architecture.
                </p>
                <p class="text-black">
                    Pemako Thimphu offers comfort and luxury. It’s 66 suites and rooms alongside restaurants, bar and tea lounge as well as a swimming pool and world class gym will ensure that you have an enjoyable stay.
                </p>
            </div>
        </div>
    </div>
</div>





<!-- Booking Modal -->
<div class="modal fade" id="bookingModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <iframe title="booking" src="{{ url('/booking') }}" style="width: 100%; height: 290px;"></iframe> <br />
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" data-bs-dismiss="modal" style="margin: 0 auto; background-color: #ab8a62;">Close</button>
            </div>
        </div>
    </div>
</div>


<section class="testimonials">
    <div class="background bg-img bg-fixed section-padding pb-0" data-background="/assets/img/thimphu/feature/download.jpg" data-overlay-dark="3" style="background-image: url(&quot;/assets/img/slider/2.jpg&quot;); ">
        <div class="container vh-100">
            <div class="row">
                <div class="col-md-5">
                    <div class="testimonials-box vh-100 d-flex flex-column justify-content-center align-items-center">
                        <div style="background-color: black; opacity: 0.76;" class="punakha-content">
                            <div class="head-box">
                                <div class="section-lotus">THIMPHU VALLEY</div>
                            </div>
                            <div class="col-md-12">
                                <p class="section-subtitle-front">
                                    Absolute escapism in a haven of pristine nature and spiritual resonance.
                                </p>
                                <p class="color-1">
                                    Bhutan’s old Summer capital and the official capital city since 1961. The heartbeat of the nation, where traditional meets modern in a seamless blend. The magnificent Tashichho Dzong sits on the West Bank of the Wang Chhu river alongside centuries old temples and hiking trails in every direction.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

<section class="rooms2 section-padding bg-cream mb-4" id="accomodation" data-scroll-index="1">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="hr-droid">
                    <div class="hr-line green"></div>
                    <div><img src="/assets/img/flower-removebg-preview.png" class="hr-image1"></div>
                    <div class="hr-line purple"></div>
                </div>
                <div class="section-title">ACCOMMODATION</div>
                <p class="text-center">Elegant, warm and cozy, all rooms and suites are designed to make your stay memorable. Adorned with traditional art splendidly displayed through hand-drawn murals, the rooms are expressions of sublime beauty. Relish sights of the dazzling stars and milky clouds; expanse of lush virgin greens spread over majestic peaks from the rooms. </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="owl-carousel owl-theme">
                    <div class="rooms2">
                        <figure><img src="/assets/img/thimphu/room/guest.jpg" alt="" class="img-fluid"></figure>
                        <div class="caption padding-left">
                            <h4>Deluxe Room</h4>
                            <p>Gaze and let your soul disappear into the breath taking scenic greeneries of the virgin Himalayas. Deluxe Mountain View Rooms are your stairways for a legendary experience. </p>
                            <div class="row room-facilities">
                                <div class="col-md-4">
                                    <ul>
                                        <li><i class="flaticon-group"></i> 1-3 Persons</li>
                                        <li><i class="flaticon-wifi"></i> Free Wifi</li>
                                    </ul>
                                </div>
                                <div class="col-md-4">
                                    <ul>
                                        <li><i class="flaticon-bed"></i> King and Twin</li>

                                    </ul>
                                </div>
                                <div class="col-md-4">
                                    <ul>
                                        <li><i class="flaticon-clock-1"></i> 45 sq m</li>

                                    </ul>
                                </div>
                            </div>
                            <hr class="border-2">
                            <div class="info-wrapper">

                                <div class="btn-form1-submit" data-bs-toggle="modal" data-bs-target="#bookingModal">

                                    Book Now
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="rooms2 left">
                        <figure><img src="/assets/img/thimphu/room/deluxe_mountain.jpeg" alt="" class="img-fluid"></figure>
                        <div class="caption padding-left">
                            <h4>Deluxe Room with Private Sit Out</h4>
                            <p>Massive, magnificent and tailored for bliss, these Pemako Thimphu rooms come with private sit-out areas. An evening where you can gaze at the stars above as the music of the nearby river echoes; the mountains ostensibly at your back drop. </p>
                            <div class="row room-facilities">
                                <div class="col-md-4">
                                    <ul>
                                        <li><i class="flaticon-group"></i> 1-3 Persons</li>
                                        <li><i class="flaticon-wifi"></i> Free Wifi</li>
                                    </ul>
                                </div>
                                <div class="col-md-4">
                                    <ul>
                                        <li><i class="flaticon-bed"></i> King Bed</li>
                                    </ul>
                                </div>
                                <div class="col-md-4">
                                    <ul>
                                        <li><i class="flaticon-clock-1"></i>60 sq m with sit out</li>
                                    </ul>
                                </div>
                            </div>
                            <hr class="border-2">
                            <div class="info-wrapper">

                                <div class="btn-form1-submit" data-bs-toggle="modal" data-bs-target="#bookingModal">

                                    Book Now
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="rooms2 left">
                        <figure><img src="/assets/img/thimphu/room/luxury.jpeg" alt="" class="img-fluid"></figure>
                        <div class="caption padding-left">
                            <h4>Luxury Room</h4>
                            <p>Skillfully ornamented with conventional hand-painted Buddhist murals, these rooms are planned architecturally, knowing your wish for an experience you cannot define.</p>
                            <div class="row room-facilities">
                                <div class="col-md-4">
                                    <ul>
                                        <li><i class="flaticon-group"></i> 1-3 Persons</li>
                                        <li><i class="flaticon-wifi"></i> Free Wifi</li>
                                    </ul>
                                </div>
                                <div class="col-md-4">
                                    <ul>
                                        <li><i class="flaticon-bed"></i> King Bed</li>
                                    </ul>
                                </div>
                                <div class="col-md-4">
                                    <ul>
                                        <li><i class="flaticon-clock-1"></i> 48 sq m</li>
                                    </ul>
                                </div>
                            </div>
                            <hr class="border-2">
                            <div class="info-wrapper">

                                <div class="btn-form1-submit" data-bs-toggle="modal" data-bs-target="#bookingModal">

                                    Book Now
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="rooms2">
                        <figure><img src="/assets/img/thimphu/room/Deluxe-Suite-Living-Room-At-Taj-Tashi-1024x576.jpg" alt="" class="img-fluid"></figure>
                        <div class="caption padding-left">
                            <h4>Deluxe Suite</h4>
                            <p>A designer’s delight, these massive Pemako Thimphu Rooms are positioned on the upper floors, for a feast on the sights of Thimphu Valley. </p>
                            <div class="row room-facilities">
                                <div class="col-md-4">
                                    <ul>
                                        <li><i class="flaticon-group"></i> 1-4 Persons</li>
                                        <li><i class="flaticon-wifi"></i> Free Wifi</li>
                                    </ul>
                                </div>
                                <div class="col-md-4">
                                    <ul>
                                        <li><i class="flaticon-bed"></i> King Bed</li>

                                    </ul>
                                </div>
                                <div class="col-md-4">
                                    <ul>
                                        <li><i class="flaticon-clock-1"></i> 74 sq m</li>

                                    </ul>
                                </div>
                            </div>
                            <hr class="border-2">
                            <div class="info-wrapper">

                                <div class="btn-form1-submit" data-bs-toggle="modal" data-bs-target="#bookingModal">
                                    Book Now
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="rooms2">
                        <figure><img src="/assets/img/thimphu/room/suite.jpeg" alt="" class="img-fluid"></figure>
                        <div class="caption padding-left">
                            <h4>Duplex Suite</h4>
                            <p>Closer to the skies, a commanding view of Thimphu valley can be seen from these Duplex Suites. It is a photographers’ delight! The spiral staircase and marble bathroom, along with a Christina bathtub defines its exquisiteness. </p>
                            <div class="row room-facilities">
                                <div class="col-md-4">
                                    <ul>
                                        <li><i class="flaticon-group"></i> 1-4 Persons</li>
                                        <li><i class="flaticon-wifi"></i> Free Wifi</li>
                                    </ul>
                                </div>
                                <div class="col-md-4">
                                    <ul>
                                        <li><i class="flaticon-bed"></i> King Bed</li>

                                    </ul>
                                </div>
                                <div class="col-md-4">
                                    <ul>
                                        <li><i class="flaticon-clock-1"></i> 83 sq m</li>
                                    </ul>
                                </div>
                            </div>
                            <hr class="border-2">
                            <div class="info-wrapper">

                                <div class="btn-form1-submit" data-bs-toggle="modal" data-bs-target="#bookingModal">

                                    Book Now
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="rooms2 left">
                        <figure><img src="/assets/img/thimphu/room/rooms.jpg" alt="" class="img-fluid"></figure>
                        <div class="caption padding-left">
                            <h4><a href="room-details.html">Luxury Suite</a></h4>
                            <p>Imposing views of the surroundings are offered from the lenses of the Luxury Suites.Crafted to please and for bliss, the interiors are adorned with captivating cultural themes, traditional paintings and marble bathrooms. </p>
                            <div class="row room-facilities">
                                <div class="col-md-4">
                                    <ul>
                                        <li><i class="flaticon-group"></i> 1-4 Persons</li>
                                        <li><i class="flaticon-wifi"></i> Free Wifi</li>
                                    </ul>
                                </div>
                                <div class="col-md-4">
                                    <ul>
                                        <li><i class="flaticon-bed"></i> King Bed</li>

                                    </ul>
                                </div>
                                <div class="col-md-4">
                                    <ul>
                                        <li><i class="flaticon-clock-1"></i> 110 sq m</li>

                                    </ul>
                                </div>
                            </div>
                            <hr class="border-2">
                            <div class="info-wrapper">

                                <div class="btn-form1-submit" data-bs-toggle="modal" data-bs-target="#bookingModal">

                                    Book Now
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="hr-droid" id="dining">
    <div class="hr-line green"></div>
    <div><img src="/assets/img/flower.png" class="hr-image1"></div>
    <div class="hr-line purple"></div>
</div>


<section class="services section-padding accordion">
    <div class="container">
        <h4 class="section-title text-uppercase">Inspired Dining</h4>
        <h6 class="text-center">From globally acclaimed luscious cuisines to less known but equally delicious dishes of the Himalayan Kingdom, the hotel’s restaurants are another joint for experimentation, discovery and realization. Within an atmosphere of matchless tranquility, test and taste Bhutan’s famed Ema Datsi; sip and uncover the exclusivity of Suja (salted butter tea). </h6>
        <div class="row">
            <div class="col-md-6 p-0 animate-box" data-animate-effect="fadeInLeft">
                <div class="img left">
                    <img src="/assets/img/thimphu/dining/thong.jpg" alt="">
                </div>
            </div>
            <div class="col-md-6 p-0 bg-cream valign animate-box" data-animate-effect="fadeInRight">
                <div class="content">
                    <div class="cont text-left">
                        <h4>The Thongsel</h4>
                        <p class="lead">Within the vastness of The Thongsel’s rousing setting, you can relish cuisines – internationally acclaimed to the less known indigenous Bhutanese. The Thongsel is not just for your palate. Feel the unexplored joy of rousing your taste buds amidst a locale of fountains, Bhutanese tapestries and prayer wheels; surrounded by Thimphu’s lush mountains.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 bg-cream p-0 order2 valign animate-box" data-animate-effect="fadeInLeft">
                <div class="content">
                    <div class="cont text-left">
                        <h4>Chig Ja Gye</h4>
                        <p class="lead">The outlet qualifies that small is indeed beautiful and delicious. Take a sojourn of unparalleled and unmatched Bhutanese cuisines. One can begin from the famed salted butter tea and Ema Datshi. There is everything for everyone. Take a sojourn of the country’s unraveled culture of the palates. </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 p-0 order1 animate-box" data-animate-effect="fadeInRight">
                <div class="img">
                    <img src="/assets/img/thimphu/dining/chig.jpg" alt="">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 p-0 animate-box" data-animate-effect="fadeInLeft">
                <div class="img left">
                    <img src="/assets/img/thimphu/dining/rim.jpg" alt="">
                </div>
            </div>
            <div class="col-md-6 p-0 bg-cream valign animate-box" data-animate-effect="fadeInRight">
                <div class="content">
                    <div class="cont text-left">
                        <h4>Rimps</h4>
                        <p class="lead">
                            Personalized for every lover of tea; from our very own 'Suja', Bhutanese salted butter tea; to other famed “chais” of the world, there is no place better than The Rimps.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 bg-cream p-0 order2 valign animate-box" data-animate-effect="fadeInLeft">
                <div class="content">
                    <div class="cont text-left">
                        <h4>Ara</h4>
                        <p class="lead">Add on to your experiences of the day with a sojourn at the Ara, tailored for relief. At your disposal is Bhutan’s very own ara, unadulterated pure distilled alcohol; indigenous and international cocktails and a variety of other drinks. Waves from the traditional dramnye (guitar) or any other music of your choice, will add to the splendor of the evening. </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 p-0 order1 animate-box" data-animate-effect="fadeInRight">
                <div class="img">
                    <img src="/assets/img/thimphu/dining/ara.jpeg" alt="">
                </div>
            </div>
        </div>
    </div>
</section>





<section class="services section-padding mt-4 mb-4" id="wellness">
    <div class="container">
        <div class="row">
            <div class="hr-droid">
                <div class="hr-line green"></div>
                <div><img src="/assets/img/flower.png" class="hr-image1"></div>
                <div class="hr-line purple"></div>
            </div>

            <p class="section-title">There's nothing indulgent about taking time for yourself</p>
            <div class="col-md-6 p-0 animate-box" data-animate-effect="fadeInLeft">
                <div class="img left">
                    <img src="/assets/img/thimphu/bath.jpeg" alt>
                </div>
            </div>
            <div class="col-md-6 p-0 bg-darkblack valign animate-box" data-animate-effect="fadeInRight">
                <div class="content">
                    <div class="cont text-left">
                        <div class="section-lotus">LOTUS REALM SPA</div>
                        <div class="section-subtitle-front"> Indulge your senses, soothe your body and revitalize your spirit</div>
                        <p>Inspired by traditional Bhutanese medicine known as <span style="font-style: italic; font-weight: bold;">Sowa-Rigpa</span>, Lotus Realm offers treatments based on the
                            principles
                            of restoring balance and harmony to mind and body</p>
                        <div class="butn-dark">
                            <a href="#">
                                <span>Learn More
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>


<div class="hr-droid">
    <div class="hr-line green"></div>
    <div><img src="/assets/img/flower.png" class="hr-image1"></div>
    <div class="hr-line purple"></div>
</div>
<section class="video section-padding" data-overlay-dark="3" id="location">
    <div class="container">
        <div class="section-title">GETTING HERE </div>
        <h4 class="section-subtitle-front text-black text-center">Pemako Thimphu is approximately 1 hour, 20 minutes’ drive ( 50 kms) from Paro international airport. Private transfers can be organized by the hotel. Taj Tashi has been rebranded as Pemako Thimphu.</h4>
        <div id="map-container-google-2" class="z-depth-1-half map-container">
            <iframe title="map" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3541.503639384164!2d89.4277054!3d27.4224107!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39e1941650b5aafd%3A0xb8926fb6844e9381!2sTaj%20Tashi!5e0!3m2!1sen!2sbt!4v1687965221160!5m2!1sen!2sbt" frameborder="0" style="border:0" allowfullscreen width="100%" height="500px"></iframe>
            <!-- <div class="container">
          <img class="map" src="/assets/img/thimphu/map.jpg" />
        </div> -->
        </div>
    </div>
</section>
<br>

<section class="testimonials">
    <div class="background bg-img bg-fixed section-padding pb-0" data-background="/assets/img/slider/image-7.jpg" data-overlay-dark="2" style="height: 400px;">
        <div class="container">
            <div class="row">
                <div class="col-md-5 mb-30 mt-30">
                    <div class="reservations mb-30">
                        <div class="text" style="margin-top: 90px; ">
                            <p style="font-size: 30px;">We invite you on a
                                journey <br /> of self discovery.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="clients" id="gallery">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="owl-carousel owl-theme">
                    <div class="clients-logo">
                        <img id="image1" class="pop-out-image" src="/assets/img/thimphu/gallery/room.jpeg" alt="pemako room">
                    </div>
                    <div class="clients-logo">
                        <img id="image4" class="pop-out-image" src="/assets/img/thimphu/gallery/dish.jpeg" alt="pemako room">
                    </div>

                    <div class="clients-logo">
                        <img id="image4" class="pop-out-image" src="/assets/img/thimphu/gallery/lobby.jpeg" alt="pemako room">
                    </div>
                    <div class="clients-logo">
                        <img id="image4" class="pop-out-image" src="/assets/img/thimphu/gallery/view.jpeg" alt="pemako room">
                    </div>
                    <div class="clients-logo">
                        <img id="image2" class="pop-out-image" src="/assets/img/thimphu/gallery/sofa.jpeg" alt="pemako room">
                    </div>
                    <div class="clients-logo">
                        <img id="image4" class="pop-out-image" src="/assets/img/thimphu/gallery/pemako.jpg" alt="pemako room">
                    </div>
                    <div class="clients-logo">
                        <img id="image2" class="pop-out-image" src="/assets/img/thimphu/gallery/dance.jpg" alt="pemako room">
                    </div>
                    <div class="clients-logo">
                        <img id="image2" class="pop-out-image" src="/assets/img/thimphu/gallery/chef.jpg" alt="pemako room">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="imageModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="imageModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close close-image" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <img id="modalImage" src="" alt="Pop-up Image">
                </div>
            </div>
        </div>
    </div>
</section>







@endsection