<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Profile | Virtual Care Solutions VCS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/dashboard/assets/images/favicon.ico">

    <!-- Plugins css -->
    <link href="assets/dashboard/assets/libs/dropzone/min/dropzone.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/dashboard/assets/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/dashboard/assets/libs/flatpickr/flatpickr.min.css" rel="stylesheet" type="text/css" />

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
                    <p class="text-muted">Admin Head</p>
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
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Account</a></li>
                                        <li class="breadcrumb-item active">My Profile</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">My Profile</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">

                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="mb-3">
                                                <label for="projectname" class="form-label">Username</label>
                                                <!-- <input type="text" id="projectname" class="form-control" placeholder="Enter project name"> -->

                                                <input type="text" name="username" class="form-control" value="<?php echo $_SESSION["username"] ?>" placeholder="" id="input-firstname" disabled>
                                                <input type="hidden" name="uname" value="<?php echo $_SESSION["username"] ?>" />
                                            </div>

                                            <div class="mb-3">
                                                <label for="project-overview" class="form-label">Email Address</label>
                                                <input type="email" name="email" class="form-control" value="<?php echo $_SESSION["email"] ?>" placeholder="" id="input-email">
                                                <!-- <textarea class="form-control" id="project-overview" rows="5" placeholder="Enter some brief about project.."></textarea> -->
                                            </div>
                                            <div class="mb-3">
                                                <label for="project-overview" class="form-label">Password</label>
                                                <!-- <input type="password" name="password" class="form-control" value="<?php echo $_SESSION["password"] ?>" placeholder="" id="input-adddress"> -->
                                                <!-- <i class="fa fa-eye-slash"   aria-hidden="true"> -->
                                                <div class="input-group" id="show_hide_password">
                                                <input class="form-control" type="password" value="<?php echo $_SESSION["password"] ?>">
                                                <div class="input-group-addon" style="padding: 10px 0;background-color: #efefef;">
                                                    <a href=""><i class="fa fa-eye-slash" style="color: #333;" aria-hidden="true"></i></a>
                                                </div>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                       
                                                <label class="form-label" for="input-telephone">Phone number</label>
                                                <input type="tel" name="phone" class="form-control" value="<?php echo $_SESSION["mobile"] ?>" placeholder="" id="input-telephone">
                                             
                                            </div>
                                     

                                        </div> <!-- end col-->
                                        <div class="col-xl-6">
                                            <div class="my-3 mt-xl-0">
                                            </div>
                                            <div class="my-3 mt-xl-0">
                                                <label for="projectname" class="mb-0 form-label">Profile Image</label>
                                                <p class="text-muted font-14">Recommended thumbnail size 800x400 (px).</p>
                                                <a href="javascript:void(0);" class="d-inline-block" style="display: block;
padding: 11px;">
                                                       <center> <img src="<?php echo $_SESSION["imgpath"]; ?>" class="rounded-circle avatar-xxl" alt="friend" data-bs-container="#tooltips-container" data-bs-toggle="tooltip" data-bs-placement="top" title="Mike Baker"></center>
                                                </a>

                                                <form action="/" method="post" class="dropzone" id="myAwesomeDropzone" data-plugin="dropzone" data-previews-container="#file-previews" data-upload-preview-template="#uploadPreviewTemplate">
                                                    <div class="fallback">
                                                        <input name="file" type="file" />
                                                    </div>

                                                    <div class="dz-message needsclick">
                                                        <i class="h3 text-muted dripicons-cloud-upload"></i>
                                                        <h4>Drop files here or click to upload.</h4>
                                                    </div>
                                                </form>

                                                <!-- Preview -->
                                                <div class="dropzone-previews mt-3" id="file-previews"></div>

                                                <!-- file preview template -->
                                                <div class="d-none" id="uploadPreviewTemplate">
                                                    <div class="card mt-1 mb-0 shadow-none border">
                                                        <div class="p-2">
                                                            <div class="row align-items-center">
                                                                <div class="col-auto">
                                                                    <img data-dz-thumbnail src="#" class="avatar-sm rounded bg-light" alt="">
                                                                </div>
                                                                <div class="col ps-0">
                                                                    <a href="javascript:void(0);" class="text-muted fw-bold" data-dz-name></a>
                                                                    <p class="mb-0" data-dz-size></p>
                                                                </div>
                                                                <div class="col-auto">
                                                                    <!-- Button -->
                                                                    <a href="" class="btn btn-link btn-lg text-muted" data-dz-remove>
                                                                        <i class="mdi mdi-close"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end file preview template -->
                                            </div>

                                         
                                        </div> <!-- end col-->
                                    </div>
                                    <!-- end row -->

                                    <div class="row mt-3">
                                        <div class="col-12 text-center">
                                            <button type="button" class="btn btn-success waves-effect waves-light m-1"><i class="fe-check-circle me-1"></i> Save</button>
                                            <!-- <button type="button" class="btn btn-light waves-effect waves-light m-1"><i class="fe-x me-1"></i> Cancel</button> -->
                                        </div>
                                    </div>

                                </div> <!-- end card-body -->
                            </div> <!-- end card-->
                        </div> <!-- end col-->
                    </div>
                
                </fieldset>

            </div>
            </form>

        </div> <!-- container -->

    </div> <!-- content -->

    <!-- Footer Start -->

    <!-- end Footer -->

    </div>

    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->


    </div>
    <!-- END wrapper -->

    <!-- Right Sidebar -->
    <div class="right-bar">
        <div data-simplebar class="h-100">

            <!-- Nav tabs -->
            <ul class="nav nav-tabs nav-bordered nav-justified" role="tablist">
                <li class="nav-item">
                    <a class="nav-link py-2" data-bs-toggle="tab" href="#chat-tab" role="tab">
                        <i class="mdi mdi-message-text d-block font-22 my-1"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link py-2" data-bs-toggle="tab" href="#tasks-tab" role="tab">
                        <i class="mdi mdi-format-list-checkbox d-block font-22 my-1"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link py-2 active" data-bs-toggle="tab" href="#settings-tab" role="tab">
                        <i class="mdi mdi-cog-outline d-block font-22 my-1"></i>
                    </a>
                </li>
            </ul>

       

        </div> <!-- end slimscroll-menu-->
    </div>
    <!-- /Right-bar -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- Vendor js -->
    <script src="assets/dashboard/assets/js/vendor.min.js"></script>

    <!-- plugin js -->
    <script src="assets/dashboard/assets/libs/dropzone/min/dropzone.min.js"></script>
    <script src="assets/dashboard/assets/libs/select2/js/select2.min.js"></script>
    <script src="assets/dashboard/assets/libs/flatpickr/flatpickr.min.js"></script>

    <!-- Init js-->
    <script src="assets/dashboard/assets/js/pages/create-project.init.js"></script>

    <!-- App js -->
    <script src="assets/dashboard/assets/js/app.min.js"></script>

    <script>
        $(document).ready(function() {
    $("#show_hide_password a").on('click', function(event) {
        event.preventDefault();
        if($('#show_hide_password input').attr("type") == "text"){
            $('#show_hide_password input').attr('type', 'password');
            $('#show_hide_password i').addClass( "fa-eye-slash" );
            $('#show_hide_password i').removeClass( "fa-eye" );
        }else if($('#show_hide_password input').attr("type") == "password"){
            $('#show_hide_password input').attr('type', 'text');
            $('#show_hide_password i').removeClass( "fa-eye-slash" );
            $('#show_hide_password i').addClass( "fa-eye" );
        }
    });
});
    </script>
</body>

</html>