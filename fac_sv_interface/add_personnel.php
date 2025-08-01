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
    <!-- select2 CSS -->
    <!-- <link rel="stylesheet" href="../css/nice-select.css"> -->
    <!-- owl carousel CSS -->
    <!-- <link rel="stylesheet" href="css/owl.carousel.css"> -->
    <!-- gijgo css -->
    <!-- <link rel="stylesheet" href="../css/gijgo.min.css"> -->
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="../css/all.min.css">
    <!-- <link rel="stylesheet" href="../css/tagsinput.css"> -->

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
                            <h3 class="f_s_30 f_w_700 text_white">Add Personnel</h3>
                            <ol class="breadcrumb page_bradcam mb-0">
                                <!-- <li class="breadcrumb-item"><a href="javascript:void(0);">Salessa </a></li>
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboard</a></li> -->
                                <!-- <li class="breadcrumb-item">Dashboard</li> -->
                                <li class="breadcrumb-item active">Facility Supervisor Control Panel</li>
                            </ol>
                        </div>
                        <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#addModal">✚ Add</button>
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
                                    <img src="../images/logo_banner.png" alt="FUJIFILM LOGO" height="60">
                                </div>
                                <!-- <div class="float-lg-right float-none sales_renew_btns justify-content-end">
                                    <ul class="nav">
                                        <li class="nav-item">
                                            <span class="nav-link text-dark">
                                                Work Order #:
                                                <p>1234-23423</p>
                                            </span>
                                        </li>
                                        <li class="nav-item">
                                            <span class="nav-link text-dark">
                                                Date:
                                                <p><?php echo date('F j, Y'); ?></p>
                                            </span>
                                        </li>
                                    </ul>
                                </div> -->

                            </div>
                        </div>
                        <div class="white_card_body">
                            <!-- The first part of the form goes here. -->
                            <div class="border-top border-bottom p-3">
                                
                                <table id="myTable" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Date Created</th>
                                            <th>EID #</th>
                                            <th>Name</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><?= date('F j, Y'); ?></td>
                                            <td><span>83911992q</span></td>
                                            <td><span>Roy Vincent M. Paring</span></td>
                                            <td>
                                                <a class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#viewNotModal">View</a>
                                                <a class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#editModal">Update</a>
                                                <a class="btn btn-danger btn-sm">Delete</a>
                                            </td>
                                        </tr>
                                    </tbody>

                                </table>

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

<!-- Modal For Adding -->
<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">
            Add Account
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-md">
                    <div class="form-group">
                        <label for="requester">Employee ID #:</label>
                        <input type="text" class="form-control" id="requester" value="">
                    </div>
                </div>
                <div class="col-md"> 
                    <div class="form-group">
                        <label for="department">Department:</label>
                        <input type="text" class="form-control" id="department" value="Human Resource" readonly>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md"> 
                    <div class="form-group">
                        <label for="department">Name:</label>
                        <input type="text" class="form-control" id="department" value="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md">
                    <div class="form-group">
                        <label for="department">Password:</label>
                        <input type="password" class="form-control" id="department" value="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md">
                    <div class="form-group">
                        <label for="department">Upload Signature:</label>
                        <input type="file" class="form-control" id="department" value="" accept="image/*">
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-success">Submit</button>
        </div>
    </div>
  </div>
</div>

<!-- Modal For View -->
<div class="modal fade" id="viewModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">
            Add Account
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-md">
                    <div class="form-group">
                        <label for="requester">Employee ID #:</label>
                        <input type="text" class="form-control" id="requester" value="">
                    </div>
                </div>
                <div class="col-md"> 
                    <div class="form-group">
                        <label for="department">Department:</label>
                        <input type="text" class="form-control" id="department" value="Human Resource" readonly>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md"> 
                    <div class="form-group">
                        <label for="department">Name:</label>
                        <input type="text" class="form-control" id="department" value="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md">
                    <div class="form-group">
                        <label for="department">Password:</label>
                        <input type="password" class="form-control" id="department" value="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md">
                    <div class="form-group">
                        <label for="department">Upload Signature:</label>
                        <input type="file" class="form-control" id="department" value="" accept="image/*">
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-success">Submit</button>
        </div>
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
            "info": true,
            "autoWidth": false,
            //"columnDefs": [
                //{ "width": "5%", "targets": 6 }
            //],
            //"responsive": true,
            //"createdRow": function(row, data, dataIndex) {
                // Set font size for all cells in the row
                //$(row).find('td').css('font-size', '11px'); // Change 14px as needed
            //},
            //"initComplete": function(settings, json) {
                // Set font size for header cells
                //$('#myTable thead th').css('font-size', '12px'); // Change 14px as needed
            //},
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
<!-- popper js -->
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