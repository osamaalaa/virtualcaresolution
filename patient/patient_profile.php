<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Patient Profile | Virtual Care Solution</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="../assets/images/fav.ico">

    <!-- App css -->
    <link href="../assets/dashboard/assets/css/config/default/bootstrap.min.css" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
    <link href="../assets/dashboard/assets/css/config/default/app.min.css" rel="stylesheet" type="text/css" id="app-default-stylesheet" />

    <link href="../assets/dashboard/assets/css/config/default/bootstrap-dark.min.css" rel="stylesheet" type="text/css" id="bs-dark-stylesheet" />
    <link href="../assets/dashboard/assets/css/config/default/app-dark.min.css" rel="stylesheet" type="text/css" id="app-dark-stylesheet" />

    <!-- icons -->
    <link href="../assets/dashboard/assets/css/icons.min.css" rel="stylesheet" type="text/css" />

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
                                        <li class="breadcrumb-item active">Profile</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Profile</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-lg-4 col-xl-4">
                            <div class="card text-center">
                                <div class="card-body">
                                    <img src="assets_patients/patient_avatar.png"class="rounded-circle avatar-lg img-thumbnail" alt="profile-image">

                                    <h4 class="mb-0"><?php echo $_SESSION["username"] ?></h4>
                                    <p class="text-muted">External ID :</p>

                                  

                                    <div class="text-start mt-3">
                                        <h4 class="font-13 text-uppercase">About YCG </h4>
                                        <p class="text-muted font-13 mb-3">
                                        Yas Clinic Group is a leading research-driven healthcare network comprised of hospitals and medical centers in Abu Dhabi that offer primary holistic care, specialized services like advanced oncology treatment, and unique services like bone marrow transplantation and regenerative stem cell therapy.
                                        </p>
        

                                        <p class="text-muted mb-2 font-13"><strong>Mobile :</strong><span class="ms-2">8003008</span></p>

                                        <p class="text-muted mb-2 font-13"><strong>Email :</strong> <span class="ms-2">info@adscc.ae</span></p>

                                        <p class="text-muted mb-1 font-13"><strong>Location :</strong> <span class="ms-2">Abu Dhabi United Arab Emirates</span></p>
                                    </div>

                                    <ul class="social-list list-inline mt-3 mb-0">
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);" class="social-list-item border-primary text-primary"><i class="mdi mdi-facebook"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);" class="social-list-item border-danger text-danger"><i class="mdi mdi-google"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);" class="social-list-item border-info text-info"><i class="mdi mdi-twitter"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);" class="social-list-item border-secondary text-secondary"><i class="mdi mdi-github"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div> <!-- end card -->

                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title mb-3">Inbox</h4>

                                    <div class="inbox-widget" data-simplebar style="max-height: 350px;">
                                        <div class="inbox-item">
                                            <div class="inbox-item-img"><img src="../assets/images/users/user-2.jpg" class="rounded-circle" alt=""></div>
                                            <p class="inbox-item-author">YCG</p>
                                            <p class="inbox-item-text">Welcome To VCS ...</p>
                                            <!-- <p class="inbox-item-date">
                                                <a href="javascript:(0);" class="btn btn-sm btn-link text-info font-13"> Reply </a>
                                            </p> -->
                                        </div>
                                     
                                    </div> <!-- end inbox-widget -->
                                </div>
                            </div> <!-- end card-->

                        </div> <!-- end col-->

                        <div class="col-lg-8 col-xl-8">
                            <div class="card">
                                <div class="card-body">
                                    <ul class="nav nav-pills nav-fill navtab-bg">
                                        <li class="nav-item">
                                            <a href="#aboutme" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
                                                Medical History
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#settings" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                            Personal Info
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane" id="aboutme">

                                            <h5 class="mb-4 text-uppercase"><i class="mdi mdi-briefcase me-1"></i>
                                                Medical History</h5>

                                            <ul class="list-unstyled timeline-sm">
                                                <li class="timeline-sm-item">
                                                    <span class="timeline-sm-date">2022 - 1</span>
                                                    <h5 class="mt-0 mb-1">Dentist</h5>
                                                    

                                                </li>
                                         
                                            </ul>

                                            <h5 class="mb-3 mt-4 text-uppercase"><i class="mdi mdi-cards-variant me-1"></i>
                                                Appointments</h5>
                                            <div class="table-responsive">
                                                <table class="table table-borderless mb-0">
                                                    <thead class="table-light">
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Appointment </th>
                                                            <th>Start Date</th>
                                                            <th>Due Date</th>
                                                            <th>Status</th>
                                                            <th>Doctor</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>App design and development</td>
                                                            <td>01/01/2015</td>
                                                            <td>10/15/2018</td>
                                                            <td><span class="badge bg-info">Work in Progress</span></td>
                                                            <td>Halette Boivin</td>
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td>Coffee detail page - Main Page</td>
                                                            <td>21/07/2016</td>
                                                            <td>12/05/2018</td>
                                                            <td><span class="badge bg-success">Pending</span></td>
                                                            <td>Durandana Jolicoeur</td>
                                                        </tr>
                                                        <tr>
                                                            <td>3</td>
                                                            <td>Poster illustation design</td>
                                                            <td>18/03/2018</td>
                                                            <td>28/09/2018</td>
                                                            <td><span class="badge bg-pink">Done</span></td>
                                                            <td>Lucas Sabourin</td>
                                                        </tr>
                                                        <tr>
                                                            <td>4</td>
                                                            <td>Drinking bottle graphics</td>
                                                            <td>02/10/2017</td>
                                                            <td>07/05/2018</td>
                                                            <td><span class="badge bg-blue">Work in Progress</span></td>
                                                            <td>Donatien Brunelle</td>
                                                        </tr>
                                                        <tr>
                                                            <td>5</td>
                                                            <td>Landing page design - Home</td>
                                                            <td>17/01/2017</td>
                                                            <td>25/05/2021</td>
                                                            <td><span class="badge bg-warning">Coming soon</span></td>
                                                            <td>Karel Auberjo</td>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </div>

                                        </div> <!-- end tab-pane -->
                                        <!-- end about me section content -->
                                        <div class="tab-pane active" id="settings">
                                            <form>
                                                <h5 class="mb-4 text-uppercase"><i class="mdi mdi-account-circle me-1"></i> Personal Info</h5>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="patient_id" class="form-label">Patient ID</label>
                                                            <input type="text" class="form-control" id="patient_id" disabled>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="patient_external_id" class="form-label">External ID</label>
                                                            <input type="text" class="form-control" id="patient_external_id" >
                                                        </div>
                                                    </div> <!-- end col -->
                                                </div> <!-- end row -->
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="patient_name" class="form-label">Patient Name</label>
                                                            <input type="text" class="form-control" id="patient_name" >
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="patient_sex" class="form-label">Sex</label>
                                                            <input type="text" class="form-control" id="patient_sex" >
                                                        </div>
                                                    </div> <!-- end col -->
                                                </div> <!-- end row -->

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="patient_maital_status" class="form-label">Marital Status</label>
                                                            <input type="text" class="form-control" id="patient_maital_status" >
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="patient_dob" class="form-label">DOB</label>
                                                            <input type="text" class="form-control" id="patient_dob" >
                                                        </div>
                                                    </div> <!-- end col -->
                                                </div> <!-- end row -->

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="patient_country" class="form-label">Country</label>
                                                            <input type="text" class="form-control" id="patient_country" >
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="patient_city" class="form-label">City</label>
                                                            <input type="text" class="form-control" id="patient_city" >
                                                        </div>
                                                    </div> <!-- end col -->
                                                </div> <!-- end row -->
                                            
                                                <h5 class="mb-3 text-uppercase bg-light p-2"><i class="mdi mdi-office-building me-1"></i> Contact Info</h5>
                             
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="patient_email" class="form-label">Email Address</label>
                                                            <input type="email" class="form-control" id="patient_email">
                                                            <span class="form-text text-muted"><small>If you want to change email please <a href="javascript: void(0);">click</a> here.</small></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="patient_phone" class="form-label">Phone No.</label>
                                                            <input type="password" class="form-control" id="patient_phone" >
                                                            <span class="form-text text-muted"><small>If you want to change password please <a href="javascript: void(0);">click</a> here.</small></span>
                                                        </div>
                                                    </div> <!-- end col -->
                                                </div> <!-- end row -->
                                                </div> <!-- end row -->


                                                <h5 class="mb-3 text-uppercase bg-light p-2"><i class="mdi mdi-office-building me-1"></i> Login Info</h5>
                             
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="username" class="form-label">User Name</label>
                                                            <input type="email" class="form-control" id="username">
                                                            <span class="form-text text-muted"><small>If you want to change email please <a href="javascript: void(0);">click</a> here.</small></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="userpassword" class="form-label">Password</label>
                                                            <input type="password" class="form-control" id="userpassword">
                                                            <span class="form-text text-muted"><small>If you want to change password please <a href="javascript: void(0);">click</a> here.</small></span>
                                                        </div>
                                                    </div> <!-- end col -->
                                                </div> <!-- end row -->
                                                </div> <!-- end row -->
                                         
                                          

                                                <div class="text-end">
                                                    <button type="submit" class="btn btn-success waves-effect waves-light mt-2"><i class="mdi mdi-content-save"></i> Save</button>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- end settings content-->

                                    </div> <!-- end tab-content -->
                                </div>
                            </div> <!-- end card-->

                        </div> <!-- end col -->
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



    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- Vendor js -->
    <script src="../assets/dashboard/assets/js/vendor.min.js"></script>

    <!-- App js -->
    <script src="../assets/dashboard/assets/js/app.min.js"></script>

</body>

</html>