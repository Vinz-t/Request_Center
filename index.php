<?php 
    // include 'includes/Operation.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In - Account</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap1.min.css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="fontawesome-6.7.2/css/all.min.css">
    <!-- Toastr CSS -->
    <link href="https://cdn.jsdelivr.net/npm/toastr@2.1.4/build/toastr.min.css" rel="stylesheet">
    <!-- Custom CSS to hide number input spinners -->
    <style>
        body {
            background-image: url("images/background.png"); 
            background-repeat: no-repeat;
            background-size: cover;
            height: 100vh;
            background-position: center;
        }
        .backgrnd {
            min-height: 100vh;
        }
        /* Custom opacity for toastr notifications */
        #toast-container > .toast {
            opacity: 0.95 !important;
        }
        /* Chrome, Safari, Edge, Opera */
        input[type=number]::-webkit-inner-spin-button, 
        input[type=number]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
        /* Firefox */
        input[type=number] {
            -moz-appearance: textfield;
        }
    </style>

</head>
<body>
    <section class="backgrnd py-3 py-md-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-5 col-xxl-4">
                    <div class="card border border-light-subtle rounded-3 shadow-sm">
                        <div class="card-body p-3 p-md-4 p-xl-5">
                            <div class="text-center mb-3">
                            <a href="#!">
                                <img src="images/index_logo.png" alt="FUJIFILM LOGO Logo" width="280" height="90">
                            </a>
                            </div>
                            <h2 class="fs-6 fw-normal text-center text-secondary mb-4">Log in to your account</h2>

                            <!-- <form method="post" id="loginForm"> -->
                                <div class="row gy-2 overflow-hidden">
                                    <div class="col-12">
                                        <div class="form-floating mb-3">
                                            <input type="number" class="form-control" name="eidnumber" id="eidnumber" placeholder="ID Number">
                                            <label for="eidnumber" class="form-label"><i class="fa-solid fa-user pe-2"></i>ID Number</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating mb-3">
                                            <input type="password" class="form-control" name="password" id="password" value="" placeholder="Password">
                                            <label for="password" class="form-label"><i class="fa-solid fa-key pe-2"></i>Password</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="text-end">
                                            <a href="#!" class="link-primary text-decoration-none">Forgot password?</a>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="d-grid my-3">
                                            <button class="btn btn-primary btn-lg" type="button" id="login" name="submit" value="login">
                                                <i class="fa-solid fa-right-to-bracket pe-2"></i>
                                                Log in
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <p class="m-0 text-secondary text-center">Don't have an account? <a href="register.php" class="link-primary text-decoration-none">Create</a></p>
                                    </div>
                                </div>
                            <!-- </form> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>
<!-- JQuery JS -->
 <script src="js/jquery-3.7.1.js"></script>
<!-- bootstarp js -->
<script src="js/bootstrap.min.js"></script>
<!-- toastr js -->
<script src="https://cdn.jsdelivr.net/npm/toastr@2.1.4/toastr.min.js"></script>

<script>
    $(document).ready(function () {
        $("#login").on("click", function () {
            //$("#invalidAlert").addClass('d-none');
            var eid = $("#eidnumber").val();
            var pwd = $("#password").val();

            if (eid == '' || pwd == '') {
                toastr.warning(
                    'Both fields are required!',
                    '',
                    toastr.options.progressBar = true,
                    toastr.options.hideMethod = 'slideUp'
                );
                e.preventDefault(); // Prevent form submission
            } else {
                //$("#requiredAlert").addClass('d-none');
                
                $.ajax({
                    url: "includes/Operation.php",
                    method: "post",
                    data: {employee_id: eid, pass_word: pwd},
                    success: function (response) {
                        //alert(response);
                        var dataResult = JSON.parse(response);

                        switch (dataResult.statusCode) {
                            case 201:
                                //$("#invalidAlert").addClass('d-none');
                                //toastr.success('The Name of person', 'Welcome');
                                window.location = 'user_interface/dashboard.php?sc=' + dataResult.statusCode;
                                
                                // alert('User');
                                break;
                            case 202:
                                //$("#invalidAlert").addClass('d-none');
                                // window.location = 'user_interface/dashboard.php';
                                alert('Technicians');
                                break;
                            case 203:
                                //$("#invalidAlert").addClass('d-none');
                                // window.location = 'dept_mngr_interface/dashboard.php';
                                //alert('Facility Manager');
                                break;
                            case 204:
                                //$("#invalidAlert").addClass('d-none');
                                // window.location = 'dept_mngr_interface/dashboard.php';
                                alert('Facility Supervisor');
                                break;
                            case 205:
                                //$("#invalidAlert").addClass('d-none');
                                // window.location = 'dept_mngr_interface/dashboard.php';
                                alert('Department Manager');
                                break;
                            case 206:
                                //$("#invalidAlert").addClass('d-none');
                                // window.location = 'dept_mngr_interface/dashboard.php';
                                alert('admin');
                                break;
                        
                            default: // status code 200 means incorrect credentials inputed
                                //$("#invalidAlert").removeClass('d-none');
                                toastr.error(
                                    'Check your ID Number or Password.', //message   
                                    'INCORRECT CREDENTIALS!', // title
                                    toastr.options.progressBar = true,
                                    toastr.options.hideMethod = 'slideUp'
                                );
                                break;
                        }
                    }
                });
            }
        });
    });

    // Loading overlay logic
    // document.getElementById('loginForm').addEventListener('submit', function(e) {
    //     // Create loading overlay
    //     var loader = document.createElement('div');
    //     loader.id = 'loadingOverlay';
    //     loader.style.position = 'fixed';
    //     loader.style.top = 0;
    //     loader.style.left = 0;
    //     loader.style.width = '100vw';
    //     loader.style.height = '100vh';
    //     loader.style.background = 'rgba(255,255,255,0.8)';
    //     loader.style.display = 'flex';
    //     loader.style.alignItems = 'center';
    //     loader.style.justifyContent = 'center';
    //     loader.style.zIndex = 9999;
    //     loader.innerHTML = '<div style="display:flex; flex-direction:column; align-items:center;">' +
    //         '<div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status"><span class="visually-hidden">Loading...</span></div>' +
    //         '<div style="margin-top:1rem; font-size:1.2rem; color:#007bff;">Please wait, logging in...</div>' +
    //     '</div>';
    //     document.body.appendChild(loader);
    // });
</script>
</html>