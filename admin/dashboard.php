<?php
session_start();
// Extra security: check both logged_in and session id

// if (empty($_SESSION['logged_in'])) {
//     session_destroy();
//     header('Location: /JobOrderRequestSystem/index.php');
//     exit();
// }
?>

<!DOCTYPE html>
<html lang="zxx"><head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard</title>

    <!-- <link rel="icon" href="img/logo.png" type="image/png"> -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap1.min.css">
    <!-- Data Tabled CSS -->
    <link rel="stylesheet" href="../css/dataTables.css">
    <!-- themefy CSS -->
    <link rel="stylesheet" href="../css/themify-icons.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="../css/all.min.css">
    <!-- <link rel="stylesheet" href="../css/tagsinput.css"> -->
    <!-- select2 CSS -->
    <!-- <link rel="stylesheet" href="../css/nice-select.css"> -->
    <!-- owl carousel CSS -->
    <!-- <link rel="stylesheet" href="css/owl.carousel.css"> -->
    <!-- gijgo css -->
    <!-- <link rel="stylesheet" href="../css/gijgo.min.css"> -->

    <!-- date picker -->
    <!-- <link rel="stylesheet" href="../css/date-picker.css">
    <link rel="stylesheet" href="../css/vectormap-2.0.2.css"> -->
     
    <!-- scrollabe  -->
    <!-- <link rel="stylesheet" href="../css/scrollable.css"> -->
    <!-- datatable CSS -->
    <!-- <link rel="stylesheet" href="../css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="../css/responsive.dataTables.min.css">
    <link rel="stylesheet" href="../css/buttons.dataTables.min.css"> -->
    <!-- text editor css -->
    <!-- <link rel="stylesheet" href="../css/summernote-bs4.css"> -->
    <!-- morris css -->
    <!-- <link rel="stylesheet" href="../css/morris.css"> -->
    <!-- metarial icon css -->
    <!-- <link rel="stylesheet" href="../css/material-icons.css"> -->

    <!-- menu css  -->
    <link rel="stylesheet" href="../css/metisMenu.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="../css/style1.css">
    <link rel="stylesheet" href="../css/default.css" id="colorSkinCSS">
</head>
<body class="crm_body_bg">
    
<!-- main content part here -->
 <!-- include the sidebar -->
<?php include_once 'includes/Sidebar.php'; ?>

<section class="main_content dashboard_part large_header_bg">
    <!-- menu  -->
    <?php include_once 'includes/Header.php'; ?>
    <!--/ menu  -->
    <div class="main_content_iner overly_inner ">
        <div class="container-fluid p-0 ">
            <!-- page title or banner -->
            <div class="row">
                <div class="col-12">
                    <div class="page_title_box d-flex align-items-center justify-content-between">
                        <div class="page_title_left">
                            <h3 class="f_s_30 f_w_700 text_white">Admin Dashboard</h3>
                            <ol class="breadcrumb page_bradcam mb-0">
                                <!-- <li class="breadcrumb-item"><a href="javascript:void(0);">Salessa </a></li>
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboard</a></li> -->
                                <!-- <li class="breadcrumb-item">Forms</li> -->
                                <li class="breadcrumb-item active">Admin Control Panel</li>
                            </ol>
                        </div>
                        <a href="new_request.php" class="white_btn3">
                            <img src="../images/4.svg" alt="" style="margin-right:8px;">
                            View New Request   
                        </a>
                    </div>
                </div>
            </div>
            <!-- end of page title or banner -->

            <!-- The updates is here -->
            <div class="row ">
                <div class="col-lg-3 card_height_100 mb_20">
                    <div class="white_card">
                        <div class="white_card_header">
                            <div class="box_header m-0">
                                <div class="main-title">
                                    <h3 class="m-0">Active Request</h3>
                                </div>
                            </div>
                        </div>
                        <div class="white_card_body p-0">
                            <div class="card_container text-center">
                                <h1>1</h1>
                            </div>
                        </div>
                    </div>
                    <div class="sales_unit_footer d-flex justify-content-between">
                        <a href="#" class="text-white">
                            More info ➜
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 card_height_100 mb_20">
                    <div class="white_card">
                        <div class="white_card_header">
                            <div class="box_header m-0">
                                <div class="main-title">
                                    <h3 class="m-0">Total Accomplish Request</h3>
                                </div>
                            </div>
                        </div>
                        <div class="white_card_body p-0">
                            <div class="card_container text-center">
                                <h1>2</h1>
                            </div>
                        </div>
                    </div>
                    <div class="sales_unit_footer d-flex justify-content-between">
                        <a href="#" class="text-white">
                            More info ➜
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 card_height_100 mb_20">
                    <div class="white_card">
                        <div class="white_card_header pb-0">
                            <div class="box_header m-0">
                                <div class="main-title">
                                    <h2 class="m-0">Process Flow of Work Order Requesting</h2>
                                </div>
                            </div>
                        </div>
                        <div class="white_card_body p-0">
                            <div class="card_container">
                                <span>
                                    <strong>1st Approver: </strong>Your <u>Department Head</u> reviews the request and approves or rejects it.<br>
                                    <strong>2nd Approver: </strong>The Facilities Supervisor reviews the request and approves then assign a evaluator or rejects it.<br>
                                    <strong>3rd Approver: </strong>The Facilities Manager reviews the request if the evaluator completed the request.
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- The Form is Here End -->
        </div>
    </div>

    <!-- footer part -->
    <div class="footer_part">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer_iner text-center">
                        <p>2025 © IT Department - FujiFilm Optics Philippines Inc.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- main content part end -->

