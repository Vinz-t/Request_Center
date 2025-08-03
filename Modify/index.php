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
    <link rel="stylesheet" href="css/toastr.min.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/toastr@2.1.4/build/toastr.min.css" rel="stylesheet"> -->
    <!-- Custom CSS to hide number input spinners -->
    <style>
        body {
            background-image: linear-gradient(rgba(0,0,0,0.2), rgba(0,0,0,0.2)), url("images/background.png"); 
            background-repeat: no-repeat;
            background-size: cover;
            height: 100vh;
            background-position: center;
        }
        .backgrnd {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        /* Custom opacity for toastr notifications */
        /* #toast-container > .toast {
            opacity: 0.95 !important;
        } */
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
                                            <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                                            <label for="password" class="form-label"><i class="fa-solid fa-key pe-2"></i>Password</label>
                                            <!-- Eye icon button -->
                                            <span class="position-absolute top-50 end-0 translate-middle-y me-3" onclick="togglePassword()" style="cursor: pointer;">
                                                <i id="togglePasswordIcon" class="fa-solid fa-eye"></i>
                                            </span>
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

    <!-- Test the loader -->
    <div id="loadingOverlay" style="display:none; position:fixed; top:0; left:0; width:100%; height:100%; background:#00000080; z-index:9999; text-align:center;">
        <div style="position:absolute; top:50%; left:50%; transform:translate(-50%,-50%); color:white;">
            <div class="spinner-border text-light" role="status" style="width: 6rem; height: 6rem;"></div>
            <div class="mt-2">Redirecting, please wait...</div>
        </div>
    </div>

    <!-- To test the loader -->
    <!-- <button onclick="testLoader()" class="btn btn-primary">Test Loader</button> -->

</body>
<!-- JQuery JS -->
 <script src="js/jquery-3.7.1.js"></script>
<!-- bootstarp js -->
<script src="js/bootstrap.min.js"></script>
<!-- toastr js -->
<script src="js/toastr.min.js"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/toastr@2.1.4/toastr.min.js"></script> -->

<script>
    // To Test the loader
    // function testLoader() {
    //     $('#loadingOverlay').show(); // show loader
    //     setTimeout(() => {
    //     // simulate a redirect or just hide loader
    //     // window.location = 'your_test_page.php'; // optional
    //     $('#loadingOverlay').hide();
    //     }, 3000); // 3 seconds
    // }

    $(document).ready(function () {
        $("#login").on("click", function () {
            //$("#invalidAlert").addClass('d-none');
            var eid = $("#eidnumber").val();
            var pwd = $("#password").val();

            if (eid == '' || pwd == '') {
                toastr.warning('BOTH FIELD ARE REQUIRED!', '', {
                progressBar: true,
                hideMethod: 'slideUp'
                });
                e.preventDefault(); // Prevent form submission
            } else {
                //$("#requiredAlert").addClass('d-none');
                
                $.ajax({
                    url: "includes/Operation.php",
                    method: "post",
                    data: {employee_id: eid, pass_word: pwd},
                    success: function (response) {
                        const d = JSON.parse(res);
                        const redirect = (url) => {
                            $('#loadingOverlay').show(); // show loading
                            setTimeout(() => { window.location = url; }, 1000); // delay redirect
                        };
                        switch (d.statusCode) {
                            case 201: redirect('user_interface/dashboard.php?sc=' + d.statusCode + '&name=' + encodeURIComponent(d.Message)); break;
                            case 202: redirect('technician_interface/dashboard.php'); break;
                            case 203: redirect('facility_manager_interface/dashboard.php'); break;
                            case 204: redirect('facility_supervisor_interface/dashboard.php'); break;
                            case 205: redirect('dept_manager_interface/dashboard.php'); break;
                            case 206: redirect('admin_interface/dashboard.php'); break;
                        default:
                            toastr.error('Check your ID Number or Password.', 'INCORRECT CREDENTIALS!', {
                            progressBar: true,
                            hideMethod: 'slideUp'
                            });
                        }
                    }
                });
            }
        });
    });

    function togglePassword() {
        const passwordInput = document.getElementById('password');
        const icon = document.getElementById('togglePasswordIcon');

        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            icon.classList.remove('fa-eye');
            icon.classList.add('fa-eye-slash');
        } else {
            passwordInput.type = 'password';
            icon.classList.remove('fa-eye-slash');
            icon.classList.add('fa-eye');
        }
    }

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