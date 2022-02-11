<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Contacts & Members Listing | VCS Virtual Care Solution</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="VCS virtual care solutions for YAS CLINIC GROUP." name="description" />
    <meta content="YasClinicGroup" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="./assets/images/fav.ico">

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

        <!-- Topbar Start -->
        <?php include './components/header.php'; ?>
        <!-- end Topbar -->

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
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Reciptionist</a></li>
                                        <li class="breadcrumb-item active">Contacts List</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Contacts List</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row justify-content-between">
                                        <div class="col-md-8">
                                            <form class="d-flex flex-wrap align-items-center">
                                                <label for="inputPassword2" class="visually-hidden">Search</label>
                                                <div class="me-3">
                                                    <input type="search" class="form-control my-1 my-md-0" id="inputPassword2" placeholder="Search...">
                                                </div>
                                                <label for="status-select" class="me-2">Sort By</label>
                                                <div class="me-sm-3">
                                                    <select class="form-select my-1 my-md-0" id="status-select">
                                                        <option selected="">All</option>
                                                        <option value="1">Name</option>
                                                        <option value="2">Post</option>
                                                        <option value="3">Callers</option>
                                                        <option value="4">Callings</option>
                                                    </select>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="text-md-end mt-3 mt-md-0">
                                                <button type="button" class="btn btn-success waves-effect waves-light me-1"><i class="mdi mdi-cog"></i></button>
                                                <button type="button" class="btn btn-danger waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#custom-modal"><i class="mdi mdi-plus-circle me-1"></i> Add New</button>
                                            </div>
                                        </div><!-- end col-->
                                    </div> <!-- end row -->
                                </div>
                            </div> <!-- end card -->
                        </div><!-- end col-->
                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="col-lg-4">
                            <div class="text-center card">
                                <div class="card-body">
                                    <div class="pt-2 pb-2">
                                        <img src="assets/images/jasim.jpg" class="rounded-circle img-thumbnail avatar-xl" alt="profile-image">
                                        <h4 class="mt-3"><a href="extras-profile.html" class="text-dark">Jasim Hakim</a></h4>
                                        <p class="text-muted">@YCG <span> | </span> <span> <a href="#" class="text-pink">website.com</a> </span></p>

                                        <button type="button" class="btn btn-primary btn-sm waves-effect waves-light">Message</button>
                                        <button type="button" class="btn btn-light btn-sm waves-effect">Call</button>

                                       

                                    </div> <!-- end .padding -->
                                </div>
                            </div> <!-- end card-->
                        </div> <!-- end col -->

                        <div class="col-lg-4">
                            <div class="text-center card">
                                <div class="card-body">
                                    <div class="pt-2 pb-2">
                                        <img src="assets/images/jasim.jpg" class="rounded-circle img-thumbnail avatar-xl" alt="profile-image">
                                        <h4 class="mt-3"><a href="extras-profile.html" class="text-dark">Jasim Hakim</a></h4>
                                        <p class="text-muted">@YCG <span> | </span> <span> <a href="#" class="text-pink">website.com</a> </span></p>

                                        <button type="button" class="btn btn-primary btn-sm waves-effect waves-light">Message</button>
                                        <button type="button" class="btn btn-light btn-sm waves-effect">Call</button>

                                       

                                    </div> <!-- end .padding -->
                                </div>
                            </div> <!-- end card-->
                        </div> <!-- end col -->

                        <div class="col-lg-4">
                            <div class="text-center card">
                                <div class="card-body">
                                    <div class="pt-2 pb-2">
                                        <img src="assets/images/jasim.jpg" class="rounded-circle img-thumbnail avatar-xl" alt="profile-image">

                                        <h4 class="mt-3"><a href="extras-profile.html" class="text-dark">Jasim Hakim</a></h4>
                                        <p class="text-muted">@YCG <span> | </span> <span> <a href="#" class="text-pink">website.com</a> </span></p>

                                        <button type="button" class="btn btn-primary btn-sm waves-effect waves-light">Message</button>
                                        <button type="button" class="btn btn-light btn-sm waves-effect">Call</button>

                                       

                                    </div> <!-- end .padding -->
                                </div>
                            </div> <!-- end card-->
                        </div> <!-- end col -->
                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="col-lg-4">
                            <div class="text-center card">
                                <div class="card-body">
                                    <div class="pt-2 pb-2">
                                        <img src="assets/images/jasim.jpg" class="rounded-circle img-thumbnail avatar-xl" alt="profile-image">

                                        <h4 class="mt-3"><a href="extras-profile.html" class="text-dark">Jasim Hakim</a></h4>
                                        <p class="text-muted">@YCG <span> | </span> <span> <a href="#" class="text-pink">website.com</a> </span></p>

                                        <button type="button" class="btn btn-primary btn-sm waves-effect waves-light">Message</button>
                                        <button type="button" class="btn btn-light btn-sm waves-effect">Call</button>

                                     

                                    </div> <!-- end .padding -->
                                </div>
                            </div> <!-- end card-->
                        </div> <!-- end col -->

                        <div class="col-lg-4">
                            <div class="text-center card">
                                <div class="card-body">
                                    <div class="pt-2 pb-2">
                                        <img src="assets/images/jasim.jpg" class="rounded-circle img-thumbnail avatar-xl" alt="profile-image">

                                        <h4 class="mt-3"><a href="extras-profile.html" class="text-dark">Jasim Hakim</a></h4>
                                        <p class="text-muted">@YCG <span> | </span> <span> <a href="#" class="text-pink">website.com</a> </span></p>

                                        <button type="button" class="btn btn-primary btn-sm waves-effect waves-light">Message</button>
                                        <button type="button" class="btn btn-light btn-sm waves-effect">Call</button>

                                      

                                    </div> <!-- end .padding -->
                                </div>
                            </div> <!-- end card-->
                        </div> <!-- end col -->

                        <div class="col-lg-4">
                            <div class="text-center card">
                                <div class="card-body">
                                    <div class="pt-2 pb-2">
                                        <img src="assets/images/jasim.jpg" class="rounded-circle img-thumbnail avatar-xl" alt="profile-image">

                                        <h4 class="mt-3"><a href="extras-profile.html" class="text-dark">Jade M. Walker</a></h4>
                                        <p class="text-muted">@Programmer <span> | </span> <span> <a href="#" class="text-pink">supported.com</a> </span></p>

                                        <button type="button" class="btn btn-primary btn-sm waves-effect waves-light">Message</button>
                                        <button type="button" class="btn btn-light btn-sm waves-effect">Call</button>

                                     

                                    </div> <!-- end .padding -->
                                </div>
                            </div> <!-- end card-->
                        </div> <!-- end col -->
                    </div>
                    <!-- end row -->


                    <div class="row">
                        <div class="col-lg-4">
                            <div class="text-center card">
                                <div class="card-body">
                                    <div class="pt-2 pb-2">
                                        <img src="assets/images/jasim.jpg" class="rounded-circle img-thumbnail avatar-xl" alt="profile-image">

                                        <h4 class="mt-3"><a href="extras-profile.html" class="text-dark">Jasim Hakim</a></h4>
                                        <p class="text-muted">@YCG <span> | </span> <span> <a href="#" class="text-pink">website.com</a> </span></p>

                                        <button type="button" class="btn btn-primary btn-sm waves-effect waves-light">Message</button>
                                        <button type="button" class="btn btn-light btn-sm waves-effect">Call</button>

                                    

                                    </div> <!-- end .padding -->
                                </div>
                            </div> <!-- end card-->
                        </div> <!-- end col -->

                        <div class="col-lg-4">
                            <div class="text-center card">
                                <div class="card-body">
                                    <div class="pt-2 pb-2">
                                        <img src="assets/images/jasim.jpg" class="rounded-circle img-thumbnail avatar-xl" alt="profile-image">

                                        <h4 class="mt-3"><a href="extras-profile.html" class="text-dark">Jasim Hakim</a></h4>
                                        <p class="text-muted">@YCG <span> | </span> <span> <a href="#" class="text-pink">website.com</a> </span></p>

                                        <button type="button" class="btn btn-primary btn-sm waves-effect waves-light">Message</button>
                                        <button type="button" class="btn btn-light btn-sm waves-effect">Call</button>

                                

                                    </div> <!-- end .padding -->
                                </div>
                            </div> <!-- end card-->
                        </div> <!-- end col -->

                        <div class="col-lg-4">
                            <div class="text-center card">
                                <div class="card-body">
                                    <div class="pt-2 pb-2">
                                        <img src="assets/images/jasim.jpg" class="rounded-circle img-thumbnail avatar-xl" alt="profile-image">

                                        <h4 class="mt-3"><a href="extras-profile.html" class="text-dark">Jasim Hakim</a></h4>
                                        <p class="text-muted">@YCG <span> | </span> <span> <a href="#" class="text-pink">website.com</a> </span></p>

                                        <button type="button" class="btn btn-primary btn-sm waves-effect waves-light">Message</button>
                                        <button type="button" class="btn btn-light btn-sm waves-effect">Call</button>


                                    </div> <!-- end .padding -->
                                </div>
                            </div> <!-- end card-->
                        </div> <!-- end col -->
                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="col-12">
                            <div class="text-end">
                                <ul class="pagination pagination-rounded justify-content-end">
                                    <li class="page-item">
                                        <a class="page-link" href="javascript: void(0);" aria-label="Previous">
                                            <span aria-hidden="true">«</span>
                                            <span class="visually-hidden">Previous</span>
                                        </a>
                                    </li>
                                    <li class="page-item active"><a class="page-link" href="javascript: void(0);">1</a></li>
                                    <li class="page-item"><a class="page-link" href="javascript: void(0);">2</a></li>
                                    <li class="page-item"><a class="page-link" href="javascript: void(0);">3</a></li>
                                    <li class="page-item"><a class="page-link" href="javascript: void(0);">4</a></li>
                                    <li class="page-item"><a class="page-link" href="javascript: void(0);">5</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="javascript: void(0);" aria-label="Next">
                                            <span aria-hidden="true">»</span>
                                            <span class="visually-hidden">Next</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

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
    <div class="modal fade" id="custom-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-light">
                    <h4 class="modal-title" id="myCenterModalLabel">Add New Member</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                </div>
                <div class="modal-body p-4">
                    <form>
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter name">
                        </div>
                        <div class="mb-3">
                            <label for="position" class="form-label">Position</label>
                            <input type="text" class="form-control" id="position" placeholder="Enter position">
                        </div>
                        <div class="mb-3">
                            <label for="company" class="form-label">Company</label>
                            <input type="text" class="form-control" id="company" placeholder="Enter company">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                        </div>

                        <div class="text-end">
                            <button type="submit" class="btn btn-success waves-effect waves-light">Save</button>
                            <button type="button" class="btn btn-danger waves-effect waves-light" data-bs-dismiss="modal">Continue</button>
                        </div>
                    </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->




    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- Vendor js -->
    <script src="assets/dashboard/assets/js/vendor.min.js"></script>

    <!-- App js -->
    <script src="assets/dashboard/assets/js/app.min.js"></script>

</body>

</html>