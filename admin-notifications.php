<?php
require_once "db.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Notifications | Virtual Care Solution</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="VirtualCareSolution VCS" name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />


 
    <!-- App favicon -->
    <link rel="shortcut icon" href="./assets/images/fav.ico">

    <!-- Plugins css -->
    <link href="assets/dashboard/assets/libs/flatpickr/flatpickr.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/dashboard/assets/libs/selectize/css/selectize.bootstrap3.css" rel="stylesheet" type="text/css" />

    <!-- App css -->
    <link href="assets/dashboard/assets/css/config/default/bootstrap.min.css" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
    <link href="assets/dashboard/assets/css/config/default/app.min.css" rel="stylesheet" type="text/css" id="app-default-stylesheet" />

    <link href="assets/dashboard/assets/css/config/default/bootstrap-dark.min.css" rel="stylesheet" type="text/css" id="bs-dark-stylesheet" />
    <link href="assets/dashboard/assets/css/config/default/app-dark.min.css" rel="stylesheet" type="text/css" id="app-dark-stylesheet" />
   
    <!-- icons -->
    <link href="assets/dashboard/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- quill css -->
    <link href="assets/dashboard/assets/libs/quill/quill.core.css" rel="stylesheet" type="text/css" />
    <link href="assets/dashboard/assets/libs/quill/quill.snow.css" rel="stylesheet" type="text/css" />
</head>

<!-- body start -->

<body>

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Topbar Start -->
        <?php include './components/header.php'; ?>
        <!-- end Topbar -->

        <!-- ========== Left Sidebar Start ========== -->
        <div class="left-side-menu">

            <div class="h-100" data-simplebar>

                <!-- User box -->
                <div class="user-box text-center">
                    <img src="../assets/images/users/user-1.jpg" alt="user-img" title="Mat Helme" class="rounded-circle avatar-md">
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
                <?php include './components/sidebar.php'; ?>
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
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">VCS</a></li>
                                        <li class="breadcrumb-item"><a href="admin-dashboard.php">Admin</a></li>
                                        <li class="breadcrumb-item active">Notification System</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Notifications</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <!-- Right Sidebar -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <!-- Left sidebar -->
                                    <div class="inbox-leftbar">

                                        <!-- <a href="email-inbox.html" class="btn btn-danger w-100 waves-effect waves-light">Inbox</a> -->

                                        <div class="mail-list mt-4">

                                            <a href="javascript: void(0);"><i class="dripicons-document me-2"></i>Notifications<span class="badge badge-soft-info float-end ms-2"><?php
                                                    
                                                        $sql = mysqli_query($conn, "SELECT COUNT(*) AS notification_count FROM notifications ");
                                                        $data = mysqli_fetch_assoc($sql);
                                                        $_SESSION['notification_count'] = $data['notification_count'];
                                                        echo "" . $_SESSION['notification_count'] . "";
                                                        ?></span></a>
                                            <a href="javascript: void(0);" class="text-danger fw-bold"><i class="dripicons-inbox me-2"></i>Active<span class="badge badge-soft-danger float-end ms-2"><?php
                                                    
                                                    $sql = mysqli_query($conn, "SELECT COUNT(*) AS notification_active FROM notifications where deleted = 0");
                                                    $data = mysqli_fetch_assoc($sql);
                                                    $_SESSION['notification_active'] = $data['notification_active'];
                                                    echo "" . $_SESSION['notification_active'] . "";
                                                    ?></span></a>

                                        </div>

                                        <h6 class="mt-4">To</h6>

                                        <div class="list-group b-0 mail-list">
                                            <a href="#" class="list-group-item border-0"><span class="mdi mdi-circle text-info me-2"></span>Physicians</a>
                                            <a href="#" class="list-group-item border-0"><span class="mdi mdi-circle text-warning me-2"></span>Admins</a>
                                            <a href="#" class="list-group-item border-0"><span class="mdi mdi-circle text-dark me-2"></span>Nurses</a>
                                            <a href="#" class="list-group-item border-0"><span class="mdi mdi-circle text-primary me-2"></span>Reciptionists</a>
                                            <a href="#" class="list-group-item border-0"><span class="mdi mdi-circle text-success me-2"></span>Employees</a>
                                            <a href="#" class="list-group-item border-0"><span class="mdi mdi-circle text-success me-2"></span>AHPs</a>
                                        </div>

                                    </div>
                                    <!-- End Left sidebar -->

                                    <div class="inbox-rightbar">
                                        <div class="mt-4">
                                            <form method="post" id="notification_form">
                                                <!-- <div class="mb-3">
                                                        <input type="email" class="form-control" placeholder="To">
                                                    </div> -->
                                                <div class="mb-3">
                                                    <input type="text" class="form-control" name="notification_subject" id="notification_subject" placeholder="Subject">
                                                </div>

                                                <div class="mb-3 card border-0">
                                                    <textarea name="notification_text" id="notification_text" class="form-control" rows="10"></textarea>

                                                </div>

                                                <div>
                                                    <div class="text-end">
                                                        <!-- <button type="button" class="btn btn-success waves-effect waves-light"><i class="mdi mdi-content-save-outline"></i></button>
                                                            <button type="button" class="btn btn-success waves-effect waves-light"><i class="mdi mdi-delete"></i></button> -->
                                                        <button class="btn btn-primary waves-effect waves-light" type="submit" name="post" id="post"> <span>Send</span> <i class="mdi mdi-send ms-2"></i> </button>
                                                    </div>
                                                </div>

                                            </form>
                                        </div> <!-- end card-->

                                    </div>
                                    <!-- end inbox-rightbar-->

                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div> <!-- end Col -->

                    </div><!-- End row -->

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

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- Vendor js -->
    <!-- <script src="assets/dashboard/assets/js/vendor.min.js"></script> -->

    <!-- Plugins js -->
    <script src="assets/dashboard/assets/libs/morris.js06/morris.min.js"></script>
    <script src="assets/dashboard/assets/libs/raphael/raphael.min.js"></script>

    <!-- Dashboard init-->
    <script src="assets/dashboard/assets/js/pages/dashboard-4.init.js"></script>
   <!-- Sweet Alerts js -->
    <script src="assets/dashboard/assets/libs/sweetalert2/sweetalert2.all.min.js"></script>

    <!-- Sweet alert init js-->
    <script src="../assets/js/pages/sweet-alerts.init.js"></script>
    <!-- App js -->
    <script src="assets/dashboard/assets/js/app.min.js"></script>

    <!-- ------------------------------------Doctors------------------------------------------ -->
    <!-- Quill js -->

    <script src="assets/dashboard/assets/libs/quill/quill.min.js"></script>

    <script>
                    $('#notification_form').on('submit', function(event){
                    event.preventDefault();
                    if($('#notification_subject').val() != '' && $('#notification_text').val() != '')
                    {
                    var form_data = $(this).serialize();
                    $.ajax({
                    url:"./models/push_notifications.php",
                    method:"POST",
                    data:form_data,
                    success:function(data)
                    {
                        $('#notification_form')[0].reset();
                        
                        Swal.fire
                                ({title:"Success !",
                                text:"Notification Pushed Successfully!",
                                icon:"success"})
                        // load_unseen_notification(); 
                    }
                    });
                    }
                    else
                    { 

                        Swal.fire
                              ({title:"Error !",
                                text:"Notification Field Required!",
                                icon:"error"})
                    }
                });
    </script>

    <!--------------------------------------------------------------------------------------------- -->


</body>

</html>