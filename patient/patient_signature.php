<?php
require_once "../db.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Patient Signature | Virtual Care Solution</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Virtual Care Solution" name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="../assets/images/fav.ico">
    <!-- Plugins css -->
    <link href="../assets/dashboard/assets/libs/flatpickr/flatpickr.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/dashboard/assets/libs/selectize/css/selectize.bootstrap3.css" rel="stylesheet" type="text/css" />

    <!-- App css -->
    <link href="../assets/dashboard/assets/css/config/default/bootstrap.min.css" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
    <link href="../assets/dashboard/assets/css/config/default/app.min.css" rel="stylesheet" type="text/css" id="app-default-stylesheet" />

    <link href="../assets/dashboard/assets/css/config/default/bootstrap-dark.min.css" rel="stylesheet" type="text/css" id="bs-dark-stylesheet" />
    <link href="../assets/dashboard/assets/css/config/default/app-dark.min.css" rel="stylesheet" type="text/css" id="app-dark-stylesheet" />

    <!-- icons -->
    <link href="../assets/dashboard/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <style>
        .kbw-signature {
            width: 800px;
            height: 200px;
        }

        #signature canvas {
            width: 100% !important;
            height: auto;
        }

        /* .container{
        margin-left: 420px;
        
        } */
    </style>
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
                    <img src="assets/images/users/user-1.jpg" alt="user-img" title="Mat Helme" class="rounded-circle avatar-md">
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
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Patient</a></li>
                                        <li class="breadcrumb-item active">Dashboard</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Patient Signature - <?php echo $_SESSION['username']; ?> </h4>
                                <input style="display: none;" id="userId" value="<?php echo $_SESSION['user_id']; ?>" />

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                    <div class="row">

                        <div class="col-md-12">
                            <div class="card bg-pattern">
                                <div class="card-body">
                                    <div class="row">
                                        <div id="signature"></div>
                                    </div>
                                    <br />
                                    <button class="btn btn-danger" id="clear">Clear Signature</button>
                                    <button class="btn btn-success" id="Submit">Submit</button>
                                    <textarea id="sigpad" name="signature_image" style="display: none"></textarea>
                                </div>

                                <br />
                            </div>
                        </div>
                    </div>


                    <span id="res" style="color: green;"></span>
                </div>

                <div class="row filterable-content">

                    <div class="col-sm-6 col-xl-3 filter-item all web illustrator">
                        <div class="gal-box">
                            <a href="../images/signatures/<?php echo $_SESSION['user_id']; ?>.png" class="image-popup" title="Screenshot-1">
                                <img src="../images/signatures/<?php echo $_SESSION['user_id']; ?>.png" class="img-fluid" alt="confidential signature">
                            </a>
                            <div class="gall-info">
                                <h4 class="font-16 mt-0">Your Signature</h4>
                                <a href="javascript: void(0);">
                                    <img src="assets_patients/patient_avatar.png" alt="user-img" class="rounded-circle" height="24" />
                                    <span class="text-muted ms-1"><?php echo $_SESSION['username']; ?></span>
                                </a>
                            </div> <!-- gallery info -->
                        </div> <!-- end gal-box -->
                    </div> <!-- end col -->
                </div>
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
    <script src="../assets/dashboard/assets/js/vendor.min.js"></script>

    <!-- Plugins js -->
    <!-- <script src="../assets/dashboard/assets/libs/morris.js06/morris.min.js"></script>
    <script src="../assets/dashboard/assets/libs/raphael/raphael.min.js"></script> -->

    <!-- Dashboard init-->
    <script src="../assets/dashboard/assets/js/pages/dashboard-4.init.js"></script>

    <!-- App js -->
    <script src="../assets/dashboard/assets/js/app.min.js"></script>
    <!-- -----------------------------Doctors------------------------------------------------------------ -->
    <script type="text/javascript" src="../assets/dashboard/assets/js/jquery.min.js"></script>
    <link type="text/css" href="../assets/dashboard/assets/js/jquery-ui.css" rel="stylesheet">
    <script type="text/javascript" src="../assets/dashboard/assets/js/jquery-ui.min.js"></script>

    <!-- --------------------------------Signature-------------------------------------------------------- -->
    <script type="text/javascript" src="../assets/dashboard/assets/js/pages/jquery.signature.js"></script>
    <script type="text/javascript" src="../assets/dashboard/assets/js/pages/jquery.signature.min.js"></script>
    <script type="text/javascript" src="../assets/dashboard/assets/js/pages/jquery.ui.touch-punch.js"></script>
    <script type="text/javascript" src="../assets/dashboard/assets/js/pages/jquery.ui.touch-punch.min.js"></script>

    <!-- Magnific Popup-->
    <script src="../assets/dashboard/assets/libs/magnific-popup/jquery.magnific-popup.min.js"></script>
    <!-- ------------------------------------------------------------------------------------------------------ -->
    <script type="text/javascript">
        $(document).ready(function() {
            var pname = $("#pname").val();
            // ajax
            $.ajax({
                type: "POST",
                url: "../models/patient_appointments.php",
                data: {
                    pname: pname,

                },
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
                        $("#patientAppointment tbody").append(tr_str);
                    }

                }
            });

        });
    </script>
    <script type="text/javascript">
        var signature = $('#signature').signature({
            syncField: '#sigpad',
            syncFormat: 'PNG'
        });
        $('#clear').click(function(e) {
            e.preventDefault();
            signature.signature('clear');
            $("#sigpad").val('');
        });
    </script>

    <script type="text/javascript">
        $("#Submit").click(function() {

            //url = "http://192.168.1.147:8080/sign/signature.php";
            url = "../models/signature.php";
            sigpad = $("#sigpad").val();
            var userId = $("#userId").val();
            $('#res').html('loading....');
            $.ajax({
                type: 'POST',
                url: url,
                data: {
                    signature_image: sigpad,
                    user_id: userId
                },
                success: function(result) {
                    $('#res').html('Signature Uploaded successfully');
                    // location.reload();

                },
            });

        });
    </script>

    <!-- ------------------------------------------------------------------------------ -->
</body>

</html>