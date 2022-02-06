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

    <!-- App css -->
    <link href="assets/dashboard/assets/css/config/default/bootstrap.min.css" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
    <link href="assets/dashboard/assets/css/config/default/app.min.css" rel="stylesheet" type="text/css" id="app-default-stylesheet" />

    <!-- icons -->
    <link href="assets/dashboard/assets/css/icons.min.css" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="assets/css/jquery.dataTables.min.css">
    <!-- Sweet Alert-->
    <link href="assets/dashboard/assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />
    <!-- Select CSS  -->
    <link href="assets/dashboard/assets/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css" />

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
                                                        <table class="table activate-select dt-responsive nowrap w-100" id="datatable-vmr">
                                                            <thead>
                                                                <tr>
                                                                    <th> # </th>
                                                                    <th> UUID </th>
                                                                    <th> Name </th>
                                                                    <th> Title </th>
                                                                    <th> language </th>
                                                                    <th> DOB </th>
                                                                    <th> Street </th>
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
                                                                    <th> Physician </th>
                                                                </tr>
                                                            </thead>

                                                            <tbody>

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

    <!-- third party js ends -->



    <script>
        $(document).ready(function() {
            $('#datatable-vmr').DataTable({
                dom: '<"top"Bif>rt<"bottom"lp><"clear">',
                lengthChange: !1,
                buttons: ["print", "pdf"],
                "processing": true,
                "serverSide": true,
                "language": {
                    "sEmptyTable": "No results found",
                    "sInfo": "Showing START to END of TOTAL entries",
                    "sInfoEmpty": "Showing 0 to 0 of 0 entries",
                    "sInfoFiltered": "(filtered from MAX total entries)",
                    "sInfoPostFix": "",
                    "sInfoThousands": ",",
                    "sLengthMenu": "Show MENU entries",
                    "sLoadingRecords": "Loading...",
                    "sProcessing": "Processing...",
                    "sSearch": "Search",
                    "sZeroRecords": "No results found",
                    "oPaginate": {
                        "sFirst": "First",
                        "sLast": "Last",
                        "sNext": "Next",
                        "sPrevious": "Previous"
                    },
                    "oAria": {
                        "sSortAscending": ": activate to sort column ascending",
                        "sSortDescending": ": activate to sort column descending"
                    }
                },

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
                "columnDefs": [{
                    "visible": false,
                    "targets": 0
                }],

                "ajax": {
                    "url": "models/patientsForDoctor.php",
                    "type": "POST",
                    "datatype": "json",



                },

                serverSide: false,
                processing: true,

                //  responsive: true,
                drawCallback: function() {
                    $(".dataTables_paginate > .pagination")
                        .addClass("pagination-rounded")
                },
                "columns": [{
                        "data": "id"
                    },
                    {
                        "data": "uuid"
                    },
                    {
                        "data": "patient_name"
                    },
                    {
                        "data": "title"
                    },
                    {
                        "data": "language"
                    },
                    {
                        "data": "DOB"
                    },
                    {
                        "data": "street"
                    },

                    {
                        "data": "city"
                    },
                    {
                        "data": "state"
                    },
                    {
                        "data": "country_code"
                    },
                    {
                        "data": "phone_contact"
                    },
                    {
                        "data": "email"
                    },
                    {
                        "data": "date"
                    },
                    {
                        "data": "sex"
                    },
                    {
                        "data": "religion"
                    },
                    {
                        "data": "sick_leave"
                    },
                    {
                        "data": "wfh"
                    },
                    {
                        "data": "MRI"
                    },
                    {
                        "data": "doctor_name"
                    }

                ],

            });

        });
    </script>

</body>

</html>