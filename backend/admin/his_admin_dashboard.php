<?php
session_start();
include('assets/inc/config.php');
include('assets/inc/checklogin.php');
check_login();
$aid = $_SESSION['ad_id'];
?>
<!DOCTYPE html>
<html lang="en">

<!--Head Code-->
<?php include("assets/inc/head.php"); ?>

<body>

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Topbar Start -->
        <?php include('assets/inc/nav.php'); ?>
        <!-- end Topbar -->

        <!-- ========== Left Sidebar Start ========== -->
        <?php include('assets/inc/sidebar.php'); ?>
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

                                <h4 class="page-title text-center">Cardio Care Dashboard</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->


                    <div class="row">
                        <!--Start OutPatients-->
                        <div class="col-md-6 col-xl-6">
                            <div class="widget-rounded-circle card-box">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="avatar-lg rounded-circle bg-soft-primary border-primary border">
                                            <i class="fab fa-accessible-icon  font-22 avatar-title text-primary"></i>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="text-right">
                                            <?php
                                            //code for summing up number of out patients 
                                            $result = "SELECT count(*) FROM his_patients WHERE pat_type = 'OutPatient' ";
                                            $stmt = $mysqli->prepare($result);
                                            $stmt->execute();
                                            $stmt->bind_result($outpatient);
                                            $stmt->fetch();
                                            $stmt->close();
                                            ?>
                                            <h3 class="text-dark mt-1"><span data-plugin="counterup"><?php echo $outpatient; ?></span></h3>
                                            <p class="text-muted mb-1 text-truncate">Out Patients</p>
                                        </div>
                                    </div>
                                </div> <!-- end row-->
                            </div> <!-- end widget-rounded-circle-->
                        </div> <!-- end col-->
                        <!--End Out Patients-->


                        <!--Start InPatients-->
                        <div class="col-md-6 col-xl-6">
                            <div class="widget-rounded-circle card-box">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="avatar-lg rounded-circle bg-soft-primary border-primary border">
                                            <i class="mdi mdi-hotel   font-22 avatar-title text-primary"></i>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="text-right">
                                            <?php
                                            //code for summing up number of in / admitted  patients 
                                            $result = "SELECT count(*) FROM his_patients WHERE pat_type = 'InPatient' ";
                                            $stmt = $mysqli->prepare($result);
                                            $stmt->execute();
                                            $stmt->bind_result($inpatient);
                                            $stmt->fetch();
                                            $stmt->close();
                                            ?>
                                            <h3 class="text-dark mt-1"><span data-plugin="counterup"><?php echo $inpatient; ?></span></h3>
                                            <p class="text-muted mb-1 text-truncate">In Patients</p>
                                        </div>
                                    </div>
                                </div> <!-- end row-->
                            </div> <!-- end widget-rounded-circle-->
                        </div> <!-- end col-->
                        <!--End InPatients-->

                    </div>



                    <!-- Footer Start -->
                    <?php include('assets/inc/footer.php'); ?>
                    <!-- end Footer -->

                </div>

                <!-- ============================================================== -->
                <!-- End Page content -->
                <!-- ============================================================== -->


            </div>
            <!-- END wrapper -->

            <!-- Right Sidebar -->
            <div class="right-bar">
                <div class="rightbar-title">
                    <a href="javascript:void(0);" class="right-bar-toggle float-right">
                        <i class="dripicons-cross noti-icon"></i>
                    </a>
                    <h5 class="m-0 text-white">Settings</h5>
                </div>
                <div class="slimscroll-menu">
                    <!-- User box -->
                    <div class="user-box">
                        <div class="user-img">
                            <img src="assets/images/users/user-1.jpg" alt="user-img" title="Mat Helme" class="rounded-circle img-fluid">
                            <a href="javascript:void(0);" class="user-edit"><i class="mdi mdi-pencil"></i></a>
                        </div>

                        <h5><a href="javascript: void(0);">Geneva Kennedy</a> </h5>
                        <p class="text-muted mb-0"><small>Admin Head</small></p>
                    </div>

                    <!-- Settings -->
                    <hr class="mt-0" />
                    <h5 class="pl-3">Basic Settings</h5>
                    <hr class="mb-0" />

                    <div class="p-3">
                        <div class="checkbox checkbox-primary mb-2">
                            <input id="Rcheckbox1" type="checkbox" checked>
                            <label for="Rcheckbox1">
                                Notifications
                            </label>
                        </div>
                        <div class="checkbox checkbox-primary mb-2">
                            <input id="Rcheckbox2" type="checkbox" checked>
                            <label for="Rcheckbox2">
                                API Access
                            </label>
                        </div>
                        <div class="checkbox checkbox-primary mb-2">
                            <input id="Rcheckbox3" type="checkbox">
                            <label for="Rcheckbox3">
                                Auto Updates
                            </label>
                        </div>
                        <div class="checkbox checkbox-primary mb-2">
                            <input id="Rcheckbox4" type="checkbox" checked>
                            <label for="Rcheckbox4">
                                Online Status
                            </label>
                        </div>
                        <div class="checkbox checkbox-primary mb-0">
                            <input id="Rcheckbox5" type="checkbox" checked>
                            <label for="Rcheckbox5">
                                Auto Payout
                            </label>
                        </div>
                    </div>

                    <!-- Timeline -->
                    <hr class="mt-0" />
                    <h5 class="px-3">Messages <span class="float-right badge badge-pill badge-danger">25</span></h5>
                    <hr class="mb-0" />
                    <div class="p-3">
                        <div class="inbox-widget">
                            <div class="inbox-item">
                                <div class="inbox-item-img"><img src="assets/images/users/user-2.jpg" class="rounded-circle" alt=""></div>
                                <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Tomaslau</a></p>
                                <p class="inbox-item-text">I've finished it! See you so...</p>
                            </div>
                            <div class="inbox-item">
                                <div class="inbox-item-img"><img src="assets/images/users/user-3.jpg" class="rounded-circle" alt=""></div>
                                <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Stillnotdavid</a></p>
                                <p class="inbox-item-text">This theme is awesome!</p>
                            </div>
                            <div class="inbox-item">
                                <div class="inbox-item-img"><img src="assets/images/users/user-4.jpg" class="rounded-circle" alt=""></div>
                                <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Kurafire</a></p>
                                <p class="inbox-item-text">Nice to meet you</p>
                            </div>

                            <div class="inbox-item">
                                <div class="inbox-item-img"><img src="assets/images/users/user-5.jpg" class="rounded-circle" alt=""></div>
                                <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Shahedk</a></p>
                                <p class="inbox-item-text">Hey! there I'm available...</p>
                            </div>
                            <div class="inbox-item">
                                <div class="inbox-item-img"><img src="assets/images/users/user-6.jpg" class="rounded-circle" alt=""></div>
                                <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Adhamdannaway</a></p>
                                <p class="inbox-item-text">This theme is awesome!</p>
                            </div>
                        </div> <!-- end inbox-widget -->
                    </div> <!-- end .p-3-->

                </div> <!-- end slimscroll-menu-->
            </div>
            <!-- /Right-bar -->

            <!-- Right bar overlay-->
            <div class="rightbar-overlay"></div>

            <!-- Vendor js -->
            <script src="assets/js/vendor.min.js"></script>

            <!-- Plugins js-->
            <script src="assets/libs/flatpickr/flatpickr.min.js"></script>
            <script src="assets/libs/jquery-knob/jquery.knob.min.js"></script>
            <script src="assets/libs/jquery-sparkline/jquery.sparkline.min.js"></script>
            <script src="assets/libs/flot-charts/jquery.flot.js"></script>
            <script src="assets/libs/flot-charts/jquery.flot.time.js"></script>
            <script src="assets/libs/flot-charts/jquery.flot.tooltip.min.js"></script>
            <script src="assets/libs/flot-charts/jquery.flot.selection.js"></script>
            <script src="assets/libs/flot-charts/jquery.flot.crosshair.js"></script>

            <!-- Dashboar 1 init js-->
            <script src="assets/js/pages/dashboard-1.init.js"></script>

            <!-- App js-->
            <script src="assets/js/app.min.js"></script>

</body>

</html>