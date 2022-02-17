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
                                        <li class="breadcrumb-item active">VMR</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">VMR | <?php echo $_SESSION['username']; ?></h4>
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
                                                        <th data-column-id="id">#</th>
                                                        <th data-column-id="uuid">UUID</th>
                                                        <th data-column-id="patient_name">Patient Name</th>
                                                        <th data-column-id="language">Language</th>
                                                        <th data-column-id="DOB">DOB</th>
                                                        <th data-column-id="city">City</th>
                                                        <th data-column-id="phone_contact">Phone</th>
                                                        <th data-column-id="date">Date</th>
                                                        <th data-column-id="sex">Sex</th>
                                                        <th data-column-id="wfh">WFH</th>
                                                        <th data-column-id="sick_leave">Sick Leave</th>
                                                        <th data-column-id="MRI">MRI</th>
                                                        <th data-column-id="doctor_name">Doctor</th>
                                                        <!-- <th></th> -->
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $sql = $conn->query("SELECT 
                                                    pa.id,
                                                    pa.uuid, 
                                                    pa.patient_name,
                                                    pa.language,
                                                    pa.DOB,
                                                    pa.city,
                                                    pa.phone_contact,
                                                    pa.date,
                                                    pa.sex,
                                                    pa.wfh, 
                                                    pa.sick_leave, 
                                                    pa.MRI, 
                                                    ap.doctor_name
                                                    from patient_data pa
                                                    LEFT JOIN appointments ap
                                                    ON ap.appointments_id = pa.appointments_id") or die($conn->error);
                                                    if ($sql->num_rows) {
                                                        while ($row = $sql->fetch_assoc()) {
                                                            echo ' <tr>
                                                                            <td>' . $row['id'] . '</td>
                                                                            <td>' . $row['uuid'] . '</td>
                                                                            <td>' . $row['patient_name'] . '</td>
                                                                            <td>' . $row['language'] . '</td>
                                                                            <td>' . $row['DOB'] . '</td>
                                                                            <td>' . $row['city'] . '</td>
                                                                            <td>' . $row['phone_contact'] . '</td>  
                                                                            <td>' . $row['date'] . '</td>  
                                                                            <td>' . $row['sex'] . '</td>  
                                                                            <td>' . $row['wfh'] . '</td> 
                                                                            <td>' . $row['sick_leave'] . '</td> 
                                                                            <td>' . $row['MRI'] . '</td> 
                                                                            <td>' . $row['doctor_name'] . '</td> 
                                                                        </tr>
                                                                        ';
                                                        }
                                                    }
                                                    ?>
                                                </tbody>
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