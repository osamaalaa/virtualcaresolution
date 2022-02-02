<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>VMR | Virtual Care Solutions VCS</title>
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

</head>

<!-- body start -->

<body>

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
                                <h4 class="page-title">VMR</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">

                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-body">

                                                    <h5 class="mt-0">Patients Data</h5>
                                                    <p class="sub-header">Patient Table For Doctor only.</p>
                                                    <div class="table-responsive">
                                                        <table class="table table-centered mb-0" id="btn-editable">
                                                            <thead>
                                                                <tr>
                                                                    <th> # </th>
                                                                    <th> Name </th>
                                                                    <th> UUID </th>
                                                                    <th> Title </th>
                                                                    <th> language </th>
                                                                    <th> DOB </th>
                                                                    <th> Street </th>
                                                                    <th> postal code </th>

                                                                    <th> City </th>
                                                                    <th> State </th>
                                                                    <th> Country Code </th>
                                                                    <th> Phone number </th>
                                                                    <th> Email </th>
                                                                    <th> Date </th>
                                                                    <th> Sex </th>
                                                                    <th> Religion </th>
                                                                    <th> SickLeave </th>
                                                                    <th> WFH </th>
                                                                    <th> MRI </th>
                                                                  
                                                                </tr>
                                                            </thead>

                                                            <tbody>
                                                                <tr>
                                                                    <td>1</td>
                                                                    <td>Osama</td>
                                                                    <td>784112345</td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>


                                                                </tr>


                                                            </tbody>
                                                        </table>
                                                    </div> <!-- end .table-responsive-->
                                                </div> <!-- end card-body -->
                                            </div> <!-- end card -->
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
                                            <form class="needs-validation" method="post" name="event-form" id="form-event" novalidate>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="col-12">
                                                            <div class="mb-3">
                                                                <!-- <label class="form-label">PID</label> -->
                                                                <input class="form-control" type="hidden" class="pid" name="pid" value="" id="pid" disabled />
                                                                <!-- <INPUT class="form-control patient-id" TYPE=TEXT NAME="ACCOUNT" id="event-title" VALUE="" MAXLENGTH=16 SIZE=16 disabled> -->
                                                                <div class="invalid-feedback">Please provide a valid patient id</div>
                                                            </div>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="form-label">Patients Name</label>
                                                            <input class="form-control" type="text" id="pname" name="title" id="event-title" required />
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
                                                                <textarea class="form-control" id="cheifcomplaint" name="cheifcomplaint" rows="3"></textarea>

                                                                <div class="invalid-feedback">Please provide a valid Cheif complaint</div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="mb-3">
                                                                <label class="form-label">Sick Leave Recommendation </label>

                                                                <input id="toggle-on" id="sickleave" value="yes" name="sickleave" type="radio">
                                                                <label class="form-label" for="toggle-on">Yes</label>
                                                                <input id="toggle-off" id="sickleave" value="no" name="sickleave" type="radio">
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
                                                            <input type="hidden" id="doctor_name" name="doctor_name" value="<?php echo $_SESSION["username"] ?>">
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
    <!-- <script>
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


                console.log("pid", pid, doctor_name, wfh, sickleave, mri, cheifcomplaint, pname)
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
        $(function() {
            var randomnumber = Math.floor(Math.random() * 11)
            $('.pid input[type="text"]').val(randomnumber);
            console.log("random", $('.pid input[type="text"]').val(randomnumber))

        })
    </script>    -->


    <!-- ======================================================================================= -->


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
    <script src="../assets/js/pages/sweet-alerts.init.js"></script>
    <!-- third party js ends -->
    <!-- Table Editable plugin-->
    <script src="assets/dashboard/assets/libs/jquery-tabledit/jquery.tabledit.min.js"></script>

    <!-- Table editable init-->
    <script src="assets/dashboard/assets/js/pages/tabledit.init.js"></script>

    <script>
        $(document).ready(function() {
            var table = $('#datatable-vmr').DataTable({
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
                        "data": "notes"
                    },
                    {
                        "data": "status_name"
                    },
                    {
                        data: "status",
                        render: function(data, type, row, meta) {
                            var thisId = $('#appointments_id').val();
                            console.log("ThisId", row.appointments_id)
                            return (type === 'display' && data == 1) ?
                                '<button class="btn btn-info"  id="notConfirmed" data-row= "' + row.appointments_id + '" data-id="' + data + '" ><span class="mdi mdi-book-information-variant"></span></button>  <button class="btn btn-danger" title="Delete Appointment" id="removeAppoint" data-remove="' + row.appointments_id + '"><span class="mdi mdi-delete-circle"></span></button>' :
                                (type === 'display' && data == 2) ?
                                '<button class="btn btn-success" title="Confirm Appointment" data-row= "' + row.appointments_id + '" id="confirmed"> <span class="mdi mdi-ticket-confirmation"></span></button> <button class="btn btn-danger" title="Delete Appointment" id="removeAppoint" data-remove="' + row.appointments_id + '"><span class="mdi mdi-delete-circle"></span></button>' :
                                'Done'
                        }
                    },
                ]
            });


            $('#datatable-vmr tbody').on('click', 'tr', function() {
                if ($(this).hasClass('selected')) {

                    $(this).removeClass('selected');
                } else {
                    table.$('tr.selected').removeClass('selected');
                    $(this).addClass('selected');
                }
            });
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
            $(document).on("click", "#confirmed", function(e) {
                e.preventDefault();
                var appointments_id = $(this).data('row');


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
            });
        });
    </script>

</body>

</html>