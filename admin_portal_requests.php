<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Admin Portal Requests | Virtual Care Solutions VCS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="VCS virtual care solutions for YAS CLINIC GROUP." name="description" />
    <meta content="YasClinicGroup" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="./assets/images/fav.ico">

    <!-- Plugin css -->
    <!-- <link href="assets/dashboard/assets/libs/fullcalendar/main.min.css" rel="stylesheet" type="text/css" /> -->

    <!-- third party css -->
    <link href="assets/dashboard/assets/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/dashboard/assets/libs/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/dashboard/assets/libs/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/dashboard/assets/libs/datatables.net-select-bs5/css//select.bootstrap5.min.css" rel="stylesheet" type="text/css" />
    <!-- third party css end -->

    <!-- Sweet Alert-->
    <link href="assets/dashboard/assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />
    <!-- Select CSS  -->
    <link href="assets/dashboard/assets/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css" />

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
    <link rel="stylesheet" href="assets/css/jquery.dataTables.min.css">
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
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                                        <li class="breadcrumb-item active">Portal Requests</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Portal Requests</h4>
                                <input style="display: none;" id="userId" value="<?php echo $_SESSION['user_id']; ?>" />
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">

                                    <h4 class="header-title">Portal Registeration Requests</h4>
                                    <p class="text-muted font-13 mb-4">
                                        Table contains all VCS Portal Registeration Requests
                                    </p>

                                    <table id="datatable-portal-requests" class="table activate-select dt-responsive nowrap w-100">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>UUID</th>
                                                <th>E-mail</th>
                                                <th>Phone No.</th>
                                                <th>Birthdate</th>
                                                <th>Nationality</th>
                                                <th>Job Title</th>
                                                <th>Accept</th>
                                                <th>Reject</th>
                                            </tr>
                                        </thead>

                                        <tbody>


                                        </tbody>
                                    </table>

                                </div> <!-- end card body-->
                            </div> <!-- end card -->
                        </div><!-- end col-->
                    </div>
                    <!-- end row-->
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
    <!-- Modal -->
    <div class="modal fade" id="addUser-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-light">
                    <h4 class="modal-title" id="myCenterModalLabel">Add New User</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                </div>
                <div class="modal-body p-4">
                    <form class="needs-validation" method="POST" name="form-addUsers" id="form-addUsers">
                        <div class="mb-3">
                            <label for="name" class="form-label">User Name</label>
                            <input type="text" class="form-control" id="username">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="email">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Phone Number</label>
                            <input type="text" class="form-control" id="mobile">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Password</label>
                            <input type="text" class="form-control" id="password">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">SessionNo.</label>
                            <input type="text" class="form-control" id="channel" value="<?php echo substr(sha1(mt_rand()), 17, 6); ?>" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="company" class="form-label">Company</label>
                            <input type="text" class="form-control" id="company-user">
                        </div>
                        <div class="mb-3">
                            <label for="position" class="form-label">Role</label>
                            <!-- <input type="text" class="form-control" id="position" > -->
                            <select class="form-control" data-toggle="select2" id="role_id" data-width="100%" required>
                                <option>Select VCS Role</option>
                                <option value="1">Doctor</option>
                                <option value="2">Patient</option>
                                <option value="3">IT</option>
                                <option value="4">Admin</option>
                                <option value="5">Nurse</option>
                                <option value="6">Reciptionist</option>
                                <option value="7">Employee</option>
                                <option value="8">AHP</option>

                            </select>
                        </div>
                        <div class="text-end">
                            <button type="submit" id="btn-save-event" class="btn btn-success waves-effect waves-light">Save</button>
                            <!-- <button type="button" class="btn btn-danger waves-effect waves-light" data-bs-dismiss="modal">Continue</button> -->
                        </div>
                    </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- Vendor js -->
    <!-- <script src="assets/dashboard/assets/js/vendor.min.js"></script> -->

    <!-- plugin js -->
    <!-- <script src="assets/dashboard/assets/libs/moment/min/moment.min.js"></script>
        <script src="assets/dashboard/assets/libs/fullcalendar/main.min.js"></script> -->
    <!-- plugin js -->
    <script src="assets/dashboard/assets/libs/moment/min/moment.min.js"></script>
    <!-- Calendar init -->
    <script src="assets/dashboard/assets/js/pages/addUsers.init.js"></script>

    <!-- App js -->
    <script src="assets/dashboard/assets/js/app.min.js"></script>


    <!-- third party js -->
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

    <!-- Datatables init -->
    <script src="assets/dashboard/assets/js/pages/datatables.init.js"></script>

    <!-- -----------------------Select Javascript-------------------------------------- -->
    <script src="assets/dashboard/assets/libs/select2/js/select2.min.js"></script>

    <!-- -----------------------------Doctors------------------------------------------ -->

    <script type="text/javascript">
        $(document).ready(function() {
            var table = $('#datatable-portal-requests').DataTable({
                dom: '<"top"Bif>rt<"bottom"lp><"clear">',
                editButton: true,
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
                    "url": "./models/total_requests.php",
                    "type": "GET",
                    "datatype": "json",
                    "dataSrc": "",
                    // "serverSide": "true",
                    dom: 'Bfrtip',

                },

                drawCallback: function() {
                    $(".dataTables_paginate > .pagination")
                        .addClass("pagination-rounded")
                },
                "columns": [{
                        "data": "portal_request_id"
                    },
                    {
                        "data": "name"
                    },
                    {
                        "data": "uuid"
                    },

                    {
                        "data": "email"
                    },
                    {
                        "data": "phone"
                    },
                    {
                        "data": "jobtitle"
                    },
                    {
                        "data": "nationality"
                    },
                    {
                        "data": "birthdate"
                    },

                    {
                        data: "portal_request_id",
                        render: function(data, type, row, meta) {
                            console.log("rooow", row)


                            return (type === 'display' && row.approved == '0') ?
                                '<button class="btn btn-success" id="AcceptRequest" data-row= "' + row + '" data-id="' + data + '" ><span class="mdi mdi-creation"></span></button>' :
                                'Accepted';
                        }
                    },

                    {
                        data: "portal_request_id",
                        render: function(data, type, row, meta) {


                            return (type === 'display') ? '<button class="btn btn-danger" id="removeRequest" data-row= "' + row + '" data-id="' + data + '" ><span class="mdi mdi-delete-circle"></span></button>' :
                                '';
                        }
                    }
                ]
            });
            $('#datatable-portal-requests tbody').on('click', 'tr', function() {
                if ($(this).hasClass('selected')) {

                    $(this).removeClass('selected');
                } else {
                    table.$('tr.selected').removeClass('selected');
                    $(this).addClass('selected');
                }
            });

            // $('#button').click( function () {
            //     table.row('.selected').remove().draw( false );
            // } );

            // Remove Task
            $(document).on("click", "#removeRequest", function(e) {
                e.preventDefault();
                var id = $(this).data('id');
                $.ajax({
                    url: "./models/remove_request.php",
                    type: "POST",
                    data: {
                        id: id
                    },
                    success: function(data) {

                        if (data == 0) {

                            Swal.fire({
                                title: "Error !",
                                text: "Not able to Remove this Request!",
                                icon: "error"
                            })

                        } else {
                            $('#datatable-portal-requests').DataTable().ajax.reload();
                            Swal.fire({
                                title: "Success !",
                                text: "Request has been Removed successfully!",
                                icon: "success"
                            })

                        }
                    }

                });
            });
            $(document).on("click", "#AcceptRequest", function(e) {
                e.preventDefault();
                var id = $(this).data('id');
                $.ajax({
                    url: "./models/accept_request.php",
                    type: "POST",

                    data: {
                        id: id
                    },
                    success: function(data) {

                        if (data == 0) {

                            Swal.fire({
                                title: "Error !",
                                text: "Not able to Accept this Request!",
                                icon: "error"
                            })

                        } else {
                            $('#datatable-portal-requests').DataTable().ajax.reload();
                            Swal.fire({
                                title: "Success !",
                                text: "Request has been Accepted successfully!",
                                icon: "success"
                            })

                        }
                    }

                });




            });
        });
    </script>
    <!-- Sweet Alerts js -->
    <script src="assets/dashboard/assets/libs/sweetalert2/sweetalert2.all.min.js"></script>

    <!-- Sweet alert init js-->
    <script src="../assets/js/pages/sweet-alerts.init.js"></script>

    <!-- ------------------------------------------------------------------------------ -->

</body>

</html>