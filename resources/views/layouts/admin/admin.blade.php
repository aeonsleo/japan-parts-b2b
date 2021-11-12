<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.admin.includes.head')
</head>

<!-- body start -->

<body class="loading"
    data-layout='{"mode": "light", "width": "fluid", "menuPosition": "fixed", "sidebar": { "color": "light", "size": "default", "showuser": false}, "topbar": {"color": "dark"}, "showRightSidebarOnPageLoad": true}'>
    <!-- Begin page -->
    <div id="wrapper">
        @include('layouts.admin.includes.navbar')

        @include('layouts.admin.includes.sidebar')

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content">

                <!-- Start Content-->
                <div class="container-fluid">
                    
                    @yield('title')
                    
                    @include('admin.flash-message')
                    
                    @yield('content')

                </div> <!-- container -->

            </div> <!-- content -->

            <!-- Footer Start -->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <script>
                                document.write(new Date().getFullYear())
                            </script> &copy; Japan Parts B2B <a href="">Japan Parts</a>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- end Footer -->

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->


    </div>
    <!-- END wrapper -->

    <!-- App js -->
    <script src="{{ asset('backend/js/vendor.min.js') }}"></script>

    <!-- Select2 js-->
    <script src="{{ asset('backend/js/select2.min.js') }}"></script>
    <!-- Dropzone file uploads-->
    <script src="{{ asset('backend/js/dropzone.min.js') }}"></script>

    <!-- Quill js -->
    <script src="{{ asset('backend/js/quill.min.js') }}"></script>

    <!-- Init js-->
    <script src="{{ asset('backend/js/form-fileuploads.init.js') }}"></script>

    <!-- Init js -->
    <script src="{{ asset('backend/js/add-product.init.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('backend/js/app.js') }}"></script>

    @yield('script')

</body>

</html>
