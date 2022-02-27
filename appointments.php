<?php
  require_once "db.php";
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Appointments| Virtual Care Solutions VCS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="VCS virtual care solutions for YAS CLINIC GROUP." name="description" />
    <meta content="YasClinicGroup" name="author" />
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
    <!-- Sweet Alert-->
    <link href="assets/dashboard/assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />
    <!-- Select CSS  -->
    <link href="assets/dashboard/assets/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
    <!--  -->


</head>

<!-- body start -->

<body>
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
                                            <!-- <button class="btn btn-lg font-16 btn-primary w-100" id="btn-new-event"><i class="mdi mdi-plus-circle-outline"></i> Create New Appointment</button> -->

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
                                                            <label class="form-label">UUID</label>
                                                            <input type="text" class="form-control" name="uuid" id="uuid" name="uuid" />

                                                            <div class="invalid-feedback">Please provide a valid uuid</div>
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
                                                            <input type="time" class="form-control" name="time" id="time" name="time" />

                                                            <div class="invalid-feedback">Please provide a valid Cheif complaint</div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="mb-3">
                                                            <label class="form-label">Notes</label>
                                                            <textarea class="form-control" name="notes" id="notes" name="notes" rows="3"></textarea>

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
                            <!-- Add Prescription modal -->
                            <div class="modal fade" id="presc-modal" tabindex="-1">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header py-3 px-4 border-bottom-0 d-block">
                                            <button type="button" class="btn-close float-end" data-bs-dismiss="modal" aria-label="Close"></button>
                                            <h5 class="modal-title" id="modal-title">Add Prescription</h5>
                                        </div>
                                        <div class="modal-body px-4 pb-4 pt-0">
                                            <form class="needs-validation" name="presc-form" id="form-presc" novalidate>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="mb-3">
                                                            <label class="form-label">Drug Name</label>
                                                            <input class="form-control" placeholder="" type="text" name="drug_name" id="drug_name" required />
                                                            
                                       
                                                            <div class="invalid-feedback">Please provide a valid drug name</div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="mb-3">
                                                            <label class="form-label">Dose</label>
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" name="Strength" id="Strength" placeholder="Strength" required />
                                                                <input type="text" class="form-control" name="dose" id="dose" required placeholder="Dose" />
                                                                <input type="text" class="form-control" name="Duration" id="Duration" required placeholder="Duration" />
                                                                <select class="form-control" name="Durationt" id="Durationt" required> Duration Type
                                                                    <option value="1">Daily</option>
                                                                    <option value="7">Weekly</option>
                                                                    <option value="30">Monthly</option>
                                                                </select>

                                                            </div>


                                                            <div class="invalid-feedback">Please provide a valid Duration</div>
                                                            <div class="invalid-feedback">Please provide a valid dose</div>
                                                            <div class="invalid-feedback">Please provide a valid strength</div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="mb-3">
                                                            <label class="form-label">Start Date</label>
                                                            <input type="date" class="form-control" name="startDate" id="startDate" />

                                                            <div class="invalid-feedback">Please provide a valid Start Date</div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="mb-3">
                                                            <label class="form-label">Comments / Directions For Use</label>
                                                            <textarea class="form-control" name="comments" id="comments" rows="3"></textarea>

                                                            <div class="invalid-feedback">Please provide a valid comment</div>
                                                        </div>
                                                    </div>
                                                    <input type="hidden" id="doctor_name" name="doctor_name" value="<?php echo $_SESSION["username"] ?>">
                                                </div>
                                                <div class="row">
                                                    <div class="col-12">

                                                        <div class="card">
                                                            <div class="card-body">
                                                                <div class="row">
                                                                    <div class="col-lg-12">
                                                                        <div class="table-responsive" id="presc-container">
                                                                            <table id="presc-table" class="table activate-select dt-responsive nowrap w-100">
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th> Id </th>
                                                                                        <th> Name </th>
                                                                                        <th> Strength </th>
                                                                                        <th> Dose </th>
                                                                                        <th> Duration </th>
                                                                                        <th> Type </th>
                                                                                        <th> Start Date </th>
                                                                                        <th> Comments </th>
                                                                                        <th colspan="3"> Action </th>
                                                                                    </tr>
                                                                                </thead>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mt-2">
                                                    <div class="col-md-12 col-8 text-end">
                                                        <button type="button" id="discard" class="btn btn-light me-1" data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-success" id="btn-save-presc">Add Drug</button>
                                                        <!-- <button type="submit" class="btn btn-success" id="btn-complete-presc">Complete</button> -->
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div> <!-- end modal-content-->
                                </div> <!-- end modal dialog-->
                            </div>
                            <!-- End Add Prescription Modal -->
                            <!-- start edit prescription modal -->
                            <div class="modal fade" id="presc-edit-modal" tabindex="-1">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header py-3 px-4 border-bottom-0 d-block">
                                            <button type="button" class="btn-close float-end" data-bs-dismiss="modal" aria-label="Close"></button>
                                            <h5 class="modal-title" id="modal-titleedit">Edit Prescription</h5>
                                        </div>
                                        <div class="modal-body px-4 pb-4 pt-0">
                                            <form class="needs-validation" name="presc-formedit" id="form-prescedit" novalidate>
                                            <div class="row">
                                                    <div class="col-12">
                                                        <div class="mb-3">
                                                            <label class="form-label">Drug Name</label>
                                                            <input class="form-control" placeholder="" type="text" name="drug_namee" id="drug_nameedit" required />
                                                            <div class="invalid-feedback">Please provide a valid drug name</div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="mb-3">
                                                            <label class="form-label">Dose</label>
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" name="Strength" id="Strengthedit" placeholder="Strength" required />
                                                                <input type="text" class="form-control" name="dose" id="doseedit" required placeholder="Dose" />
                                                                <input type="text" class="form-control" name="Duration" id="Durationedit" required placeholder="Duration" />
                                                                <select class="form-control" name="Durationt" id="Durationtedit" required> Duration Type
                                                                    <option value="1">Daily</option>
                                                                    <option value="7">Weekly</option>
                                                                    <option value="30">Monthly</option>
                                                                </select>

                                                            </div>


                                                            <div class="invalid-feedback">Please provide a valid Duration</div>
                                                            <div class="invalid-feedback">Please provide a valid dose</div>
                                                            <div class="invalid-feedback">Please provide a valid strength</div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="mb-3">
                                                            <label class="form-label">Start Date</label>
                                                            <input type="date" class="form-control" name="startDate" id="startDateedit" />

                                                            <div class="invalid-feedback">Please provide a valid Start Date</div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="mb-3">
                                                            <label class="form-label">Comments / Directions For Use</label>
                                                            <textarea class="form-control" name="comments" id="commentsedit" rows="3"></textarea>

                                                            <div class="invalid-feedback">Please provide a valid comment</div>
                                                        </div>
                                                    </div>
                                                    <input type="hidden" id="doctor_nameedit" name="doctor_name" value="<?php echo $_SESSION["username"] ?>">
                                                </div>
                                                <div class="row mt-2">
                                                    <div class="col-md-12 col-8 text-end">
                                                        <button type="button" id="discardedit" class="btn btn-light me-1" data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-success" id="btn-save-prescedit">Save</button>
                                                        <!-- <button type="submit" class="btn btn-success" id="btn-complete-presc">Complete</button> -->
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div> <!-- end modal-content-->
                                </div> <!-- end modal dialog-->
                            </div>
                            <!-- end edit prescription modal -->
                        </div>
                        <!-- end col-12 -->
                    </div> <!-- end row -->
                    <div class="row">
                        <div class="col-12">

                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="table-responsive" id="appointments-container">
                                                <table id="appointment-table" class="table activate-select dt-responsive nowrap w-100">
                                                    <thead>
                                                        <tr>
                                                            <!-- <th>click<th> -->
                                                            <th> UUID </th>
                                                            <th> Patient Name </th>
                                                            <th> Phone Number </th>
                                                            <th> Date </th>
                                                            <th> Time </th>
                                                            <th> Status </th>
                                                            <th colspan="3"> Action </th>
                                                        </tr>
                                                    </thead>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ------------------------------------Rasa------------------------------------- -->

                    <!-- -------------------------------------------------------------------------------- -->
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
    <!-- <script src="assets/dashboard/assets/js/vendor.min.js"></script> -->

    <!-- plugin js -->
    <script src="assets/dashboard/assets/libs/moment/min/moment.min.js"></script>
    <script src="assets/dashboard/assets/libs/fullcalendar/main.min.js"></script>

    <!-- Calendar init -->
    <script src="assets/dashboard/assets/js/pages/appointment.init.js"></script>

    <!-- App js -->
    <script src="assets/dashboard/assets/js/app.min.js"></script>
    <script src="assets/dashboard/assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="assets/dashboard/assets/libs/datatables.net-bs5/js/dataTables.bootstrap5.min.js"></script>
    <script src="assets/dashboard/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="assets/dashboard/assets/libs/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js"></script>
    <script src="assets/dashboard/assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="assets/dashboard/assets/libs/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js"></script>
    <script src="assets/dashboard/assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="assets/dashboard/assets/libs/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="assets/dashboard/assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="assets/dashboard/assets/libs/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="assets/dashboard/assets/libs/datatables.net-select/js/dataTables.select.min.js"></script>
    <script src="assets/dashboard/assets/libs/pdfmake/build/pdfmake.min.js"></script>
    <script src="assets/dashboard/assets/libs/pdfmake/build/vfs_fonts.js"></script>
    <!-- Sweet Alerts js -->
    <script src="assets/dashboard/assets/libs/sweetalert2/sweetalert2.all.min.js"></script>
    <!-- Sweet alert init js-->
    <script src="assets/dashboard/assets/js/pages/sweet-alerts.init.js"></script>
    <!-- third party js ends -->


    <script>
        $presData = "";
        $editData = "";
        $drug = "";
        $apptid =0;
        console.log('presData', $presData)
        $(document).ready(function() {
            var table = $('#appointment-table').DataTable({
                dom: '<"top"Bif>rt<"bottom"lp><"clear">',
                lengthChange: !1,
                buttons: ["print", "pdf"],
                buttons: {
                    buttons: [{
                            extend: "print",
                            className: "btn-light"
                        },
                        {
                            extend: "pdf",
                            className: "btn-light"
                        }
                    ]
                },
                "ajax": {
                    "url": "appointments_control.php",
                    "type": "GET",
                    "datatype": "json",
                    "dataSrc": "",


                },
                drawCallback: function() {
                    $(".dataTables_paginate > .pagination")
                        .addClass("pagination-rounded")
                },
                "columns": [
                    //         {
                    //     "className":      'details-control',
                    //     "orderable":      false,
                    //     "data":           null,
                    //     "defaultContent": ''
                    // },
                    {
                        "data": "uuid"
                    },

                    {
                        "data": "patient_name"
                    },
                    {
                        "data": "phone_number"
                    },
                    {
                        "data": "date"
                    },
                    {
                        "data": "time"
                    },
                    {
                        "data": "status_name"
                    },
                    {
                        data: "status",
                        render: function(data, type, row, meta) {
                            var thisId = $('#appointments_id').val();
                            //$presData =row
                            console.log('presData', $presData)
                            console.log("ThisId", row.appointments_id)
                            return (type === 'display' && data == 1) ?
                                '<button class="btn btn-info"  id="notConfirmed" title="Confirm Appointment ?"  data-row= "' + row.appointments_id + '" data-id="' + data + '" ><span class="mdi mdi-book-information-variant"></span></button>  <button class="btn btn-danger" title="Delete Appointment" id="removeAppoint" data-remove="' + row.appointments_id + '"><span class="mdi mdi-delete-circle"></span></button>' :
                                (type === 'display' && data == 4) ?
                                '<button class="btn btn-success" title="Finished ?"data-patient_name= "' + row.patient_name + '" data-date= "' + row.created_at + '" data-phone_number= "' + row.phone_number + '" data-uuid= "' + row.uuid + '" data-row= "' + row.appointments_id + '" id="confirmed"> <span class="mdi mdi-ticket-confirmation"></span></button> <button class="btn btn-danger" title="Delete Appointment" id="removeAppoint" data-remove="' + row.appointments_id + '"><span class="mdi mdi-delete-circle"></span></button>' :
                                (type === 'display' && data == 2) ?
                                '<button class="btn btn-info details-control"   title="Show Prescription ?"data-patient_name= "' + row.patient_name + '" data-date= "' + row.created_at + '" data-phone_number= "' + row.phone_number + '" data-uuid= "' + row.uuid + '" data-row= "' + row.appointments_id + '" id="showprescription"> <span class="mdi mdi-ticket-confirmation"></span></button> <button class="btn btn-info"  data-bs-toggle="modal" data-bs-target="#presc-modal" title="Add Prescription ?"data-patient_name= "' + row.patient_name + '" data-date= "' + row.created_at + '" data-phone_number= "' + row.phone_number + '" data-uuid= "' + row.uuid + '" data-row= "' + row.appointments_id + '" id="prescription"> <span class="mdi mdi-ticket-confirmation"></span></button> <button class="btn btn-success" title="Finish Prescription ?" id="btn-complete-presc" data-remove="' + row.appointments_id + '"><span class="mdi mdi-ticket-confirmation"></span></button> <button class="btn btn-danger" title="Delete Appointment" id="addPresc" data-remove="' + row.appointments_id + '"><span class="mdi mdi-delete-circle"></span></button>' :
                                'Done'
                        }
                    },
                ]
            });
          
            function format(d) {
                //latest code
                // `d` is the original data object for the row
                var abc= 'this is text';
                var appt_idd = d.appointments_id;
                document.cookie = `var1=${appt_idd}`;
                
        
                return '<table cellpadding="5" data-id="" cellspacing="0" border="0" style="padding-left:50px;">' +
               '<thead>'+ 
               '<th> Id </th>'+
               '<th> Drug name </th>'+
               '<th> strength </th>'+
               '<th> Dose </th>'+
               '<th> Duration </th>'+
               '<th> duration type </th>'+
               '<th> Start Date </th>'+
               '<th> Comments </th>'+
               '<th> Action </th>'+
               '</thead>'+

                + '<?php  
                $id = $_COOKIE['var1'];


                
                $sql = "SELECT 
                           appointment_id, id, drug_name, strength, dose, duration_count,
                            duration_type, Date(start_date) as start_date, comments
                            from prescriptions  WHERE appointment_id = '" . mysqli_real_escape_string($conn, $id) . "'
                            ";
                            $result = mysqli_query($conn,$sql);
                            
                            while ($row = mysqli_fetch_assoc($result)) 
                            {
                            ?>'+
                                '<tr>' +
                                '<td>' + '<?php
                                                echo "" . $row['appointment_id'] . "";
                                                ?>'
                                + '</td>' +
                                '<td>' + '<?php
                                                echo "" . $row['drug_name'] . "";
                                                ?>'
                                + '</td>' +
                                '<td>' + '<?php
                                                echo "" . $row['strength'] . "";
                                                ?>'
                                + '</td>' +
                                '<td>' + '<?php
                                                echo "" . $row['dose'] . "";
                                                ?>'
                                + '</td>' +
                                '<td>' + '<?php
                                                echo "" . $row['duration_count'] . "";
                                                ?>'
                                + '</td>' +
                                '<td>' + '<?php
                                                echo "" . $row['duration_type'] . "";
                                                ?>'
                                + '</td>' +
                                '<td>' + '<?php
                                                echo "" . $row['start_date'] . "";
                                                ?>'
                                + '</td>' +
                                '<td>' + '<?php
                                                echo "" . $row['comments'] . "";
                                                ?>'
                                + '</td>' +
                                '<td>' + '<button data-bs-toggle="modal" data-bs-target="#presc-edit-modal" class="btn btn-info"  id="editPrescr" title="Edit Prescription ?"  data-drug_name= "<?php echo $row['drug_name'];?>" data-id="<?php echo $row['id'];?>" data-strength="<?php echo $row['strength'];?>" data-dose="<?php echo $row['dose'];?>" data-duration_count="<?php echo $row['duration_count'];?>" data-duration_type="<?php echo $row['duration_type'];?>" data-start_date="<?php echo $row['start_date'];?>" data-comments="<?php echo $row['comments'];?>" ><span class="mdi mdi-tooltip-edit"></span></button>  <button class="btn btn-danger" title="Delete Prescription" id="removePresc" data-remove="<?php echo $row['id'];?>"><span class="mdi mdi-delete-circle"></span></button>'
                                + '</td>' +
                                '</tr>' +
                                '<?php } ?>' + 
                    '</table>';

            }
            $('#appointment-table tbody').on('click', 'button.details-control', function() {
                console.log('hiii')
                var tr = $(this).closest('tr');
                var row = table.row(tr);
                console.log('data is', row.data())
                if (row.child.isShown()) {
                    // This row is already open - close i   t
                    row.child.hide();
                    tr.removeClass('shown');
                } else {
                    // Open this row
                    var d = row.data()
                    $apptid =  d.appointments_id;
                    row.child(format(row.data())).show();
                    tr.addClass('shown');
                }
            });
            //prescription edit modal
            $('#presc-edit-modal').on('show.bs.modal', function(e) {
                var product = $(e.relatedTarget).data();
                $editData = product
                console.log($editData, '------')
                $('#drug_nameedit').val(product.drug_name);
                $('#Strengthedit').val(product.strength);
                $('#doseedit').val(product.dose);
                $('#Durationedit').val(product.duration_count);
                $('#Durationtedit').val(product.duration_type);
                $('#startDateedit').val(product.start_date);
                $('#commentsedit').val(product.comments)

            });
            //prescription edit modal end
            //prescription table
            $('#presc-modal').on('show.bs.modal', function(e) {


                var product = $(e.relatedTarget).data();
                console.log('product to fetch', product)
                $presData = product
                var table = $('#presc-table').DataTable({
                    dom: '<"top"Bif>rt<"bottom"lp><"clear">',
                    lengthChange: !1,
                    buttons: ["print", "pdf"],
                    buttons: {
                        buttons: [{
                                extend: "print",
                                className: "btn-light"
                            },
                            {
                                extend: "pdf",
                                className: "btn-light"
                            }
                        ]
                    },
                    retrieve: true,
                    "ajax": {
                        "url": "fetchPrescriptions.php",
                        "type": "GET",
                        "datatype": "json",
                        "dataSrc": "",
                        data: {
                            appointment_id: product.row
                        }
                    },
                    drawCallback: function() {
                        $(".dataTables_paginate > .pagination")
                            .addClass("pagination-rounded")

                    },
                    "columns": [{
                            "data": "id"
                        },

                        {
                            "data": "drug_name"
                        },
                        {
                            "data": "strength"
                        },
                        {
                            "data": "dose"
                        },
                        {
                            "data": "duration_count"
                        },
                        {
                            "data": "duration_type"
                        },
                        {
                            "data": "start_date"
                        },
                        {
                            "data": "comments"
                        },
                        {
                            data: null,
                            render: function(data, type, row) {
                                console.log('row is', row)
                                return '<!-- Button trigger modal --><button data-bs-toggle="modal" data-bs-target="#presc-edit-modal" class="btn btn-info"  id="editPrescr" title="Edit Prescription ?"  data-drug_name= "' + row.drug_name + '" data-id="' + data.id + '" data-strength="' + data.strength + '" data-dose="' + data.dose + '" data-duration_count="' + data.duration_count + '" data-duration_type="' + data.duration_type + '" data-start_date="' + data.start_date + '" data-comments="' + data.comments + '" ><span class="mdi mdi-tooltip-edit"></span></button>  <button class="btn btn-danger" title="Delete Prescription" id="removePresc" data-remove="' + row.id + '"><span class="mdi mdi-delete-circle"></span></button>';


                            }
                        }
                    ]
                });


            });


            //prescription table end
            $(document).on("click", "#removeAppoint", function(e) {
                e.preventDefault();
                var appointments_id = $(this).data('remove');


                $.ajax({
                    url: "./models/delete_appointments.php",
                    type: "POST",
                    data: {
                        appointments_id: appointments_id
                    },
                    success: function(data) {
                        $('#appointment-table').DataTable().ajax.reload();
                        Swal.fire({
                            title: "Success !",
                            text: "Appointment has been Deleted successfully!",
                            icon: "success"
                        })

                    }

                });
            });
            //del prescription
            $(document).on("click", "#removePresc", function(e) {
                e.preventDefault();
                var id = $(this).data('remove');
                $.ajax({
                    url: "./models/delete_prescriptions.php",
                    type: "POST",
                    data: {
                        id: id
                    },
                    success: function(data) {
                        $('#presc-table').DataTable().ajax.reload();
                        Swal.fire({
                            title: "Success !",
                            text: "Prescription has been Deleted successfully!",
                            icon: "success"
                        })

                    }

                });
            });
            //del prescription end
            //edit prescription start

            $(document).on("click", "#btn-save-prescedit", function(e) {
                e.preventDefault();
                value = "<?php echo $_SESSION['user_id']; ?>"
                var data = {
                    'drug_name': $('#drug_nameedit').val(),
                    'Strength': $('#Strengthedit').val(),
                    'dose': $('#doseedit').val(),
                    'Duration': $('#Durationedit').val(),
                    'Durationt': $('#Durationtedit').val(),
                    'startDate': $('#startDateedit').val(),
                    'doctorid': value,
                    'comments': $('#commentsedit').val(),
                    'prescid': $editData.id
                }

                $.ajax({
                    url: "./models/edit_prescription.php",
                    type: "POST",

                    data: data,
                    success: function(data) {

                        Swal.fire({
                            title: "Success !",
                            text: "Prescription has been updated successfully!",
                            icon: "success"
                        })
                        // $("#presc-formedit")[0].reset();
                        $('#presc-edit-modal').modal('toggle');
                    }

                });
            });
            //edit prescription end
            $(document).on("click", "#btn-save-presc", function(e) {
                e.preventDefault();
                value = "<?php echo $_SESSION['user_id']; ?>"
                var uuid = $(this).data('uuid');
                var data = {
                    'drug_name': $('#drug_name').val(),
                    'Strength': $('#Strength').val(),
                    'dose': $('#dose').val(),
                    'Duration': $('#Duration').val(),
                    'Durationt': $('#Durationt').val(),
                    'startDate': $('#startDate').val(),
                    'uuid': $presData.uuid,
                    'doctorid': value,
                    'comments': $('#comments').val(),
                    'appointments_id': $presData.row
                }

                $.ajax({
                    url: "./models/add_prescription.php",
                    type: "POST",

                    data: data,
                    success: function(data) {
                        $('#appointment-table').DataTable().ajax.reload();
                        Swal.fire({
                            title: "Success !",
                            text: "Prescription has been added successfully!",
                            icon: "success"
                        })
                        $("#form-presc")[0].reset();

                    }

                });
            });
            $(document).on("click", "#notConfirmed", function(e) {
                e.preventDefault();
                var appointments_id = $(this).data('row');


                $.ajax({
                    url: "./models/updateNotConfirmed.php",
                    type: "POST",
                    data: {
                        appointments_id: appointments_id
                    },
                    success: function(data) {
                        $('#appointment-table').DataTable().ajax.reload();
                        Swal.fire({
                            title: "Success !",
                            text: "Appointment has been Updated Successfully!",
                            icon: "success"
                        })

                    }

                });
            });

            $(document).on("click", "#btn-complete-presc", function(e) {
                e.preventDefault();
                $.ajax({
                    url: "./models/prescriptionAdded.php",
                    type: "POST",
                    data: {
                        appointments_id: $presData.appointments_id
                    },
                    success: function(data) {
                        $('#appointment-table').DataTable().ajax.reload();
                        Swal.fire({
                            title: "Success !",
                            text: "Prescription has been completed Successfully!",
                            icon: "success"
                        })
                        // $('#presc-modal').modal('toggle');

                    }

                });
            });
            $(document).on("click", "#confirmed", function(e) {
                e.preventDefault();
                var appointments_id = $(this).data('row');
                var patient_name = $(this).data('patient_name');
                var phone_number = $(this).data('phone_number');
                var uuid = $(this).data('uuid');
                var date = $(this).data('date');
                // var rows = $("#appointment-table tr").map(function() {
                //                 return {
                //                     phone_number: $('#phone_number').val(),
                //                     // ...
                //                 };
                //             });


                console.log("RRow", uuid, phone_number, patient_name, date)


                $.ajax({
                    url: "./models/patient_insertion.php",
                    type: "POST",
                    data: {
                        appointments_id: appointments_id,
                        patient_name: patient_name,
                        phone_number: phone_number,
                        uuid: uuid,
                        date: date
                    },
                    success: function(data) {
                        // $('#appointment-table').DataTable().ajax.reload();
                        // Swal.fire
                        // ({title:"Success !",
                        // text:"Appointment Done Successfully!",
                        // icon:"success"})

                        $.ajax({
                            url: "./models/updateConfirmed.php",
                            type: "POST",
                            data: {
                                appointments_id: appointments_id
                            },
                            success: function(data) {





                                $('#appointment-table').DataTable().ajax.reload();
                                Swal.fire({
                                    title: "Success !",
                                    text: "Appointment Done Successfully!",
                                    icon: "success"
                                })

                            }

                        });

                    }

                });

            });
        });
    </script>
</body>

</html>