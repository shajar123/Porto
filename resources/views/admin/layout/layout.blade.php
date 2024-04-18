<!doctype html>
<html lang="en">
    


<!-- Mirrored from themesbrand.com/foxia/layouts/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 May 2023 18:20:42 GMT -->

@include('admin.includes.head')

<body data-sidebar="colored">


    <!-- Loader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner"></div>
        </div>
    </div>

    <!-- Begin page -->
    <div id="layout-wrapper">

        @include('admin.includes.header')

        <!-- ========== Left Sidebar Start ========== -->
        @include('admin.includes.sidebar')
        <!-- Left Sidebar End -->





        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

        @yield('body')
            <!-- End Page-content -->



           @include('admin.includes.footer')
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->



    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>


    @include('admin.includes.script')
    @yield('custom-scripts')



</body>

<!-- Mirrored from themesbrand.com/foxia/layouts/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 May 2023 18:21:10 GMT -->

</html>
