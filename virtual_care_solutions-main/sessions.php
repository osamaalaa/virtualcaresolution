

 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" /> 
    <title>Sessions | Virtual Care Solutions VCS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="VCS virtual care solutions for YAS CLINIC GROUP." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="./assets/images/fav.ico">

    <!-- Plugins css -->
    <link href="./assets/dashboard/assets/libs/flatpickr/flatpickr.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/dashboard/assets/libs/selectize/css/selectize.bootstrap3.css" rel="stylesheet" type="text/css" />

    <!-- App css -->
    <link href="assets/dashboard/assets/css/config/default/bootstrap.min.css" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
    <link href="assets/dashboard/assets/css/config/default/app.min.css" rel="stylesheet" type="text/css" id="app-default-stylesheet" />

    <link href="assets/dashboard/assets/css/config/default/bootstrap-dark.min.css" rel="stylesheet" type="text/css" id="bs-dark-stylesheet" />
    <link href="assets/dashboard/assets/css/config/default/app-dark.min.css" rel="stylesheet" type="text/css" id="app-dark-stylesheet" />

    <!-- icons -->
    <link href="assets/dashboard/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    
</head>

<!-- body start -->

<body class="loading" data-layout='{"mode": "light", "width": "fluid", "menuPosition": "fixed", "sidebar": { "color": "light", "size": "default", "showuser": false}, "topbar": {"color": "dark"}, "showRightSidebarOnPageLoad": true}'>

    <!-- Begin page --> 

    <div id="wrapper">
        <?php include './components/header.php'; ?>
       
        <!-- ========== Left Sidebar Start ========== -->
        <div class="left-side-menu">
            <div class="h-100" data-simplebar>

                <!-- User box -->
                <div class="user-box text-center">
                    <img src="assets/dashboard/assets/images/users/user-1.jpg" alt="user-img" title="Mat Helme" class="rounded-circle avatar-md">
                    <div class="dropdown">
                        <a href="javascript: void(0);" class="text-dark dropdown-toggle h5 mt-2 mb-1 d-block" data-bs-toggle="dropdown">Geneva Kennedy</a>
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
                            <a href="logout.php" class="dropdown-item notify-item">
                                <i class="fe-log-out me-1"></i>
                                <span>Logout</span>
                            </a>

                        </div>
                    </div>
                    <p class="text-muted">Admin Head</p>
                </div>
                <?php include './components/sidebar.php'; ?>
               

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
                                    <form class="d-flex align-items-center mb-3">
                                        <div class="input-group input-group-sm">
                                            <input type="text" class="form-control border" id="dash-daterange">
                                            <span class="input-group-text bg-blue border-blue text-white">
                                                <i class="mdi mdi-calendar-range"></i>
                                            </span>
                                        </div>
                                        <a href="javascript: void(0);" class="btn btn-blue btn-sm ms-2">
                                            <i class="mdi mdi-autorenew"></i>
                                        </a>
                                        <a href="javascript: void(0);" class="btn btn-blue btn-sm ms-1">
                                            <i class="mdi mdi-filter-variant"></i>
                                        </a>
                                    </form>
                                </div>
                                <h4 class="page-title">Sessions</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                    </div>

                    <!-- end row-->
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="dropdown float-end">
                                        <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="mdi mdi-dots-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Export PDF</a>
                                            <!-- item-->
                                            <!-- <a href="javascript:void(0);" class="dropdown-item">Export Report</a> -->
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Export Excel</a>
                                        </div>
                                    </div>

                                    <!-- <h4 class="header-title mb-3">Top 5 Users Balances</h4> -->

                                    <div class="table-responsive">
                                        <table class="table table-borderless table-hover table-nowrap table-centered m-0">

                                            <thead class="table-light">
                                                <tr>
                                                    <th colspan="2">Name Of the doctor</th>
                                                    <th>Duration</th>
                                                    <th>Session Date</th>
                                                    <!-- <th>Reserved in orders</th>
                                                    <th>Action</th> -->
                                                </tr>
                                            </thead>
                                          
                                            <tbody>
                                                <tr>
                                                    <td style="width: 36px;">
                                                        <img src="<?php echo $_SESSION["imgpath"]; ?>" alt="contact-img" title="contact-img" class="rounded-circle avatar-sm" />
                                                    </td>

                                                    <td>
                                                        <h5 class="m-0 fw-normal" id="doctor_name"></h5>
                                                        <p class="mb-0 text-muted"><small>YAS Clinic Group</small></p>
                                                    </td>

                                                    <td>
                                                       <span id ="session_time"></span>
                                                    </td>

                                                    <td>
                                                          <span id ="created_at"></span>
                                                    </td>
                                                </tr>

                                            </tbody>
                                         
                                        </table>
                                        <span id="session_time"></span>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div>
                    <!-- end row -->

                </div> <!-- container -->

            </div> <!-- content -->

            <?php include './components/footer.php'; ?>

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->


    </div>
    <!-- END wrapper -->

    <!-- Right Sidebar -->


    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- Vendor js -->
    <script src="assets/dashboard/assets/js/vendor.min.js"></script>

    <!-- Plugins js-->
    <script src="assets/dashboard/assets/libs/flatpickr/flatpickr.min.js"></script>
    <script src="assets/dashboard/assets/libs/apexcharts/apexcharts.min.js"></script>

    <script src="assets/dashboard/assets/libs/selectize/js/standalone/selectize.min.js"></script>

    <!-- Dashboar 1 init js-->
    <script src="assets/dashboard/assets/js/pages/dashboard-1.init.js"></script>

    <!-- App js-->
    <script src="assets/dashboard/assets/js/app.min.js"></script>
    <!-- Todo app --> 
    <script src="assets/dashboard/assets/js/pages/jquery.todo.js"></script>
    <script>

        $(document).ready(function($){ 
            $.ajax({
                type:"POST",
                url: "get_sessions.php",
                dataType: 'json',
           
                success: function(res){
                    $('#session_time').html(res.session_time);
                    $('#created_at').html(res.created_at);
                    $('#doctor_name').html(res.doctor_name);
                    }
            })

            
        })
    </script>                                            

</body>

</html>