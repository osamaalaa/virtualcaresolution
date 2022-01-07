<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Appointments | Virtual Care Solutions VCS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="VCS virtual care solutions for YAS CLINIC GROUP." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="./assets/images/fav.ico">

    <!-- Plugin css -->
    <link href="assets/dashboard/assets/libs/fullcalendar/main.min.css" rel="stylesheet" type="text/css" />

    <!-- App css -->
    <link href="assets/dashboard/assets/css/config/default/bootstrap.min.css" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
    <link href="assets/dashboard/assets/css/config/default/app.min.css" rel="stylesheet" type="text/css" id="app-default-stylesheet" />

    <link href="assets/dashboard/assets/css/config/default/bootstrap-dark.min.css" rel="stylesheet" type="text/css" id="bs-dark-stylesheet" />
    <link href="assets/dashboard/assets/css/config/default/app-dark.min.css" rel="stylesheet" type="text/css" id="app-dark-stylesheet" />

    <!-- icons -->
    <link href="assets/dashboard/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="assets/css/jquery.dataTables.min.css">
    <!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.15/css/dataTables.jqueryui.min.css"/> -->
  
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.15/js/dataTables.jqueryui.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
 
        alert("hi");
        $('#example').DataTable();
    });
</script>

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
                    <!-- <p class="text-muted">Admin Head</p> -->
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
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">VCS</a></li>
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Apps</a></li>
                                        <li class="breadcrumb-item active">Appointments</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Appointments</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-12">

                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <button class="btn btn-lg font-16 btn-primary w-100" id="btn-new-event"><i class="mdi mdi-plus-circle-outline"></i> Create New Appointment</button>

                                            <div id="external-events">
                                                <br>
                                                <!-- <p class="text-muted">Drag and drop your event or click in the calendar</p> -->

                                            </div>

                                        </div> <!-- end col-->

                                        <div class="col-lg-9">
                                            <div id="calendar"></div>
                                        </div> <!-- end col -->

                                    </div> <!-- end row -->
                                </div> <!-- end card body-->
                            </div> <!-- end card -->

                            <!-- Add New Event MODAL -->
                            <div class="modal fade" id="event-modal" tabindex="-1">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header py-3 px-4 border-bottom-0 d-block">
                                            <button type="button" class="btn-close float-end" data-bs-dismiss="modal" aria-label="Close"></button>
                                            <h5 class="modal-title" id="modal-title">Event</h5>
                                        </div>
                                        <div class="modal-body px-4 pb-4 pt-0">
                                            <form class="needs-validation" name="event-form" id="form-appointments" novalidate>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="mb-3">
                                                            <label class="form-label">Patient Name</label>
                                                            <input class="form-control" placeholder="" type="text" name="patient_name" id="patient_name" required />
                                                            <div class="invalid-feedback">Please provide a valid Patient name</div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="mb-3">
                                                            <label class="form-label">Phone Number</label>
                                                            <input class="form-control" placeholder="" type="text" name="phone_number" id="phone_number" required />
                                                            <div class="invalid-feedback">Please provide a valid Phone Number</div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                            <div class="mb-3"> 
                                                                <label class="form-label">Time</label>
                                                                <input type="time" class="form-control" name="time" id="time"  name="time" />

                                                                <div class="invalid-feedback">Please provide a valid Cheif complaint</div>
                                                            </div>
                                                    </div>
                                                    <div class="col-12">
                                                            <div class="mb-3">
                                                                <label class="form-label">Notes</label>
                                                                <textarea class="form-control" name="notes" id="notes"  name="notes" rows="3"></textarea>

                                                                <div class="invalid-feedback">Please provide a valid Cheif complaint</div>
                                                            </div>
                                                    </div>
                                                    <input type="hidden" id="doctor_name" name="doctor_name" value="<?php echo $_SESSION["username"] ?>"> 
                                                </div>
                                                <div class="row mt-2">
                                                    <div class="col-md-6 col-4">
                                                        <button type="button" class="btn btn-danger" id="btn-delete-event">Delete</button>
                                                    </div>
                                                    <div class="col-md-6 col-8 text-end">
                                                        <button type="button" class="btn btn-light me-1" data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-success" id="btn-save-event">Save</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div> <!-- end modal-content-->
                                </div> <!-- end modal dialog-->
                            </div>
                            <!-- end modal-->
                        </div>
                        <!-- end col-12 -->
                    </div> <!-- end row -->
                 

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

    <!-- plugin js -->
    <script src="assets/dashboard/assets/libs/moment/min/moment.min.js"></script>
    <script src="assets/dashboard/assets/libs/fullcalendar/main.min.js"></script>

    <!-- Calendar init -->
    <script src="assets/dashboard/assets/js/pages/appointment.init.js"></script>

    <!-- App js -->
    <script src="assets/dashboard/assets/js/app.min.js"></script>


</body>

</html>