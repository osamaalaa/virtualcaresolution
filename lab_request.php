<?php
include_once 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Lab Request | Virtual Care Solutions VCS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="VCS virtual care solutions for YAS CLINIC GROUP." name="description" />
    <meta content="VCS" name="YasClinicGroup" />
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
                                        <li class="breadcrumb-item active">Lab Request</li>
                                    </ol>
                                </div>
                                <h4 class="page-title"> Lab Request </h4>
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
                                                    <th data-column-id="uuid">Request Description</th>
                                                    <th data-column-id="patient_name">Doctor Name</th>
                                                    <th data-column-id="language">Request Date</th>

                                                    <!-- <th></th> -->
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $sql = $conn->query("SELECT id, title, doctor_name, createdAt FROM tasks") or die($conn->error);
                                                if ($sql->num_rows) {
                                                    while ($row = $sql->fetch_assoc()) {
                                                        echo ' <tr>
                                                                            <td>' . $row['id'] . '</td>
                                                                            <td>' . $row['title'] . '</td>
                                                                            <td>' . $row['doctor_name'] . '</td>
                                                                         
                                                                            <td>' . $row['createdAt'] . '</td>
                                                                            
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

    <!-- Vendor js -->
    <script src="assets/dashboard/assets/js/vendor.min.js"></script>

    <!-- plugin js -->
    <script src="assets/dashboard/assets/libs/moment/min/moment.min.js"></script>
    <script src="assets/dashboard/assets/libs/fullcalendar/main.min.js"></script>

    <!-- Calendar init -->
    <script src="assets/dashboard/assets/js/pages/calendar.init.js"></script>

    <!-- App js -->
    <script src="assets/dashboard/assets/js/app.min.js"></script>
    <script src="assets/dashboard/assets/js/app.min.js"></script>
    <script src="assets/js/jquery.dataTables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/v/bs4-4.1.1/jszip-2.5.0/dt-1.10.22/b-1.6.5/b-html5-1.6.5/b-print-1.6.5/r-2.2.6/datatables.min.js"></script>
    <link href="https://cdn.datatables.net/v/bs4-4.1.1/jszip-2.5.0/dt-1.10.22/b-1.6.5/b-html5-1.6.5/b-print-1.6.5/r-2.2.6/datatables.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>

    <script>
        // $.noConflict();
        $(document).ready(function() {

            $('#patients-table').DataTable({
                responsive: true,
                dom: 'Blfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'print'
                ]
            });

        });
    </script>
    <!-- ====================================================================================== -->
    <script>
        function randomNumber(len) {
            var randomNumber;
            var n = '';

            for (var count = 0; count < len; count++) {
                randomNumber = Math.floor(Math.random() * 10);
                n += randomNumber.toString();
            }
            return n;
        }

        $('.patient-id').val() = randomNumber(9);

        function Toastify(options) {
            M.toast({
                html: options.text,
                classes: options.classes
            })
        }

        var Toast = {
            info: (msg) => {
                Toastify({
                    text: msg,
                    classes: "info-toast"
                })
            },
            notice: (msg) => {
                Toastify({
                    text: msg,
                    classes: "notice-toast"
                })
            },
            error: (msg) => {
                Toastify({
                    text: msg,
                    classes: "error-toast"
                })
            }
        }

        $(document).ready(function() {

            $("#btn-save-patient").click(function() {

                var pname = $("#pname").val();
                var mri = $("#mri").val();
                var cheifcomplaint = $("#cheifcomplaint").val();
                // var wfh = $("#wfh").val();

                if (pname == '' || mri == '' || cheifcomplaint == '') {
                    alert("Please fill all fields.");
                    return false;
                }
                var sickleave = $('input[name="sickleave"]:checked').val();
                var wfh = $('input[name="wfh"]:checked').val();
                var doctor_name = $("#doctor_name").val();
                var pid = Math.floor(100000 + Math.random() * 900000)
                $.ajax({
                    type: "POST",
                    url: "models/patients.php",
                    data: {
                        pname: pname,
                        mri: mri,
                        cheifcomplaint: cheifcomplaint,
                        wfh: wfh,
                        sickleave: sickleave,
                        doctor_name: doctor_name,
                        pid: pid
                    },
                    cache: false,
                    success: function(data) {
                        Toast.notice("Link Copied to clipboard!");
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr);
                    }
                });

            });

        });
    </script>


</body>

</html>