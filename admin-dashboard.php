<?php
require_once "db.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Admin Dashboard | Virtual Care Solution</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Virtual Care Solution" name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="./assets/images/fav.ico">

    <!-- App css -->
    <link href="assets/dashboard/assets/css/config/default/bootstrap.min.css" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
    <link href="assets/dashboard/assets/css/config/default/app.min.css" rel="stylesheet" type="text/css" id="app-default-stylesheet" />
    <!-- <link href="assets/dashboard/assets/css/config/default/bootstrap-dark.min.css" rel="stylesheet" type="text/css" id="bs-dark-stylesheet" /> -->

    <!-- icons -->
    <link href="assets/dashboard/assets/css/icons.min.css" rel="stylesheet" type="text/css" />

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
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                                        <li class="breadcrumb-item active">Dashboard</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Admin Dashboard</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->


                    <div class="row">
                        <div class="col-xl-4 col-md-6">
                            <!-- Portlet card -->
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-widgets">
                                        <a href="javascript: void(0);" data-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                                        <a data-bs-toggle="collapse" href="#cardCollpase1" role="button" aria-expanded="false" aria-controls="cardCollpase1"><i class="mdi mdi-minus"></i></a>
                                        <a href="javascript: void(0);" data-toggle="remove"><i class="mdi mdi-close"></i></a>
                                    </div>
                                    <h4 class="header-title mb-0">Users</h4>

                                    <div id="cardCollpase1" class="collapse pt-3 show">
                                        <div class="text-center">
                                            <div class="row mt-2">
                                                <div class="col-4">
                                                    <h3 data-plugin="counterup"><?php
                                                                                $username = $_SESSION['username'];
                                                                                $sql = mysqli_query($conn, "SELECT COUNT(*) AS total_users FROM users");
                                                                                $data = mysqli_fetch_assoc($sql);
                                                                                $_SESSION['total_users'] = $data['total_users'];
                                                                                echo "" . $_SESSION['total_users'] . "";
                                                                                ?></h3>
                                                    <p class="text-muted font-13 mb-0 text-truncate">Total Users</p>
                                                </div>
                                                <div class="col-4">
                                                    <h3 data-plugin="counterup"><?php
                                                                                $username = $_SESSION['username'];
                                                                                $sql = mysqli_query($conn, "SELECT COUNT(*) AS total_doctors FROM users WHERE role_id = 1");
                                                                                $data = mysqli_fetch_assoc($sql);
                                                                                $_SESSION['total_doctors'] = $data['total_doctors'];
                                                                                echo "" . $_SESSION['total_doctors'] . "";
                                                                                ?></h3>
                                                    <p class="text-muted font-13 mb-0 text-truncate">Doctors</p>
                                                </div>
                                                <div class="col-4">
                                                    <h3 data-plugin="counterup">
                                                        <?php
                                                        $username = $_SESSION['username'];
                                                        $sql = mysqli_query($conn, "SELECT COUNT(*) AS total_patients FROM users WHERE role_id = 2");
                                                        $data = mysqli_fetch_assoc($sql);
                                                        $_SESSION['total_patients'] = $data['total_patients'];
                                                        echo "" . $_SESSION['patients'] . "";
                                                        ?></h3>

                                                    <p class="text-muted font-13 mb-0 text-truncate">Patients</p>
                                                </div>
                                            </div> <!-- end row -->

                                            <div dir="ltr">
                                                <div id="lifetime-sales" data-colors="#4fc6e1,#6658dd,#ebeff2" data-users=<?php echo "" . $_SESSION['total_users'] . ""; ?> data-doctors=<?php echo "" . $_SESSION['total_doctors'] . ""; ?> data-patients=<?php echo "" . $_SESSION['total_patients'] . ""; ?> style="height: 270px;" class="morris-chart mt-3"></div>
                                            </div>
                                        </div>
                                    </div> <!-- end collapse-->
                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div> <!-- end col-->

                        <div class="col-xl-4 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-widgets">
                                        <a href="javascript: void(0);" data-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                                        <a data-bs-toggle="collapse" href="#cardCollpase3" role="button" aria-expanded="false" aria-controls="cardCollpase3"><i class="mdi mdi-minus"></i></a>
                                        <a href="javascript: void(0);" data-toggle="remove"><i class="mdi mdi-close"></i></a>
                                    </div>
                                    <h4 class="header-title mb-0">Statistics</h4>

                                    <div id="cardCollpase3" class="collapse pt-3 show">
                                        <div class="text-center">

                                            <div class="row mt-2">
                                                <div class="col-6">
                                                    <h3 data-plugin="counterup">1,284</h3>
                                                    <p class="text-muted font-13 mb-0 text-truncate">Total Sessions</p>
                                                </div>
                                                <div class="col-6">
                                                    <h3 data-plugin="counterup">41</h3>
                                                    <p class="text-muted font-13 mb-0 text-truncate">Open Sessions</p>
                                                </div>
                                            </div> <!-- end row -->

                                            <div dir="ltr">
                                                <div id="statistics-chart" data-colors="#02c0ce" style="height: 270px;" class="morris-chart mt-3"></div>
                                            </div>

                                        </div>
                                    </div> <!-- end collapse-->
                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div> <!-- end col-->

                        <div class="col-xl-4 col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-widgets">
                                        <a href="javascript: void(0);" data-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                                        <a data-bs-toggle="collapse" href="#cardCollpase2" role="button" aria-expanded="false" aria-controls="cardCollpase2"><i class="mdi mdi-minus"></i></a>
                                        <a href="javascript: void(0);" data-toggle="remove"><i class="mdi mdi-close"></i></a>
                                    </div>
                                    <h4 class="header-title mb-0">Income Amounts</h4>

                                    <div id="cardCollpase2" class="collapse pt-3 show">
                                        <div class="text-center">
                                            <div class="row mt-2">
                                                <div class="col-4">
                                                    <h3 data-plugin="counterup"><?php
                                                                                $username = $_SESSION['username'];
                                                                                $sql = mysqli_query($conn, "SELECT 
                                                        FLOOR(SUM(DISTINCT total_cost)) total_price , currency FROM sessions");
                                                                                $data = mysqli_fetch_assoc($sql);
                                                                                $_SESSION['total_price'] = $data['total_price'];
                                                                                echo "" .   $_SESSION['total_price'] . "";
                                                                                ?></h3>
                                                    <p class="text-muted font-13 mb-0 text-truncate">Total Price</p>
                                                </div>
                                                <div class="col-4">
                                                    <h3 data-plugin="counterup">41</h3>
                                                    <p class="text-muted font-13 mb-0 text-truncate">Open Sessions</p>
                                                </div>
                                                <div class="col-4">
                                                    <h3 data-plugin="counterup">201</h3>
                                                    <p class="text-muted font-13 mb-0 text-truncate">Daily Sessions</p>
                                                </div>
                                            </div> <!-- end row -->

                                            <div dir="ltr">
                                                <div id="income-amounts" data-colors="#4a81d4,#e3eaef" style="height: 270px;" class="morris-chart mt-3"></div>
                                            </div>

                                        </div>
                                    </div> <!-- end collapse-->
                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div> <!-- end col-->
                    </div>
                    <!-- end row -->
                    <!-- end row -->

                    <div class="row">
                        <div class="col-12">
                            <!-- Portlet card -->
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-widgets">
                                        <a href="javascript: void(0);" data-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                                        <a data-bs-toggle="collapse" href="#cardCollpase4" role="button" aria-expanded="false" aria-controls="cardCollpase4"><i class="mdi mdi-minus"></i></a>
                                        <a href="javascript: void(0);" data-toggle="remove"><i class="mdi mdi-close"></i></a>
                                    </div>
                                    <h4 class="header-title mb-0">Doctors</h4>

                                    <div id="cardCollpase4" class="collapse pt-3 show">
                                        <div class="table-responsive">
                                            <table id="doctorTable" class="table table-centered table-nowrap table-borderless mb-0">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th>Doctor ID</th>
                                                        <th>Doctor Name</th>
                                                        <th>join Date</th>
                                                        <th>Image</th>
                                                        <th>Email</th>
                                                        <th>Phone Number</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                </tbody>
                                            </table>
                                        </div> <!-- .table-responsive -->
                                    </div> <!-- end collapse-->
                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div> <!-- end col-->
                    </div>
                    <!-- end row -->
                </div> <!-- container -->

            </div> <!-- content -->

            <!-- Footer Start -->
            <?php include './components/footer.php'; ?>
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
    <script src="assets/dashboard/assets/js/vendor.min.js"></script>

    <!-- Plugins js -->
    <script src="assets/dashboard/assets/libs/morris.js06/morris.min.js"></script>
    <script src="assets/dashboard/assets/libs/raphael/raphael.min.js"></script>

    <!-- Dashboard init-->
    <script src="assets/dashboard/assets/js/pages/dashboard-4.init.js"></script>

    <!-- App js -->
    <script src="assets/dashboard/assets/js/app.min.js"></script>
    <!-- -----------------------------Doctors------------------------------------------ -->

    <script type="text/javascript">
        $(document).ready(function() {

            // ajax
            $.ajax({
                type: "get",
                url: "./models/total_doctors.php",

                dataType: 'JSON',
                success: function(res) {

                    var len = res.length;
                    for (var i = 0; i < len; i++) {
                        var id = res[i].id;
                        var username = res[i].username;
                        var date_added = res[i].date_added;
                        var imgpath = res[i].imgpath;
                        var mobile = res[i].mobile;
                        var email = res[i].email;

                        var tr_str = "<tr>" +
                            "<td>" + (i + 1) + "</td>" +
                            "<td>" + username + "</td>" +
                            "<td>" + date_added + "</td>" +
                            "<td> <img class='rounded-circle avatar-xs' src=" + imgpath + " /></td>" +
                            "<td>" + email + "</td>" +
                            "<td>" + mobile + "</td>" +
                            "</tr>";
                        $("#doctorTable tbody").append(tr_str);
                    }

                }
            });

        });
    </script>


    <!-- ------------------------------------------------------------------------------ -->
</body>

</html>