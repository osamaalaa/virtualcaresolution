<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Patients Portal | Virtual Care Solutions VCS</title>
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

</head>

<!-- body start -->

<body class="loading" data-layout='{"mode": "light", "width": "fluid", "menuPosition": "fixed", "sidebar": { "color": "light", "size": "default", "showuser": false}, "topbar": {"color": "dark"}, "showRightSidebarOnPageLoad": true}'>

    <!-- Begin page -->
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
                                <h4 class="page-title">Patients</h4>
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
                                            <button class="btn btn-lg font-16 btn-primary w-100" id="btn-new-event"><i class="mdi mdi-plus-circle-outline"></i> Add Patient</button>

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
                                            <h5 class="modal-title" id="modal-title">Patient Name</h5>
                                        </div>
                                        <div class="modal-body px-4 pb-4 pt-0">
                                            <form class="needs-validation" method="post"  name="event-form" id="form-event" novalidate>
                                                <div class="row">
                                                    <div class="col-12">
                                                    <div class="col-12">
                                                        <div class="mb-3">
                                                            <label class="form-label">PID</label>
                                                            <!-- <input class="form-control" type="text" name="pid" value="110"  disabled /> -->
                                                            <INPUT class="form-control patient-id" TYPE=TEXT NAME="ACCOUNT" id="event-title" VALUE="" MAXLENGTH=16 SIZE=16 disabled >
                                                            <div class="invalid-feedback">Please provide a valid patient id</div>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Patients Name</label>
                                                        <input class="form-control" type="text"id="pname" name="title" id="event-title"  required />
                                                        <div class="invalid-feedback">Please provide a valid patient name</div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="mb-3">
                                                            <label class="form-label">MRI </label>
                                                            <input class="form-control" type="text" id="mri" name="mri" id="event-title" required />
                                                            <div class="invalid-feedback">Please provide a valid MRI </div>
                                                        </div>
                                                    </div>
                                                  
                                                    <div class="col-12">
                                                        <div class="mb-3">
                                                            <label class="form-label">Cheif complaint</label>
                                                            <textarea class="form-control"id="cheifcomplaint"  name="cheifcomplaint" rows="3"></textarea>
                                                           
                                                            <div class="invalid-feedback">Please provide a valid Cheif complaint</div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="mb-3">
                                                            <label class="form-label">Sick Leave Recommendation </label>
                                                            <!-- <input class="form-control"  type="text" name="sickleave" id="event-title" required /> -->
                                                            <input id="toggle-on" id="sickleave" value="yes" name="sickleave" type="radio">
                                                            <label class="form-label" for="toggle-on">Yes</label>
                                                            <input id="toggle-off"  id="sickleave" value="no" name="sickleave" type="radio">
                                                            <label class="form-label" for="toggle-off">No</label>
                                                            <div class="invalid-feedback">Please provide a valid Sick Leave Recommendation </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="mb-3">
                                                            <label class="form-label">WFH Recomendation </label>
                                                            <input id="toggle-on" id="wfh" name="wfh" value="yes" type="radio">
                                                            <label class="form-label" for="toggle-on">Yes</label>
                                                            <input id="toggle-off" id="wfh" name="wfh" value="no" type="radio">
                                                            <label class="form-label" for="toggle-off">No</label>
                                                            <div class="invalid-feedback">Please provide a valid WFH Recommendation </div>
                                                        </div>
                                                    </div>             
                                                </div>
                                                <div class="row mt-2">
                                                    <div class="col-md-6 col-4">
                                                         <input type="hidden" id="doctor_name" name="doctor_name" value="<?php echo $_SESSION["user_id"] ?>">
                                                            <button type="button" class="btn btn-danger" id="btn-delete-event">Delete</button>
                                                    </div>
                                                    <div class="col-md-6 col-8 text-end">
                                                        <button type="button" class="btn btn-light me-1" data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-success" id="btn-save-patient">Save</button>
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
    <script src="assets/dashboard/assets/js/pages/calendar.init.js"></script>

    <!-- App js -->
    <script src="assets/dashboard/assets/js/app.min.js"></script>

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
 
                if(pname==''||mri==''||cheifcomplaint=='') {
                    alert("Please fill all fields.");
                    return false;
                }
                var sickleave = $('input[name="sickleave"]:checked').val();
                var wfh = $('input[name="wfh"]:checked').val();
                var doctor_name =  $("#doctor_name").val();
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


    <!-- ======================================================================================= -->

</body>

</html>