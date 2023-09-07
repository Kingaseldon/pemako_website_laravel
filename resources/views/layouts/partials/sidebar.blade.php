    <div class="sticky is-expanded" style="margin-bottom: -74px;">
        <div class="app-sidebar__overlay active" data-bs-toggle="sidebar"></div>
        <aside class="app-sidebar open ps ps--active-y">
            <div class="side-header">
                <a class="header-brand1" href="/dashboard"> <img src="assets/images/brand/logo.png"
                        class="header-brand-img desktop-logo" alt="logo"> <img src="/assets/img/logo.png"
                        class="header-brand-img toggle-logo" alt="logo"> <img src="/assets/img/logo.png"
                        class="header-brand-img light-logo" alt="logo"> <img src="/assets/img/logo.png"
                        class="header-brand-img light-logo1" alt="logo"> </a> <!-- LOGO -->
            </div>
            <div class="main-sidemenu is-expanded">
                <div class="slide-left disabled active is-expanded" id="slide-left">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24"
                        viewBox="0 0 24 24">
                        <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z">
                        </path>
                    </svg>
                </div>
                <ul class="side-menu open"  style="margin-right: 0px; margin-left: 0px;">
                    <li class="sub-category">
                        <h3>Main</h3>
                    </li>
                    <li class="slide"> <a class="side-menu__item active" data-bs-toggle="slide" href="/dashboard"><i
                                class="side-menu__icon fe fe-home"></i><span
                                class="side-menu__label">Dashboard</span></a> </li>
                                


                    <li class="sub-category">
                        <h3>Pages</h3>
                    </li>
                    <li class="slide">
                        <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><i
                                class="side-menu__icon fe fe-layers"></i><span class="side-menu__label">Pages</span><i
                                class="angle fa fa-angle-right"></i></a>
                        <ul class="slide-menu">
                            <li class="side-menu-label1"><a href="javascript:void(0)">Pages</a></li>

                            <li><a href="{{ route('galleries.index') }}" class="slide-item"> Gallery</a></li>
                            <li><a href="{{ route('rooms.index') }}" class="slide-item"> Accomodation</a></li>
                            <li><a href="{{ route('dining.index') }}" class="slide-item"> Dining</a></li>
                            <li><a href="faq.html" class="slide-item"> FAQS</a></li>
                            <li><a href="terms.html" class="slide-item"> Terms</a></li>
                            <li><a href="invoice.html" class="slide-item"> Invoice</a></li>
                            <li><a href="pricing.html" class="slide-item"> Pricing Tables</a></li>
                            <li><a href="empty.html" class="slide-item"> Empty Page</a></li>


                            <li class="sub-slide">
                                <a class="sub-side-menu__item" data-bs-toggle="sub-slide"
                                    href="javascript:void(0);"><span class="sub-side-menu__label">Maps</span><i
                                        class="sub-angle fa fa-angle-right"></i></a>
                                <ul class="sub-slide-menu">
                                    <li><a href="maps1.html" class="sub-slide-item">Leaflet Maps</a></li>
                                    <li><a href="maps2.html" class="sub-slide-item">Mapel Maps</a></li>
                                    <li><a href="maps.html" class="sub-slide-item">Vector Maps</a></li>
                                </ul>
                            </li>

                        </ul>
                    </li>

                </ul>
                <div class="slide-right" id="slide-right">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24"
                        viewBox="0 0 24 24">
                        <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z">
                        </path>
                    </svg>
                </div>
            </div>
            <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
            </div>
            <div class="ps__rail-y" style="top: 0px; height: 884px; right: 0px;">
                <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 824px;"></div>
            </div>
        </aside>
    </div>