<div id="back-top" style="display: none;">
    <a title="Go to Top" href="#">
        <i class="ti-angle-up"></i>
    </a>
</div>

<script src="../js/jquery-3.7.1.js"></script>
<!-- Data Table JS -->
<script src="../js/dataTables.js"></script>
<!-- bootstarp js -->
<script src="../js/bootstrap.bundle.min.js"></script> 
<script src="../js/metisMenu.js"></script>
<script src="../js/custom.js"></script>

<!-- footer  -->
<!-- <script src="../js/jquery1-3.4.1.min.js"></script> -->
<!-- popper js (only needed for Bootstrap 4, comment if using Bootstrap 5) -->
<!-- <script src="../js/popper1.min.js"></script> -->
<!-- waypoints js -->
<!-- <script src="../js/jquery.waypoints.min.js"></script> -->
<!-- waypoints js -->
<!-- <script src="../js/Chart.min.js"></script> -->
<!-- counterup js -->
<!-- <script src="../js/jquery.counterup.min.js"></script> -->

<!-- nice select -->
<!-- <script src="../js/jquery.nice-select.min.js"></script> -->
<!-- owl carousel -->
<!-- <script src="../js/owl.carousel.min.js"></script> -->

<!-- responsive table -->
<!-- <script src="../js/jquery.dataTables.min.js"></script> -->
<!-- <script src="../js/dataTables.responsive.min.js"></script>
<script src="../js/dataTables.buttons.min.js"></script> -->
<!-- <script src="../js/buttons.flash.min.js"></script>
<script src="../js/jszip.min.js"></script>
<script src="../js/pdfmake.min.js"></script>
<script src="../js/vfs_fonts.js"></script>
<script src="../js/buttons.html5.min.js"></script>
<script src="../js/buttons.print.min.js"></script> -->

<!-- datepicker  -->
<!-- <script src="../js/datepicker.js"></script>
<script src="../js/datepicker.en.js"></script>
<script src="../js/datepicker.custom.js"></script>

<script src="../js/chart.min.js"></script>
<script src="../js/roundedBar.min.js"></script> -->

<!-- progressbar js -->
<!-- <script src="../js/jquery.barfiller.js"></script> -->
<!-- tag input -->
<!-- <script src="../js/tagsinput.js"></script> -->
<!-- text editor js -->
<!-- <script src="../js/summernote-bs4.js"></script>
<script src="../js/amcharts.js"></script> -->

<!-- scrollabe  -->
<!-- <script src="../js/perfect-scrollbar.min.js"></script>
<script src="../js/scrollable-custom.js"></script> -->

<!-- vector map  -->
<!-- <script src="../js/vectormap-2.0.2.min.js"></script>
<script src="../js/vectormap-world-mill-en.js"></script> -->

<!-- apex chrat  -->
<!-- <script src="../js/apex-chart2.js"></script>
<script src="../js/apex_dashboard.js"></script>

<script src="../js/echarts.min.js"></script>


<script src="../js/core.js"></script>
<script src="../js/charts.js"></script>
<script src="../js/animated.js"></script>
<script src="../js/kelly.js"></script>
<script src="../js/chart-custom.js"></script> -->
<!-- custom js -->
<!-- <script src="../js/dashboard_init.js"></script> -->


</body></html>