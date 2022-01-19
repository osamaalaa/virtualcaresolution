<?php
include_once 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Sessions | Virtual Care Solutions VCS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="VCS virtual care solutions for YAS CLINIC GROUP." name="description" />
    <meta content="PQW" name="PQW" />
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
    <link rel="stylesheet" href="assets/css/jquery.dataTables.min.css">

</head>

<body>
    <div id="wrapper">
        <?php include './components/header.php'; ?>

        <!-- ========== Left Sidebar Start ========== -->
        <div class="left-side-menu">
            <div class="h-100" data-simplebar>
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
                                        <li class="breadcrumb-item active">Sessions</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Sessions | <?php echo $_SESSION['username']; ?></h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                    <div class="row">
                        <div class="col-12">

                            <div class="card">
                                <div class="card-body">

                                    <div class="">
                                        <table id="patients-table" class="table table-condensed table-hover table-striped" style="width:100%;">
                                            <thead>
                                                <tr>
                                                    <!-- <th data-column-id="id" >Project #</th> -->
                                                    <th data-column-id="pid">Session ID</th>
                                                    <th data-column-id="pname">Session Time</th>
                                                    <th data-column-id="cheifcomplaint">Session Cost</th>
                                                    <th data-column-id="mri">Session Disc %</th>
                                                    <th data-column-id="sickleave">Total Cost</th>
                                                    <th data-column-id="wfh">Currency</th>
                                                    <th data-column-id="wfh">Payment Status</th>
                                                    <th data-column-id="wfh">Date</th>
                                                    <!-- <th></th> -->
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $sql = $conn->query("SELECT session_id,  session_time, session_cost, sessions_discount, total_cost, currency,  IF(paid = '0',' Not Paid', 'Paid') as paid,  created_at  FROM sessions where doctor_name='" . $_SESSION['username'] . "' ") or die($conn->error);
                                                if ($sql->num_rows) {
                                                    while ($row = $sql->fetch_assoc()) {
                                                        echo ' <tr>
                                                                        <td>' . $row['session_id'] . '</td>
                                                                        <td>' . $row['session_time'] . '</td>
                                                                        <td>' . $row['session_cost'] . '</td>
                                                                        <td>' . $row['sessions_discount'] . '</td>
                                                                        <td>' . $row['total_cost'] . '</td>
                                                                        <td>' . $row['currency'] . '</td>  
                                                                        <td>' . $row['paid'] . '</td>  
                                                                        <td>' . $row['created_at'] . '</td>  
                                                                    </tr>
                                                                    ';
                                                    }
                                                }
                                                ?>

                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th colspan="2" style="text-align:right">Total:</th>
                                                    <th colspan="3" style="text-align:center"><span id="sum"><?php
                                                                                                                $username = $_SESSION['username'];
                                                                                                                $sql = mysqli_query($conn, "SELECT  FLOOR(SUM(DISTINCT total_cost)) as total from sessions WHERE doctor_name = '" . $username . "'");
                                                                                                                $data = mysqli_fetch_assoc($sql);
                                                                                                                echo "" . $data['total'] . "";
                                                                                                                ?> AED</span></th>

                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div> <!-- end card body-->
                            </div> <!-- end card -->
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




    <!-- App js -->
    <script src="assets/dashboard/assets/js/app.min.js"></script>
    <script src="assets/dashboard/assets/js/app.min.js"></script>
    <script src="assets/js/jquery.dataTables.min.js"></script>
    <script>
        // $.noConflict();
        $(document).ready(function() {
            $('#patients-table').DataTable();
        });
    </script>
    <!-- ====================================================================================== -->



</body>

</html>