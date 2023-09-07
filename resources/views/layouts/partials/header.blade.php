 <div class="app-header header sticky" style="margin-bottom: -74px;">
     <div class="container-fluid main-container">
         <div class="d-flex align-items-center">
             <a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-bs-toggle="sidebar"
                 href="javascript:void(0);"></a>
             <div class="responsive-logo"> <a href="index.html" class="header-logo"> <img
                         src="assets/images/brand/logo-3.png" class="mobile-logo logo-1" alt="logo"> <img
                         src="assets/images/brand/logo.png" class="mobile-logo dark-logo-1" alt="logo"> </a> </div>
             <!-- sidebar-toggle--> <a class="logo-horizontal " href="index.html"> <img
                     src="/assets/img/logo.png" class="header-brand-img desktop-logo" alt="logo"> <img
                     src="/assets/img/logo.png" class="header-brand-img light-logo1" alt="logo"> </a>
             <!-- LOGO -->
             <div class="main-header-center ms-3 d-none d-lg-block"> <input class="form-control"
                     placeholder="Search for anything..." type="search"> <button class="btn"><i class="fa fa-search"
                         aria-hidden="true"></i></button> </div>
             <div class="d-flex order-lg-2 ms-auto header-right-icons">
                 <!-- SEARCH --> <button class="navbar-toggler navresponsive-toggler d-lg-none ms-auto" type="button"
                     data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent-4"
                     aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon fe fe-more-vertical text-dark"></span> </button>
                 <div class="navbar navbar-collapse responsive-navbar p-0">
                     <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                         <div class="d-flex order-lg-2">
                             <div class="dropdown d-block d-lg-none">
                                 <a href="javascript:void(0);" class="nav-link icon" data-bs-toggle="dropdown"> <i
                                         class="fe fe-search"></i> </a>
                                 <div class="dropdown-menu header-search dropdown-menu-start">
                                     <div class="input-group w-100 p-2">
                                         <input type="text" class="form-control" placeholder="Search....">
                                         <div class="input-group-text btn btn-primary"> <i class="fa fa-search"
                                                 aria-hidden="true"></i> </div>
                                     </div>
                                 </div>
                             </div>
                             <div class="dropdown d-md-flex"> <a
                                     class="nav-link icon theme-layout nav-link-bg layout-setting">
                                     <span class="dark-layout"><i class="fe fe-moon"></i></span> <span
                                         class="light-layout"><i class="fe fe-sun"></i></span> </a>
                             </div>
                             <!-- Theme-Layout -->
                             <div class="dropdown d-md-flex"> <a class="nav-link icon full-screen-link nav-link-bg"> <i
                                         class="fe fe-minimize fullscreen-button" id="myvideo"></i>
                                 </a> </div>
                        
                      
                          
                             <!-- MESSAGE-BOX -->
                             <div class="dropdown d-md-flex profile-1">
                                 <a href="javascript:void(0);" data-bs-toggle="dropdown"
                                     class="nav-link leading-none d-flex px-1"> <span> <img
                                             src="/assets/img/logo.png" alt="profile-user"
                                             class="avatar  profile-user brround cover-image"> </span>
                                 </a>
                                 <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                     <div class="drop-heading">
                                         <div class="text-center">
                                             <h5 class="text-dark mb-0">{{ Auth::user()->name }}</h5>
                                             <small class="text-muted">Administrator</small>
                                         </div>
                                     </div>
                                     <div class="dropdown-divider m-0"></div>
                                     <a class="dropdown-item" href="profile.html"> <i
                                             class="dropdown-icon fe fe-user"></i> Profile </a>
                                     <a class="dropdown-item" href="email.html"> <i
                                             class="dropdown-icon fe fe-mail"></i> Inbox <span
                                             class="badge bg-secondary float-end">3</span> </a>
                                     <a class="dropdown-item" href="emailservices.html"> <i
                                             class="dropdown-icon fe fe-settings"></i> Settings </a>
                                     <a class="dropdown-item" href="faq.html"> <i
                                             class="dropdown-icon fe fe-alert-triangle"></i> Need help?
                                     </a>

                                     <form method="POST" action="{{ route('logout') }}">
                                         @csrf
                                         <a class="dropdown-item" href="route('logout')"
                                             onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                             {{ __('Log Out') }}
                                         </a>
                                     </form>

                                 </div>
                             </div>
                           
                             <!-- SIDE-MENU -->
                         </div>
                     </div>
                 </div>
             
             </div>
         </div>
     </div>
 </div>
