<?php
// session_start();
// // Extra security: check both logged_in and session id

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
<?php //include_once 'includes/Sidebar.php'; ?>

<section class="main_content dashboard_part large_header_bg ps-0">
    <!-- menu  -->
    <div class="container-fluid g-0">
        <div class="row">
            <div class="col-lg-12 p-0">
                <div class="header_iner d-flex justify-content-between align-items-center">
                    <div class="sidebar_icon">
                        <img src="../images/logo_banner.png" alt="FUJIFILM LOGO" height="60">
                        <!-- <i class="ti-menu"></i> -->
                    </div>
                    <div class="serach_field-area d-flex align-items-center">
                            <!-- <div class="search_inner">
                                <form action="#">
                                    <div class="search_field">
                                        <input type="text" placeholder="Search here...">
                                    </div>
                                    <button type="submit"> <img src="images/icon_search.svg" alt=""> </button>
                                </form>
                            </div> -->
                        <span class="f_s_14 f_w_400 ml_25 white_text text_white">Apps</span>
                    </div>
                    <div class="header_right d-flex justify-content-between align-items-center">
                        <div class="header_notification_warp d-flex align-items-center">
                            <li>
                                <div>
                                    <?php 
                                        date_default_timezone_set('Asia/Manila');
                                        echo strtoupper(date('l, F j Y'));
                                    ?>
                                </div>
                            </li>
                            <!-- <li>|</li> -->
                        </div>
                        <!-- <div class="profile_info">
                            <img src="../images/user.png" alt="#">
                            <div class="profile_info_iner">
                                <div class="profile_author_name p-3">
                                    <p>Department: Here...</p>
                                    <span class="text-white h5">Roy Vincent M. Paring</span>
                                </div>
                                <div class="profile_info_details">
                                    <a href="../user_interface/my_profile.php"><strong>My Profile</strong></a>
                                    <a href="#">Settings</a>
                                    <a href="includes/Logout.php"><strong>Log Out </strong></a>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ menu  -->
    <div class="main_content_iner overly_inner ">
        <div class="container-fluid p-0 ">
            <!-- page title or banner -->
            <div class="row">
                <div class="col-12">
                    <div class="page_title_box d-flex align-items-center justify-content-between">
                        <div class="page_title_left">
                            <h3 class="f_s_30 f_w_700 text_white">Submission Bin</h3>
                            <ol class="breadcrumb page_bradcam mb-0">
                                <!-- <li class="breadcrumb-item"><a href="javascript:void(0);">Salessa </a></li>
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboard</a></li> -->
                                <!-- <li class="breadcrumb-item">Forms</li> -->
                                <li class="breadcrumb-item">Open</li>
                                <li class="breadcrumb-item">Enter Unique Code</li>
                                <li class="breadcrumb-item">Submit</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end of page title or banner -->

            <!-- The Form is Here -->
            <div class="row ">
                <div class="col-lg-12 card_height_100">
                    <div class="white_card mb_20">
                        <div class="white_card_header">
                            <div class="box_header m-0">

                                <div class="main-title">
                                    <!-- <img src="../images/logo_banner.png" alt="FUJIFILM LOGO" height="60"> -->
                                    <h4>Requestor: Roy Vincent M. Paring</h4>
                                    <h4>Person In Charge: Mr. Right</h4>
                                </div>
                                <div class="float-lg-right float-none sales_renew_btns justify-content-end">
                                    <ul class="nav">
                                        <li class="nav-item">
                                            <span class="nav-link text-dark">
                                                <label for="inputPassword2">Password:</label>
                                                <input type="password" class="form-control" id="inputPassword2">
                                                <!-- Work Order #:
                                                <p>1234-23423</p> -->
                                            </span>
                                        </li>
                                        <li class="nav-item">
                                            <span class="nav-link text-dark">
                                                <br>
                                                <button type="submit" class="btn btn-primary">Confirm identity</button>
                                                <!-- Date:
                                                <p><?php echo date('F j, Y'); ?></p> -->
                                            </span>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                        <div class="white_card_body">
                            <!-- The first part of the form goes here. -->
                            <div class="row border-top border-bottom p-3">
                                
                                <div class="col-md-6">
                                    <h5>Work Order #: 01-2025-01</h5>
                                    <h5>Date Submitted: <?= date('F j, Y'); ?></h5>
                                    <hr>
                                    <h5>Request Type: Electrical Installation</h5>
                                    <h5>Reason of Request: Hello Hello Hello World</h5>
                                    <button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#viewAttach">View Attachment</button>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="not-identify text-center">
                                        <h5>Kindly Identify your self, before submission.</h5>
                                    </div>
                                    <div class="border p-3 d-none">    
                                        <div class="with-identify">
                                            <label for="specifyRequest" class="form-label">Facilities Comment/Recommendation:</label>
                                            <textarea class="form-control" id="specifyRequest" rows="3" placeholder="Type here......"></textarea>
                                            <label for="">Upload image:</label>
                                            <input type="file" class="form-control" accept="image/*">
                                            <hr>
                                            <button type="submit" class="btn btn-success w-100">Submit</button>
                                        </div>
                                    </div>
                                    
                                </div>

                            </div>
                            <!-- End of the first part of the form. -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- The Form is Here End -->
        </div>
    </div>

    <!-- footer part -->
    <div class="footer_part ps-0">
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

<!-- Submital Modal -->
<div class="modal fade" id="viewAttach" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">
            <div>Work Order #: 01-2025-01</div>
            <div>Date Submitted: <?= date('F j, Y'); ?></div>
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <h2>Images goes here...</h2>
        </div>
        <!-- <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-success" href="">Comply</button>
        </div> -->
    </div>
  </div>
</div>

<script src="../js/jquery-3.7.1.js"></script>
<!-- Data Table JS -->
<script src="../js/dataTables.js"></script>
<!-- bootstarp js -->
<script src="../js/bootstrap.bundle.min.js"></script> 
<script src="../js/metisMenu.js"></script>
<script src="../js/custom.js"></script>

<script>
    $(document).ready(function(){
        // Initialize DataTable
        $('#myTable').DataTable({
            "paging": true,
            "searching": true,
            "ordering": true,
            "info": true
            // responsive: true,
            // dom: 'Bfrtip',
            // buttons: [
            //     'copy', 'csv', 'excel', 'pdf', 'print'
            // ]
        });

        // // Back to top button functionality
        // $(window).scroll(function() {
        //     if ($(this).scrollTop() > 100) {
        //         $('#back-top').fadeIn();
        //     } else {
        //         $('#back-top').fadeOut();
        //     }
        // });

        // $('#back-top a').click(function() {
        //     $('html, body').animate({scrollTop: 0}, 800);
        //     return false;
        // });
    });
</script>

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