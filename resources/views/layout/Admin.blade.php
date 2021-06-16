<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Matrix lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Matrix admin lite design, Matrix admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Matrix Admin Lite Free Version is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>SI Absensi Mahasiswa MI</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="/admin/assets/images/logokampus.png">
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="/admin/assets/extra-libs/multicheck/multicheck.css">
    <link href="/admin/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
    <link href="/admin/dist/css/style.min.css" rel="stylesheet">
    <!-- <style>
        .ellipsis {
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis;
        }
    </style> -->
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5">
                    
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon -->
                        <b class="logo-icon ps-2">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="/admin/assets/images/logokampus.png" alt="homepage" class="light-logo" width="40"/>

                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="text-light font-weight-bold">SI Absensi Mahasiswa</span>
                        <!-- Logo icon -->
                        <!-- <b class="logo-icon"> -->
                        <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                        <!-- Dark Logo icon -->
                        <!-- <img src="/admin/assets/images/logo-text.png" alt="homepage" class="light-logo" /> -->

                        <!-- </b> -->
                        <!--End Logo icon -->
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                            class="ti-menu ti-close"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-start me-auto">
                        <li class="nav-item d-none d-lg-block"><a
                                class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)"
                                data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-end">
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                {{Auth::user()->username}} <img src="/admin/assets/images/users/1.jpg" alt="user" class="rounded-circle" width="31">
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end user-dd animated" aria-labelledby="navbarDropdown">
                                <div class="dropdown-divider"></div>
                                <div class="ps-4 p-10"><a href="/logout"
                                        class="btn btn-sm btn-success btn-rounded text-white"><i class=" fas fa-sign-out-alt"></i> LOGOUT</a></div>
                            </ul>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin5">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                   <nav class="sidebar-nav">
                    <ul id="sidebarnav" class="pt-4">
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="/dashboard" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span
                                    class="hide-menu">Dashboard</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="/halaman_admin" aria-expanded="false"><i class="mdi mdi-account-check"></i><span
                                    class="hide-menu">Admin</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="/dosen" aria-expanded="false"><i class="mdi mdi-account-multiple"></i><span
                                    class="hide-menu">Dosen</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="/jadwal" aria-expanded="false"><i class="mdi mdi-timetable"></i><span
                                    class="hide-menu">Jadwal</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="/kelas" aria-expanded="false"><i class="mdi mdi-home-variant"></i><span
                                    class="hide-menu">Kelas</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="/mahasiswa" aria-expanded="false"><i class="mdi mdi-human-male-female"></i><span
                                    class="hide-menu">Mahasiswa</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="/matkul" aria-expanded="false"><i class="mdi mdi-book-open"></i><span
                                    class="hide-menu">Mata Kuliah</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="/pengumuman" aria-expanded="false"><i class="mdi mdi-newspaper"></i><span
                                    class="hide-menu">Pengumuman</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                                href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span
                                    class="hide-menu">Proses</span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="/rekap" class="sidebar-link"><i
                                            class="mdi mdi-note-outline"></i><span class="hide-menu"> Rekap
                                        </span></a></li>
                                <li class="sidebar-item"><a href="/index" class="sidebar-link"><i
                                            class="mdi mdi-note-plus"></i><span class="hide-menu"> View Absensi
                                        </span></a></li>
                            </ul>
                        </li>
                                                
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <!-- <h4 class="page-title">Tables</h4> -->
                        <div class="ms-auto text-end">
                            <nav aria-label="breadcrumb">
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                @yield('content')
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
            <p><i class="fa fa-copyright"></i> 2021 - All rights reserved - Manajemen Informatika</p>
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="/admin/assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="/admin/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="/admin/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="/admin/assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="/admin/dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="/admin/dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="/admin/dist/js/custom.min.js"></script>
    <!-- this page js -->
    <script src="/admin/assets/extra-libs/multicheck/datatable-checkbox-init.js"></script>
    <script src="/admin/assets/extra-libs/multicheck/jquery.multicheck.js"></script>
    <script src="/admin/assets/extra-libs/DataTables/datatables.min.js"></script>
    <script>
        /****************************************
         *       Basic Table                   *
         ****************************************/
        $('#zero_config').DataTable();
    </script>

    <script>
        $(document).ready(function(){
            $('#tabel_ganjil').hide();
            $('#tabel_genap').hide();
        });
        $('#semester').change(function(){
            if ($('#semester').val() == "") {
                $('#tabel_all').show();
                $('#tabel_ganjil').hide();
                $('#tabel_genap').hide();
            } 
            if ($('#semester').val() == 1) {
                $('#tabel_all').hide();
                $('#tabel_ganjil').show();
                $('#tabel_genap').hide();
            } 
            if ($('#semester').val() == 2) {
                $('#tabel_all').hide();
                $('#tabel_ganjil').hide();
                $('#tabel_genap').show();
            } 
        });
    </script>

    <script>
        function setInputFilter(textbox, inputFilter) {
            ["input", "keydown", "keyup", "mousedown", "mouseup", "select", "contextmenu", "drop"].forEach(function(event) {
                textbox.addEventListener(event, function() {
                if (inputFilter(this.value)) {
                    this.oldValue = this.value;
                    this.oldSelectionStart = this.selectionStart;
                    this.oldSelectionEnd = this.selectionEnd;
                } else if (this.hasOwnProperty("oldValue")) {
                    this.value = this.oldValue;
                    this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
                } else {
                    this.value = "";
                }
                });
            });
        }
        setInputFilter(document.getElementById("nidn"), function(value) {
            return /^\d*\.?\d*$/.test(value); // Allow digits and '.' only, using a RegExp
        });
    </script>

</body>

</html>