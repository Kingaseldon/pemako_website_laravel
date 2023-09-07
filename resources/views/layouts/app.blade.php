<!DOCTYPE html>
<html lang="en" dir="ltr" style="--primary01:rgba(98, 89, 202, 0.1); --primary02:rgba(98, 89, 202, 0.2); --primary03:rgba(98, 89, 202, 0.3); --primary06:rgba(98, 89, 202, 0.6); --primary09:rgba(98, 89, 202, 0.9);">
   @include('layouts.partials.head')
<body class="app sidebar-mini ltr light-mode" data-new-gr-c-s-check-loaded="14.1098.0" data-gr-ext-installed="">
<div class="horizontalMenucontainer">
    <script type="text/javascript">
        function fe65(pks4){}
    </script><!-- Switcher -->
  
    <!-- End Switcher --> <!-- GLOBAL-LOADER -->
    <div id="global-loader" style="display: none;"> <img src="assets/images/loader.svg" class="loader-img" alt="Loader"> </div>
    <!-- /GLOBAL-LOADER --> <!-- PAGE -->
    <div class="page">
        <div class="page-main">
            <!-- app-Header -->
             @include('layouts.partials.header')
            <div class="jumps-prevent"></div>
            <!-- /app-Header --> <!--APP-SIDEBAR-->
           @include('layouts.partials.sidebar')
            <div class="jumps-prevent"></div>
            <!--/APP-SIDEBAR--> <!--app-content open-->
               <div class="main-content app-content mt-0">
                <div class="side-app">
                    <!-- CONTAINER -->
                    <div class="main-container container-fluid">
             @yield('content')
                  </div>
                    <!-- CONTAINER END -->
                </div>
               
            </div>
         
            <!--app-content end-->
        </div>
   
        <!--/Sidebar-right--> <!-- FOOTER -->
    @include('layouts.partials.footer')
        <!-- FOOTER END -->
    </div>
    <!-- BACK-TO-TOP --> <a href="#top" id="back-to-top" style="display: none;"><i class="fa fa-angle-up"></i></a> <!-- JQUERY JS -->


</body>
</html>
