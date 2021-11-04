<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Japan Parts Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    {{-- <link rel="shortcut icon" href="../assets/images/favicon.ico"> --}}

    <!-- Plugins css-->
    <link href="{{ asset('admin/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/css/dropzone.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/css/quill.core.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/css/quill.snow.css') }}" rel="stylesheet" type="text/css" />

    <!-- App css -->
    <link href="{{ asset('admin/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/app.css') }}" rel="stylesheet">

    <!-- icons -->
    <link href="{{ asset('admin/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
</head>

<!-- body start -->

<body class="loading"
    data-layout='{"mode": "light", "width": "fluid", "menuPosition": "fixed", "sidebar": { "color": "light", "size": "default", "showuser": false}, "topbar": {"color": "dark"}, "showRightSidebarOnPageLoad": true}'>
    <!-- Begin page -->
    <div id="wrapper">
        <!-- Topbar Start -->
        <div class="navbar-custom">
            <div class="container-fluid">
                <ul class="list-unstyled topnav-menu float-end mb-0">

                    <li class="dropdown notification-list topbar-dropdown">
                        <a class="nav-link dropdown-toggle waves-effect waves-light" data-bs-toggle="dropdown" href="#"
                            role="button" aria-haspopup="false" aria-expanded="false">
                            <i class="fe-bell noti-icon"></i>
                            <span class="badge bg-danger rounded-circle noti-icon-badge">9</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-lg">

                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h5 class="m-0">
                                    <span class="float-end">
                                        <a href="" class="text-dark">
                                            <small>Clear All</small>
                                        </a>
                                    </span>Notification
                                </h5>
                            </div>

                            <div class="noti-scroll" data-simplebar>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item active">
                                    <p class="notify-details">Cristina Pride</p>
                                    <p class="text-muted mb-0 user-msg">
                                        <small>Hi, How are you? What about our next meeting</small>
                                    </p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-primary">
                                        <i class="mdi mdi-comment-account-outline"></i>
                                    </div>
                                    <p class="notify-details">Caleb Flakelar replied on query
                                        <small class="text-muted">1 min ago</small>
                                    </p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon">
                                        <img src="../assets/images/users/user-4.jpg" class="img-fluid rounded-circle"
                                            alt="" />
                                    </div>
                                    <p class="notify-details">Karen Robinson</p>
                                    <p class="text-muted mb-0 user-msg">
                                        <small>Wow ! this admin looks good and awesome design</small>
                                    </p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-warning">
                                        <i class="mdi mdi-account-plus"></i>
                                    </div>
                                    <p class="notify-details">New user registered.
                                        <small class="text-muted">5 hours ago</small>
                                    </p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-info">
                                        <i class="mdi mdi-comment-account-outline"></i>
                                    </div>
                                    <p class="notify-details">Caleb Flakelar commented on Admin
                                        <small class="text-muted">4 days ago</small>
                                    </p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-secondary">
                                        <i class="mdi mdi-heart"></i>
                                    </div>
                                    <p class="notify-details">Carlos Crouch liked
                                        <b>Admin</b>
                                        <small class="text-muted">13 days ago</small>
                                    </p>
                                </a>
                            </div>

                            <!-- All-->
                            <a href="javascript:void(0);"
                                class="dropdown-item text-center text-primary notify-item notify-all">
                                View all
                                <i class="fe-arrow-right"></i>
                            </a>

                        </div>
                    </li>

                    <li class="dropdown notification-list topbar-dropdown">
                        <a class="nav-link dropdown-toggle nav-user me-0 waves-effect waves-light"
                            data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                            aria-expanded="false">
                            {{-- <img src="../assets/images/users/user-1.jpg" alt="user-image" class="rounded-circle"> --}}
                            <span class="pro-user-name ms-1">
                                Administrator <i class="mdi mdi-chevron-down"></i>
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end profile-dropdown ">

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-user"></i>
                                <span>My Account</span>
                            </a>

                            {{-- <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-settings"></i>
                                <span>Settings</span>
                            </a> --}}

                            <div class="dropdown-divider"></div>

                            <!-- item-->
                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();" class="dropdown-item notify-item">
                                <i class="fe-log-out"></i>
                                <span>Logout</span>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>                                
                            </a>

                        </div>
                    </li>

                </ul>

                <!-- LOGO -->
                <div class="logo-box">
                    <a href="/" class="logo logo-dark text-center" style="display: block">
                        <span class="logo-sm">
                            {{-- <img src="../assets/images/logo-sm.png" alt="JapanPartsB2B" height="22"> --}}
                            <span class="logo-lg-text-light">JP</span>
                        </span>
                        <span class="logo-lg">
                            {{-- <img src="../assets/images/logo-dark.png" alt="" height="20"> --}}
                            <span class="logo-lg-text-light">JapanParts B2B</span>
                        </span>
                    </a>
                    {{-- <a href="index.html" class="logo logo-light text-center">
            <span class="logo-sm">
                <img src="../assets/images/logo-sm.png" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="../assets/images/logo-light.png" alt="" height="20">
            </span>
        </a> --}}
                </div>

                <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                    <li>
                        <button class="button-menu-mobile waves-effect waves-light">
                            <i class="fe-menu"></i>
                        </button>
                    </li>

                    <li>
                        <!-- Mobile menu toggle (Horizontal Layout)-->
                        <a class="navbar-toggle nav-link" data-bs-toggle="collapse"
                            data-bs-target="#topnav-menu-content">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                        <!-- End mobile menu toggle-->
                    </li>

                    <li class="dropdown d-none d-xl-block">
                        <a class="nav-link dropdown-toggle waves-effect waves-light" data-bs-toggle="dropdown" href="#"
                            role="button" aria-haspopup="false" aria-expanded="false">
                            Create New
                            <i class="mdi mdi-chevron-down"></i>
                        </a>
                        <div class="dropdown-menu">
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">
                                <i class="fe-briefcase me-1"></i>
                                <span>New Product</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">
                                <i class="fe-user me-1"></i>
                                <span>New  User</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">
                                <i class="fe-plus-square me-1"></i>
                                <span>New Category</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">
                                <i class="fe-user-plus me-1"></i>
                                <span>New Supplier</span>
                            </a>

                            <div class="dropdown-divider"></div>

                        </div>
                    </li>

                </ul>
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- end Topbar -->

        <!-- ========== Left Sidebar Start ========== -->
        <div class="left-side-menu">

            <div class="h-100" data-simplebar>

                <!-- User box -->
                <div class="user-box text-center">
                    <img src="../assets/images/users/user-1.jpg" alt="user-img" title="Mat Helme"
                        class="rounded-circle avatar-md">
                    <div class="dropdown">
                        <a href="javascript: void(0);" class="text-dark dropdown-toggle h5 mt-2 mb-1 d-block"
                            data-bs-toggle="dropdown">Geneva Kennedy</a>
                        <div class="dropdown-menu user-pro-dropdown">

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-user me-1"></i>
                                <span>My Account</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-settings me-1"></i>
                                <span>Settings</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-lock me-1"></i>
                                <span>Lock Screen</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-log-out me-1"></i>
                                <span>Logout</span>
                            </a>

                        </div>
                    </div>
                    <p class="text-muted">Admin Head</p>
                </div>

                <!--- Sidemenu -->
                <div id="sidebar-menu">

                    <ul id="side-menu">

                        <li class="menu-title">Navigation</li>

                        <li>
                            <a href="#sidebarCrm" data-bs-toggle="collapse">
                                <i data-feather="users"></i>
                                <span> Users </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarCrm">
                                <ul class="nav-second-level">
                                    <li>
                                        <a href="#">List Users</a>
                                    </li>
                                    <li>
                                        <a href="#">New User</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>

                </div>
                <!-- End Sidebar -->

                <div class="clearfix"></div>

            </div>
            <!-- Sidebar -left -->

        </div>
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content">

                <!-- Start Content-->
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">UBold</a></li>
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Ecommerce</a></li>
                                        <li class="breadcrumb-item active">Add / Edit Product</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Add / Edit Product</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->


                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="text-uppercase bg-light p-2 mt-0 mb-3">General</h5>

                                    <div class="mb-3">
                                        <label for="product-name" class="form-label">Product Name <span
                                                class="text-danger">*</span></label>
                                        <input type="text" id="product-name" class="form-control"
                                            placeholder="e.g : Apple iMac">
                                    </div>

                                    <div class="mb-3">
                                        <label for="product-reference" class="form-label">Reference <span
                                                class="text-danger">*</span></label>
                                        <input type="text" id="product-reference" class="form-control"
                                            placeholder="e.g : Apple iMac">
                                    </div>

                                    <div class="mb-3">
                                        <label for="product-description" class="form-label">Product Description
                                            <span class="text-danger">*</span></label>
                                        <div id="snow-editor" style="height: 150px;"></div> <!-- end Snow-editor-->
                                    </div>

                                    <div class="mb-3">
                                        <label for="product-summary" class="form-label">Product Summary</label>
                                        <textarea class="form-control" id="product-summary" rows="3"
                                            placeholder="Please enter summary"></textarea>
                                    </div>

                                    <div class="mb-3">
                                        <label for="product-category" class="form-label">Categories <span
                                                class="text-danger">*</span></label>
                                        <select class="form-control select2" id="product-category">
                                            <option>Select</option>
                                            <optgroup label="Shopping">
                                                <option value="SH1">Shopping 1</option>
                                                <option value="SH2">Shopping 2</option>
                                                <option value="SH3">Shopping 3</option>
                                                <option value="SH4">Shopping 4</option>
                                            </optgroup>
                                            <optgroup label="CRM">
                                                <option value="CRM1">Crm 1</option>
                                                <option value="CRM2">Crm 2</option>
                                                <option value="CRM3">Crm 3</option>
                                                <option value="CRM4">Crm 4</option>
                                            </optgroup>
                                            <optgroup label="eCommerce">
                                                <option value="E1">eCommerce 1</option>
                                                <option value="E2">eCommerce 2</option>
                                                <option value="E3">eCommerce 3</option>
                                                <option value="E4">eCommerce 4</option>
                                            </optgroup>

                                        </select>
                                    </div>

                                    <div class="mb-3">
                                        <label for="product-price">Price <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="product-price"
                                            placeholder="Enter amount">
                                    </div>

                                    <div class="mb-3">
                                        <label class="mb-2">Status <span
                                                class="text-danger">*</span></label>
                                        <br />
                                        <div class="radio form-check-inline">
                                            <input type="radio" id="inlineRadio1" value="option1" name="radioInline"
                                                checked="">
                                            <label for="inlineRadio1"> Online </label>
                                        </div>
                                        <div class="radio form-check-inline">
                                            <input type="radio" id="inlineRadio2" value="option2" name="radioInline">
                                            <label for="inlineRadio2"> Offline </label>
                                        </div>
                                        <div class="radio form-check-inline">
                                            <input type="radio" id="inlineRadio3" value="option3" name="radioInline">
                                            <label for="inlineRadio3"> Draft </label>
                                        </div>
                                    </div>

                                    <div>
                                        <label class="form-label">Comment</label>
                                        <textarea class="form-control" rows="3"
                                            placeholder="Please enter comment"></textarea>
                                    </div>
                                </div>
                            </div> <!-- end card -->
                        </div> <!-- end col -->

                        <div class="col-lg-6">

                            <div class="card">
                                <div class="card-body">
                                    <h5 class="text-uppercase mt-0 mb-3 bg-light p-2">Product Images</h5>

                                    <form action="/" method="post" class="dropzone" id="myAwesomeDropzone"
                                        data-plugin="dropzone" data-previews-container="#file-previews"
                                        data-upload-preview-template="#uploadPreviewTemplate">
                                        <div class="fallback">
                                            <input name="file" type="file" multiple />
                                        </div>

                                        <div class="dz-message needsclick">
                                            <i class="h1 text-muted dripicons-cloud-upload"></i>
                                            <h3>Drop files here or click to upload.</h3>
                                            <span class="text-muted font-13">(This is just a demo dropzone. Selected
                                                files are
                                                <strong>not</strong> actually uploaded.)</span>
                                        </div>
                                    </form>

                                    <!-- Preview -->
                                    <div class="dropzone-previews mt-3" id="file-previews"></div>
                                </div>
                            </div> <!-- end col-->

                            <div class="card">
                                <div class="card-body">
                                    <h5 class="text-uppercase mt-0 mb-3 bg-light p-2">Meta Data</h5>

                                    <div class="mb-3">
                                        <label for="product-meta-title" class="form-label">Meta title</label>
                                        <input type="text" class="form-control" id="product-meta-title"
                                            placeholder="Enter title">
                                    </div>

                                    <div class="mb-3">
                                        <label for="product-meta-keywords" class="form-label">Meta Keywords</label>
                                        <input type="text" class="form-control" id="product-meta-keywords"
                                            placeholder="Enter keywords">
                                    </div>

                                    <div>
                                        <label for="product-meta-description" class="form-label">Meta Description
                                        </label>
                                        <textarea class="form-control" rows="5" id="product-meta-description"
                                            placeholder="Please enter description"></textarea>
                                    </div>
                                </div>
                            </div> <!-- end card -->

                        </div> <!-- end col-->
                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="col-12">
                            <div class="text-center mb-3">
                                <button type="button" class="btn w-sm btn-light waves-effect">Cancel</button>
                                <button type="button"
                                    class="btn w-sm btn-success waves-effect waves-light">Save</button>
                                <button type="button"
                                    class="btn w-sm btn-danger waves-effect waves-light">Delete</button>
                            </div>
                        </div> <!-- end col -->
                    </div>
                    <!-- end row -->


                    <!-- file preview template -->
                    <div class="d-none" id="uploadPreviewTemplate">
                        <div class="card mt-1 mb-0 shadow-none border">
                            <div class="p-2">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <img data-dz-thumbnail src="#" class="avatar-sm rounded bg-light" alt="">
                                    </div>
                                    <div class="col ps-0">
                                        <a href="javascript:void(0);" class="text-muted fw-bold" data-dz-name></a>
                                        <p class="mb-0" data-dz-size></p>
                                    </div>
                                    <div class="col-auto">
                                        <!-- Button -->
                                        <a href="" class="btn btn-link btn-lg text-muted" data-dz-remove>
                                            <i class="dripicons-cross"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div> <!-- container -->

            </div> <!-- content -->

            <!-- Footer Start -->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <script>
                                document.write(new Date().getFullYear())
                            </script> &copy; UBold theme by <a href="">Coderthemes</a>
                        </div>
                        <div class="col-md-6">
                            <div class="text-md-end footer-links d-none d-sm-block">
                                <a href="javascript:void(0);">About Us</a>
                                <a href="javascript:void(0);">Help</a>
                                <a href="javascript:void(0);">Contact Us</a>
                            </div>
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
    <script src="{{ asset('admin/js/vendor.min.js') }}"></script>

    <!-- Select2 js-->
    <script src="{{ asset('admin/js/select2.min.js') }}"></script>
    <!-- Dropzone file uploads-->
    <script src="{{ asset('admin/js/dropzone.min.js') }}"></script>

    <!-- Quill js -->
    <script src="{{ asset('admin/js/quill.min.js') }}"></script>

    <!-- Init js-->
    <script src="{{ asset('admin/js/form-fileuploads.init.js') }}"></script>

    <!-- Init js -->
    <script src="{{ asset('admin/js/add-product.init.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('admin/js/app.js') }}"></script>

</body>

</html>
