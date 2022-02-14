<?php
require_once "db.php";
?>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8" />
    <title>Dashboard | Virtual Care Solutions VCS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="VCS virtual care solutions for YAS CLINIC GROUP." name="description" />
    <meta content="YasClinicGroup" name="author" />
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

</head>

<!-- body start -->

<body class="loading">

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
                                <h4 class="page-title">Dashboard</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                    <div class="row">
                        <div class="col-lg-6 col-xl-3">
                            <div class="card bg-pattern">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="avatar-md bg-blue rounded">
                                                <i class="fe-layers avatar-title font-22 text-white"></i>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="text-end">
                                                <h3 class="text-dark my-1"><span data-plugin="counterup"><?php
                                                                                                            $username = $_SESSION['username'];
                                                                                                            $sql = mysqli_query($conn, "SELECT ROUND(SEC_TO_TIME(sum( TIME_TO_SEC(session_time))),0) as total from sessions where doctor_name = '$username'");
                                                                                                            $data = mysqli_fetch_assoc($sql);
                                                                                                            echo "" . $data['total'] . "";
                                                                                                            ?></span></h3>
                                                <p class="text-muted mb-0 text-truncate">Total Hours</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end card-->
                        </div> <!-- end col -->

                        <div class="col-lg-6 col-xl-3">
                            <div class="card bg-pattern">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="avatar-md bg-success rounded">
                                                <i class="fe-video avatar-title font-22 text-white"></i>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="text-end">
                                                <h3 class="text-dark my-1"><span data-plugin="counterup"> <?php
                                                                                                            $username = $_SESSION['username'];
                                                                                                            $sql = mysqli_query($conn, "SELECT count(*) as total from sessions where doctor_name = '$username'");
                                                                                                            $data = mysqli_fetch_assoc($sql);
                                                                                                            echo "" . $data['total'] . "";


                                                                                                            ?></span></h3>
                                                <p class="text-muted mb-0 text-truncate">Total Sessions</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end card-->
                        </div> <!-- end col -->
                        <div class="col-lg-6 col-xl-3">
                            <div class="card bg-pattern">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="avatar-md bg-danger rounded">
                                                <i class="fa fa-hospital-user avatar-title font-22 text-white" style="margin: 13px;"></i>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="text-end">
                                                <h3 class="text-dark my-1"><span data-plugin="counterup"><?php
                                                                                                            $username = $_SESSION['username'];
                                                                                                            $sql = mysqli_query($conn, "SELECT count(*) as total from patient_data");
                                                                                                            $data = mysqli_fetch_assoc($sql);
                                                                                                            echo "" . $data['total'] . "";


                                                                                                            ?></span></h3>
                                                <p class="text-muted mb-0 text-truncate">Patients</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end card-->
                        </div> <!-- end col -->
                        <div class="col-lg-6 col-xl-3">
                            <div class="card bg-pattern">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="avatar-md bg-warning rounded">
                                                <i class="fe-dollar-sign avatar-title font-22 text-white"></i>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="text-end">
                                                <h3 class="text-dark my-1"><span data-plugin="counterup"><?php
                                                                                                            $username = $_SESSION['username'];
                                                                                                            $sql = mysqli_query($conn, "SELECT  FLOOR(SUM(DISTINCT total_cost)) as total from sessions WHERE doctor_name = '" . $username . "'");
                                                                                                            $data = mysqli_fetch_assoc($sql);
                                                                                                            echo "" . $data['total'] . "";
                                                                                                            ?></span> AED</h3>
                                                <p class="text-muted mb-0 text-truncate">Total Price</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end card-->
                        </div> <!-- end col -->
                    </div>

                    <!-- end col-->

                    <!-- end row-->


                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-body pb-2">
                                    <div class="float-end d-none d-md-inline-block">
                                        <div class="btn-group mb-2">
                                            <button type="button" class="btn btn-xs btn-light">Today</button>
                                            <button type="button" class="btn btn-xs btn-light">Weekly</button>
                                            <button type="button" class="btn btn-xs btn-secondary">Monthly</button>
                                        </div>
                                    </div>

                                    <h4 class="header-title mb-3">Sessions Analytics</h4>

                                    <div dir="ltr">
                                        <div id="deal-analytics" class="mt-4" data-colors="#1abc9c,#f1556c"></div>
                                    </div>
                                </div>
                            </div> <!-- end card -->
                        </div> <!-- end col-->

                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="float-end d-none d-md-inline-block">
                                        <div class="btn-group mb-2">
                                            <button type="button" class="btn btn-xs btn-light">Today</button>
                                            <button type="button" class="btn btn-xs btn-light">Weekly</button>
                                            <button type="button" class="btn btn-xs btn-secondary">Monthly</button>
                                        </div>
                                    </div>

                                    <h4 class="header-title mb-3">Patients Analytics</h4>
                                    <div dir="ltr">
                                        <div id="sales-analytics" class="apex-charts" data-colors="#6658dd,#1abc9c"></div>
                                    </div>
                                </div>
                            </div> <!-- end card -->
                        </div> <!-- end col-->
                    </div>
                    <!-- end row -->
                    <!-- end row -->
                </div>

                <!-- -----------------New  -->

                <!-- end row-->

                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="dropdown float-end">
                                <form type="submit">
                            </div>
                            <h4 class="header-title mb-3">Lab Requests</h4>

                            <div class="todoapp">
                                <div class="wrapper">

                                    <div class="inputFields">
                                        <input type="text" id="taskValue" placeholder="Enter The Lab Study">
                                        <button type="submit" id="addBtn" class="btn"><i class="fa fa-plus"></i></button>
                                    </div>
                                    <div class="content">
                                        <ul id="tasks">

                                        </ul>
                                    </div>
                                </div>

                                <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
                                <style>
                                    .wrapper .title {
                                        font-weight: 800;
                                        text-align: center;
                                        font-size: 2rem;
                                        color: #111;
                                    }

                                    .wrapper .inputFields {
                                        margin: 25px 0;
                                        display: flex;
                                        justify-content: space-between;
                                        align-items: center;
                                        height: 50px;
                                    }

                                    .wrapper .inputFields input[type="text"] {
                                        border: 1px solid rgba(0, 0, 0, .3);
                                        outline: none;
                                        width: calc(100% - 60px);
                                        height: 100%;
                                        border-radius: 3px;
                                        padding: 0 10px;
                                        font-size: 1rem;
                                        transition: .3s;
                                    }

                                    .wrapper .inputFields input[type="text"]:focus {
                                        border-color: #6c5ce7;
                                    }

                                    .wrapper .inputFields button.btn {
                                        width: 50px;
                                        height: 100%;
                                        background: #6c5ce7;
                                        color: #FFF;
                                        outline: none;
                                        border: none;
                                        box-shadow: 0 0 5px rgba(0, 0, 0, .1);
                                        border-radius: 3px;
                                        font-size: 1rem;
                                        cursor: pointer;
                                        opacity: .8;
                                        transition: .3s;
                                    }

                                    .wrapper .inputFields button.btn:hover {
                                        opacity: 1;
                                    }

                                    .wrapper .content ul li {
                                        background: #f1f1f1;
                                        border-radius: 3px;
                                        margin: 8px 0;
                                        padding: 10px 0;
                                        border: 1px solid rgba(0, 0, 0, .1);
                                        display: flex;
                                        justify-content: space-between;
                                        align-items: center;
                                        font-size: 1rem;
                                        position: relative;
                                        overflow: hidden;
                                    }

                                    .wrapper .content ul li .text {
                                        color: #111;
                                        padding-left: 10px;
                                    }

                                    .wrapper .content ul li .icon {
                                        width: 50px;
                                        height: 100%;
                                        background: #e74c3c;
                                        position: absolute;
                                        right: -50px;
                                        top: 0;
                                        color: #FFF;
                                        display: flex;
                                        justify-content: center;
                                        align-items: center;
                                        cursor: pointer;
                                        border-radius: 0 3px 3px 0;
                                        transition: .3s linear;
                                    }

                                    .wrapper .content ul li:hover .icon {
                                        right: 0;
                                    }

                                    .wrapper .content .pending-text {
                                        color: #111;
                                        font-weight: 500;
                                        font-size: 1rem;
                                        margin-top: 10px;
                                        text-transform: capitalize;
                                    }
                                </style>
                                <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

                                <script>
                                    $(document).ready(function() {
                                        // Show Tasks
                                        function loadTasks() {
                                            $.ajax({
                                                url: "show-tasks.php",
                                                type: "POST",
                                                success: function(data) {
                                                    $("#tasks").html(data);
                                                }
                                            });
                                        }
                                        loadTasks();

                                        // Add Task
                                        $("#addBtn").on("click", function(e) {


                                            e.preventDefault();

                                            var task = $("#taskValue").val();
                                            console.log("jasim", task)
                                            if (task === '' || task.length == 0) {
                                                alert("please Fill The Task!")
                                                //   break;

                                            } else {
                                                $.ajax({
                                                    url: "add-task.php",
                                                    type: "POST",
                                                    data: {
                                                        task: task
                                                    },
                                                    success: function(data) {
                                                        loadTasks();
                                                        $("#taskValue").val('');
                                                        if (data == 0) {
                                                            alert("Something wrong went. Please try again.");
                                                        }
                                                    }
                                                });
                                            }

                                        });


                                        // Remove Task
                                        $(document).on("click", "#removeBtn", function(e) {
                                            e.preventDefault();
                                            var id = $(this).data('id');

                                            $.ajax({
                                                url: "remove-task.php",
                                                type: "POST",
                                                data: {
                                                    id: id
                                                },
                                                success: function(data) {
                                                    loadTasks();
                                                    if (data == 0) {
                                                        alert("Something wrong went. Please try again.");
                                                    }
                                                }

                                            });
                                        });
                                    });
                                </script>
                            </div>
                            <!-- end row -->

                        </div> <!-- container -->

                    </div> <!-- content -->

                    <?php include './components/footer.php'; ?>

                </div>



            </div>
            <!-- END wrapper -->

            <?php include './components/footer.php'; ?>

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->


    </div>
    <!-- END wrapper -->
    <div class="rightbar-overlay"></div>
    <!-- plugin js -->
    <script src="assets/dashboard/assets/libs/moment/min/moment.min.js"></script>
    <script src="assets/dashboard/assets/libs/fullcalendar/main.min.js"></script>
    <!-- Vendor js -->
    <script src="assets/dashboard/assets/js/vendor.min.js"></script>

    <!-- App js-->
    <script src="assets/dashboard/assets/js/app.min.js"></script>
    <!-- Todo app -->
    <script src="assets/dashboard/assets/js/pages/jquery.todo.js"></script>



    <script src="assets/dashboard/assets/libs/apexcharts/apexcharts.min.js"></script>
    <script src="https://apexcharts.com/samples/assets/ohlc.js"></script>
    <script src="assets/dashboard/assets/js/dashboard.init.js"></script>
</body>

</html>