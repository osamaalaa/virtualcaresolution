<?php
require_once "db.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>VCS | Virtual Care Solution</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A Virtual Care Solution for Contact with the patients virtually" name="description" />
    <meta content="YasClinicGroup" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="./assets/images/fav.ico">

    <!-- Select2 Css-->
    <!-- <link href="assets/dashboard/assets/css/select2/css/select2.min.css" rel="stylesheet" type="text/css" /> -->

    <!-- App css -->
    <link href="assets/dashboard/assets/css/config/default/bootstrap.min.css" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
    <link href="assets/dashboard/assets/css/config/default/app.min.css" rel="stylesheet" type="text/css" id="app-default-stylesheet" />

    <link href="assets/dashboard/assets/css/icons.min.css" rel="stylesheet" type="text/css" />


</head>

<!-- body start -->

<body class="loading">
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
                                        <li class="breadcrumb-item active">Checkout</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Checkout</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="nav nav-pills flex-column navtab-bg nav-pills-tab text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                                <!-- <a class="nav-link active show py-2" id="custom-v-pills-billing-tab" data-bs-toggle="pill" href="#custom-v-pills-billing" role="tab" aria-controls="custom-v-pills-billing" aria-selected="true">
                                                    <i class="mdi mdi-account-circle d-block font-24"></i>
                                                    Billing Info
                                                </a> -->
                                                <!-- <a class="nav-link mt-2 py-2" id="custom-v-pills-shipping-tab" data-bs-toggle="pill" href="#custom-v-pills-shipping" role="tab" aria-controls="custom-v-pills-shipping" aria-selected="false">
                                                    <i class="mdi mdi-truck-fast d-block font-24"></i>
                                                    Shipping Info</a> -->
                                                <a class="nav-link mt-2 active show py-2" id="custom-v-pills-payment-tab" data-bs-toggle="pill" href="#custom-v-pills-payment" role="tab" aria-controls="custom-v-pills-payment" aria-selected="false">
                                                    <i class="mdi mdi-cash-multiple d-block font-24"></i>
                                                    Payment Info</a>
                                            </div>

                                            <div class="border mt-4 rounded">
                                                <h4 class="header-title p-2 mb-0">Order Summary</h4>

                                                <div class="table-responsive">
                                                    <table class="table table-centered table-nowrap mb-0">
                                                        <tbody>


                                                            <tr class="text-end">
                                                                <td colspan="2">
                                                                    <h6 class="m-0">Discount:</h6>
                                                                </td>
                                                                <td class="text-end">
                                                                    0%
                                                                </td>
                                                            </tr>
                                                            <tr class="text-end">
                                                                <td colspan="2">
                                                                    <h5 class="m-0">Total:</h5>
                                                                </td>
                                                                <td class="text-end fw-semibold">
                                                                    <span id="total"></span>
                                                                    <span id="currency"></span><br>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!-- end table-responsive -->
                                            </div> <!-- end .border-->
                                        </div> <!-- end col-->
                                        <div class="col-lg-8">
                                            <div class="tab-content p-3">

                                                <div class="tab-pane fade active show" id="custom-v-pills-payment" role="tabpanel" aria-labelledby="custom-v-pills-payment-tab">
                                                    <div>
                                                        <h4 class="header-title">Payment Selection</h4>
                                                        <input type="hidden" id="doctor_name" name="doctor_name" value="<?php echo $_SESSION["username"] ?>">
                                                        <p class="sub-header">Fill the form below in order to
                                                            send you the order's invoice.</p>

                                                        <!-- Pay with Paypal box-->
                                                        <div class="border p-3 mb-3 rounded">
                                                            <div class="float-end">
                                                                <i class="fab fa-cc-paypal font-24 text-primary"></i>
                                                            </div>
                                                            <div class="form-check">
                                                                <input type="radio" id="BillingOptRadio2" name="billingOptions" class="form-check-input">
                                                                <label class="form-check-label font-16 fw-bold" for="BillingOptRadio2">Pay with Paypal</label>
                                                            </div>
                                                            <p class="mb-0 ps-3 pt-1">You will be redirected to PayPal website to complete your purchase securely.</p>

                                                        </div>
                                                        <!-- end Pay with Paypal box-->

                                                        <!-- Credit/Debit Card box-->
                                                        <div class="border p-3 mb-3 rounded">
                                                            <div class="float-end">
                                                                <i class="far fa-credit-card font-24 text-primary"></i>
                                                            </div>
                                                            <div class="form-check">
                                                                <input type="radio" id="BillingOptRadio1" name="billingOptions" class="form-check-input" checked>
                                                                <label class="form-check-label font-16 fw-bold" for="BillingOptRadio1">Credit / Debit Card</label>
                                                            </div>
                                                            <p class="mb-0 ps-3 pt-1">Safe money transfer using your bank account. We support Mastercard, Visa, Discover and Stripe.</p>

                                                            <div class="row mt-4">
                                                                <div class="col-md-12">
                                                                    <div class="mb-3">
                                                                        <label for="card-number" class="form-label">Card Number</label>
                                                                        <input type="text" id="card-number" class="form-control" data-toggle="input-mask" data-mask-format="0000 0000 0000 0000" placeholder="4242 4242 4242 4242">
                                                                    </div>
                                                                </div>
                                                            </div> <!-- end row -->
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="card-name-on" class="form-label">Name on card</label>
                                                                        <input type="text" id="card-name-on" class="form-control" placeholder="Master Shreyu">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="mb-3">
                                                                        <label for="card-expiry-date" class="form-label">Expiry date</label>
                                                                        <input type="text" id="card-expiry-date" class="form-control" data-toggle="input-mask" data-mask-format="00/00" placeholder="MM/YY">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="mb-3">
                                                                        <label for="card-cvv" class="form-label">CVV code</label>
                                                                        <input type="text" id="card-cvv" class="form-control" data-toggle="input-mask" data-mask-format="000" placeholder="012">
                                                                    </div>

                                                                </div>
                                                            </div> <!-- end row -->
                                                        </div>
                                                        <!-- end Credit/Debit Card box-->


                                                        <!-- end Cash on Delivery box-->

                                                        <div class="row mt-4">

                                                            <div class="col-sm-6">
                                                                <div class="text-sm-end mt-2 mt-sm-0">
                                                                    <a href="#" class="btn btn-success">
                                                                        <i class="mdi mdi-cash-multiple me-1"></i> Checkout </a>
                                                                </div>
                                                            </div> <!-- end col -->
                                                        </div> <!-- end row-->

                                                    </div>
                                                </div>
                                            </div>
                                        </div> <!-- end col-->
                                    </div> <!-- end row-->

                                </div>
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

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- Vendor js -->
    <!-- <script src="assets/dashboard/assets/js/vendor.min.js"></script> -->


    <!-- -----------------Select ------------------------ -->
    <!-- <script src="assets/dashboard/assets/select2/js/select2.min.js"></script> -->
    <!-- ----------------------------------------------- -->
    <!-- App js -->
    <script src="assets/dashboard/assets/js/app.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- <script>
        $('[data-toggle="select2"]').select2();
    </script> -->
    <script type="text/javascript">
        $(document).ready(function($) {
            var doctor_name = $('#doctor_name').val();
            // ajax
            $.ajax({
                type: "POST",
                url: "models/total_price.php",
                data: {
                    doctor_name: doctor_name
                },
                dataType: 'json',
                success: function(res) {
                    $('#total').html(res.total);
                    $('#currency').html(res.currency)
                }
            });

        });
    </script>
</body>

</html>