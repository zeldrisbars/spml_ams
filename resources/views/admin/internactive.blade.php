<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from coderthemes.com/flacto/vertical-blue-light/tables-datatable.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Feb 2019 08:06:38 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">

    <link rel="icon" type="image/png" href="{{asset('favicon.ico')}}"/>

    <title>Intern Records</title>

    <!-- DataTables -->
    <!-- DataTables -->
    <link href="{{asset('backend/plugins/datatables/jquery.dataTables.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend/plugins/datatables/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend/plugins/datatables/fixedHeader.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend/plugins/datatables/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend/plugins/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('backend/plugins/datatables/scroller.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />

    <link href="{{asset('backend/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend/css/icons.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend/css/style.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{asset('backend/css/style1.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/zlib/sweetalert/node_modules/sweetalert2/dist/sweetalert2.min.css')}}">

    <script src="{{asset('backend/js/modernizr.min.js')}}"></script>

    <style>
    .mid 
    {
        display: inline-block;
        visibility:hidden;
    }

    .mid:first-letter 
    {
    visibility:visible;
    }
    </style>
</head>

<body class="fixed-left">

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Top Bar Start -->
        <div class="topbar">

            <!-- LOGO -->
            <div class="topbar-left">
                <div class="text-center">
                    <a href="index.html" class="logo">
                        
                        <!--<span><img src="assets/images/logo.png" alt="logo" style="height: 20px;"></span>-->
                    </a>
                </div>
            </div>

            <!-- Button mobile view to collapse sidebar menu -->
            <div class="navbar navbar-default" role="navigation">
                <div class="container-fluid">
                    <div class="">
                        <div class="float-left">
                            <button class="button-menu-mobile open-left waves-effect waves-light">
                                <i class="zmdi zmdi-menu"></i>
                            </button>
                        </div>

                        <form role="search" class="navbar-left app-search">
                           <input type="text" placeholder="Search..." class="form-control">
                           <a href="#"><i class="fa fa-search"></i></a>
                       </form>

                       <ul class="nav navbar-right float-right">
                        <li class="list-inline-item">
                            <!-- Notification -->
                            <div class="notification-box">
                                <ul class="list-inline m-b-0">
                                    <li>
                                        <a href="javascript:void(0);" class="right-bar-toggle">
                                            <i class="zmdi zmdi-notifications-none"></i>
                                        </a>
                                        <div class="noti-dot">
                                            <span class="dot"></span>
                                            <span class="pulse"></span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!-- End Notification bar -->
                        </li>

                        <li class="dropdown user-box list-inline-item">
                            <a href="#" class="dropdown-toggle waves-effect waves-light profile" data-toggle="dropdown" aria-expanded="true">
                                <img src="assets/images/users/avatar-1.jpg" alt="user-img" class="rounded-circle user-img">
                                <div class="user-status away"><i class="zmdi zmdi-dot-circle"></i></div>
                            </a>

                            <ul class="dropdown-menu dropdown-menu-right">
                                <li><a href="javascript:void(0)" class="dropdown-item"><i class="ti-user m-r-5"></i> Profile</a></li>
                                <li><a href="javascript:void(0)" class="dropdown-item"><i class="ti-settings m-r-5"></i> Settings</a></li>
                                <li><a href="javascript:void(0)" class="dropdown-item"><i class="ti-power-off m-r-5"></i> Logout</a></li>
                            </ul>
                        </li>

                    </ul>

                </div>
                <!--/.nav-collapse -->
            </div>
        </div>
    </div>
    <!-- Top Bar End -->

    <!-- ========== Left Sidebar Start ========== -->
    <!-- Begin page -->
    <div id="wrapper">

        <!-- Top Bar Start -->
        <div class="topbar">

            <!-- LOGO -->
            <div class="topbar-left">
                <div class="text-center">
                    <a href="index.html" class="logo">
                        <img src="{{asset('frontend/official-logo.png')}}" style="width: 70%">
                        <!--<span><img src="assets/images/logo.png" alt="logo" style="height: 20px;"></span>-->
                    </a>
                </div>
            </div>

            <!-- Button mobile view to collapse sidebar menu -->
            <div class="navbar navbar-default" role="navigation">
                <div class="container-fluid">
                    <div class="">
                        <div class="float-left">
                            <button class="button-menu-mobile open-left waves-effect waves-light">
                                <i class="zmdi zmdi-menu"></i>
                            </button>
                        </div>

                            <ul class="nav navbar-right float-right">


                            <li class="dropdown user-box list-inline-item">
                                <a href="#" class="dropdown-toggle waves-effect waves-light profile" data-toggle="dropdown" aria-expanded="true">
                                    <img src="{{asset('backend/images/users/avatar-1.jpg')}}" alt="user-img" class="rounded-circle user-img">
                                    <div class="user-status away"><i class="zmdi zmdi-dot-circle"></i></div>
                                </a>

                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="{{route('logout')}}" class="dropdown-item"><i class="ti-power-off m-r-5"></i> Logout</a></li>
                                </ul>
                            </li>

                        </ul>


                    </div>
                    <!--/.nav-collapse -->
                </div>
            </div>
        </div>
        <!-- Top Bar End -->

        <!-- ========== Left Sidebar Start ========== -->
        <div class="left side-menu">
            <div class="sidebar-inner slimscrollleft">
                <!--- Divider -->
                <div id="sidebar-menu">
                    <ul>


                        <li class="has_sub active">
                            <a href="{{route('admin/dashboard')}}" class="waves-effect"><i class="zmdi zmdi-view-dashboard"></i> <span> Dashboard </span> </a>
                        </li>

                       <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-accounts"></i> <span> Accounts </span> <span class="menu-arrow"></span> </a>
                            <ul class="list-unstyled">
                                <li><a href="{{route('admin/employeeactive')}}">Employee</a></li>
                                <li><a href="{{route('admin/internactive')}}">Interns</a></li>
                            </ul>
                        </li>

                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-archive"></i> <span> View Record </span> <span class="menu-arrow"></span> </a>
                            <ul class="list-unstyled">
                                <li><a href="{{route('view-employee-record')}}">Employee</a></li>
                                <li><a href="{{route('view-int-record')}}">Interns</a></li>
                            </ul>
                        </li>

                        <!---
                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-accounts"></i> <span> DTR </span> <span class="menu-arrow"></span> </a>
                            <ul class="list-unstyled">
                                <li><a href="{{route('employee-dtr')}}">Employee</a></li>
                                <li><a href="{{route('intern-dtr')}}">Interns</a></li>
                            </ul>
                        </li>
                        --->
                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-archive"></i> <span> Archives </span> <span class="menu-arrow"></span> </a>
                            <ul class="list-unstyled">
                                <li><a href="{{route('admin/employeearchive')}}">Employee</a></li>
                                <li><a href="{{route('admin/internarchive')}}">Interns</a></li>
                            </ul>
                        </li>

                    </ul>
                    <div class="clearfix"></div>
                </div>

            </div>
        </div>
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container-fluid">

                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="btn-group float-right m-b-20">
                                <a href="{{route('admin/intern')}}"><button type="button" class="btn btn-custom dropdown-toggle page-title-drop waves-effect waves-light"><span class="m-l-5"><i class="zmdi zmdi-account-add"></i></span> Add Account</button></a>
                            </div>
                            <h4 class="page-title">Interns</h4>
                        </div>
                    </div>

                    <!-- Start Active and Inactive tabs here -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-lg-12">
                            <ul class="nav nav-tabs mt-2" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="message-tab" data-toggle="tab" href="#active" role="tab" aria-controls="message" aria-selected="true">
                                        <span class="d-block d-sm-none"><i class="fa fa-envelope-o"></i></span>
                                        <span class="d-none d-sm-block">Active</span>
                                    </a>
                                </li>
                            </ul>

                            <div class="tab-content">
                                <div class="tab-pane show active" id="active" role="tabpanel" aria-labelledby="message-tab">
                                    <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>Full Name</th>
                                                <th>Department</th>
                                                <th>ID Number</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @if(count($user) > 0)
                                                @foreach($user as $key)
                                                    <tr>
                                                        <td style=" vertical-align: middle;"><a style="text-transform: uppercase;">{{$key->intern_lastname}}, </a>{{$key->intern_firstname}} <a class="mid">{{$key->intern_middlename}}</a></td>
                                                        <td style=" vertical-align: middle;">{{$key->intern_department}}</td>
                                                        <td style=" vertical-align: middle;">{{$key->intern_num}}</td>
                                                        
                                                        <td>
                                                        <center>
                                                            
                                                            <a href="{{route('intern-dtr')}}"><span class="m-l-2"><i class="zmdi zmdi-eye action-icons" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="View"></i></span></a>

                                                            <a href="{{route('edit-intern-dtr')}}"><span class="m-l-2"><i class="zmdi zmdi-edit action-icons"  data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"></i></span></a>

                                                            <a href="{{action('IntArcController@softDelete',$key->intern_id)}}" onclick="archive()"><span class="m-l-2"><i class="zmdi zmdi-archive action-icons" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Archive"></i></span>
                                                        </center>
                                                       </td>
                                                        
                                                    </tr>
                                                @endforeach
                                            @endif
                                        </tbody>
                                    </table>
                                </div>
                        </div>
                    </div><!-- end col -->
                </div> <!-- container-fluid -->

            </div> <!-- content -->
            <footer>
            2019 © <span class="d-none d-sm-inline-block">Shoppetown</span>
            </footer>
        </div>
        <!-- ============================================================== -->
        <!-- End Right content here -->
        <!-- ============================================================== -->


    </div>
    <!-- END wrapper -->


    <script>
        var resizefunc = [];
    </script>


    <!-- jQuery  -->
    <script src="{{asset('backend/js/jquery.min.js')}}"></script>
    <script src="{{asset('backend/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('backend/js/detect.js')}}"></script>
    <script src="{{asset('backend/js/fastclick.js')}}"></script>
    <script src="{{asset('backend/js/jquery.slimscroll.js')}}"></script>
    <script src="{{asset('backend/js/jquery.blockUI.js')}}"></script>
    <script src="{{asset('backend/js/waves.js')}}"></script>
    <script src="{{asset('backend/js/wow.min.js')}}"></script>
    <script src="{{asset('backend/js/jquery.nicescroll.js')}}"></script>
    <script src="{{asset('backend/js/jquery.scrollTo.min.js')}}"></script>

    <!-- Datatables-->
    <!-- Required datatable js-->
    <script src="{{asset('backend/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('backend/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
    <!-- Buttons examples -->
    <script src="{{asset('backend/plugins/datatables/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('backend/plugins/datatables/buttons.bootstrap4.min.js')}}"></script>

    <script src="{{asset('backend/plugins/datatables/jszip.min.js')}}"></script>
    <script src="{{asset('backend/plugins/datatables/pdfmake.min.js')}}"></script>
    <script src="{{asset('backend/plugins/datatables/vfs_fonts.js')}}"></script>
    <script src="{{asset('backend/plugins/datatables/buttons.html5.min.js')}}"></script>
    <script src="{{asset('backend/plugins/datatables/buttons.print.min.js')}}"></script>
    <script src="{{asset('backend/plugins/datatables/dataTables.fixedHeader.min.js')}}"></script>
    <script src="{{asset('backend/plugins/datatables/dataTables.keyTable.min.js')}}"></script>
    <script src="{{asset('backend/plugins/datatables/dataTables.scroller.min.js')}}"></script>

    <!-- Responsive examples -->
    <script src="{{asset('backend/plugins/datatables/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('backend/plugins/datatables/responsive.bootstrap4.min.js')}}"></script>

    <!-- Datatable init js -->
    <script src="{{asset('backend/pages/jquery.datatables.init.js')}}"></script>

    <!-- App js -->
    <script src="{{asset('backend/js/jquery.core.js')}}"></script>
    <script src="{{asset('backend/js/jquery.app.js')}}"></script>

    <!-- sweetalert -->
    <script src="{{asset('backend/zlib/sweetalert/node_modules/sweetalert2/dist/sweetalert2.all.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('backend/js/custom-sweetalerts.js')}}"></script>


    <script>
        $(document).ready(function() {
            $('#datatable').dataTable();
            $('#datatable-keytable').DataTable( { keys: true } );
            $('#datatable-responsive').DataTable();
            $('#datatable-scroller').DataTable( { ajax: "../plugins/datatables/json/scroller-demo.json", deferRender: true, scrollY: 380, scrollCollapse: true, scroller: true } );
            var table = $('#datatable-fixed-header').DataTable( { fixedHeader: true } );
        } );
        TableManageButtons.init();
    </script>

    <script>
        $(document).ready(function() {
            $('#datatable1').dataTable();
            $('#datatable-keytable').DataTable( { keys: true } );
            $('#datatable-responsive').DataTable();
            $('#datatable-scroller').DataTable( { ajax: "../plugins/datatables/json/scroller-demo.json", deferRender: true, scrollY: 380, scrollCollapse: true, scroller: true } );
            var table = $('#datatable-fixed-header').DataTable( { fixedHeader: true } );
        } );
        TableManageButtons.init();
    </script>


</body>

<!-- Mirrored from coderthemes.com/flacto/vertical-blue-light/tables-datatable.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Feb 2019 08:06:48 GMT -->
</html>