<?php 
    // include 'includes/Operation.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap1.min.css">
    <!-- bootstarp js -->
    <script src="js/bootstrap.min.js"></script>

</head>
<body>
    <!-- Login 13 - Bootstrap Brain Component -->
    <section class="bg-light py-3 py-md-5" style="min-height: 100vh;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-10 col-md-8 col-lg-8 col-xl-6 col-xxl-5">
                <!-- <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-5 col-xxl-4"> -->
                    <div class="card border border-light-subtle rounded-3 shadow-sm">
                        <div class="card-body p-3 p-md-4 p-xl-5">
                            <div class="text-center mb-3">
                                <img src="images/index_logo.png" alt="FUJIFILM LOGO Logo" width="280" height="90">
                            </div>
                            <h2 class="fs-6 fw-normal text-center text-secondary mb-4">Create your account</h2>

                            <div id="invalidAlert" class="alert alert-danger" style="display:none;">Invalid Credentials.</div>

                            <form method="post" id="loginForm">
                                <div class="row pb-2">
                                    <div class="col-8">
                                        <div class="form-group">
                                            <label for="fname">First Name :</label>
                                            <input type="text" class="form-control" name="fname" id="fname" required>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label for="MI">Middle Initial :</label>
                                            <input type="text" class="form-control" name="MI" id="MI" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">    
                                    <div class="col-8">
                                        <div class="form-group">
                                            <label for="lname">Last Name :</label>
                                            <input type="text" class="form-control" name="lname" id="lname" required>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label for="idnumber">ID Number :</label>
                                            <input type="number" class="form-control" name="idnumber" id="idnumber" required>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">    
                                    <div class="col-5">
                                        <div class="form-group mb-3">
                                            <label for="">Department :</label>
                                            <select class="form-select" required>
                                                <option value="" selected>Select</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-7">
                                        <div class="form-group mb-3">
                                            <label for="">Upload Signature :</label>
                                            <input class="form-control" type="file" id="formFile" accept="image/png" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-floating mb-3">
                                            <input type="password" class="form-control" name="password" id="password" value="" placeholder="Password" required>
                                            <label for="password" class="form-label">Password</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating mb-3">
                                            <input type="password" class="form-control" name="Cpassword" id="Cpassword" value="" placeholder=" Confirm Password" required>
                                            <label for="Cpassword" class="form-label">Confirm Password</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="d-grid">
                                            <button class="btn btn-success btn-lg" type="submit" name="submit" value="login">Create Account</button>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <p class="m-0 text-secondary text-center">Already have an account? <a href="index.php" class="link-primary text-decoration-none">Log in</a></p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>
<script>
// Show alert if ?invalid=1 is in the URL
if (window.location.search.indexOf('invalid=1') !== -1) {
    document.getElementById('invalidAlert').style.display = '';
    // Remove ?invalid=1 from the URL without reloading the page
    if (window.history.replaceState) {
        const url = new URL(window.location);
        url.searchParams.delete('invalid');
        window.history.replaceState({}, document.title, url.pathname + url.search);
    }
}

// Loading overlay logic
document.getElementById('loginForm').addEventListener('submit', function(e) {
    // Create loading overlay
    var loader = document.createElement('div');
    loader.id = 'loadingOverlay';
    loader.style.position = 'fixed';
    loader.style.top = 0;
    loader.style.left = 0;
    loader.style.width = '100vw';
    loader.style.height = '100vh';
    loader.style.background = 'rgba(255,255,255,0.8)';
    loader.style.display = 'flex';
    loader.style.alignItems = 'center';
    loader.style.justifyContent = 'center';
    loader.style.zIndex = 9999;
    loader.innerHTML = '<div style="display:flex; flex-direction:column; align-items:center;">' +
        '<div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status"><span class="visually-hidden">Loading...</span></div>' +
        '<div style="margin-top:1rem; font-size:1.2rem; color:#007bff;">Please wait, logging in...</div>' +
    '</div>';
    document.body.appendChild(loader);
});
</script>
</html>