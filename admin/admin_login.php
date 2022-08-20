<?php
session_start();

include "../config/connection.php";

if (isset($_COOKIE['rememberForIdealVillageAdmin'])  &&  isset($_COOKIE['verificationFlagAdmin1'])  &&  isset($_COOKIE['verificationFlagAdmin2'])) {
    $code = realEscape($_COOKIE['rememberForIdealVillageAdmin']);
    $qry = "SELECT * from admin where verify_code = '$code' AND site_id = '$this_site_id'  ";
    $res = mysqli_query($conn, $qry);
    if ($res) {
        $res = mysqli_fetch_assoc($res);

        if (isset($res['id'])  &&  password_verify($res['email'], realEscape($_COOKIE['verificationFlagAdmin2']))  &&  password_verify($res['password'], realEscape($_COOKIE['verificationFlagAdmin1']))) {
            setcookie('rememberForIdealVillageAdmin', $code, time() + 60 * 60 * 24 * 7, '/');
            setcookie('verificationFlagAdmin1', password_hash($res['password'], PASSWORD_DEFAULT), time() + 60 * 60 * 24 * 7, '/');
            setcookie('verificationFlagAdmin2', password_hash($res['email'], PASSWORD_DEFAULT), time() + 60 * 60 * 24 * 7, '/');
            $_SESSION['admin_id'] = $res['id'];
            $_SESSION['vendor_id'] = $res['vendor_id'];
            $_SESSION['verify_code'] = $res['verify_code'];
            header('location: admin_dashboard');
        }
    }
}

$show_logout_msg = false;
if (isset($_GET['status'])) {
    $val = urldecode(base64_decode($_GET['status']));
    if ($val == 'logout') {
        $show_logout_msg = true;
    }
}


if (isset($_GET['s'])  &&  urldecode(base64_decode($_GET['s'])) == 'inactivity') {
    $show_logout_msg = 2;
}

$response = '';

if (isset($_SESSION['admin_id'])) {
    header('location: admin_dashboard');
}

if (isset($_POST['submit'])) {
    $email = realEscape($_POST['email']);
    $password = realEscape($_POST['password']);

    $qry = "SELECT * from admin where email = '$email' AND site_id = '$this_site_id'  ";
    $res = mysqli_query($conn, $qry);
    if ($res) {
        $res = mysqli_fetch_assoc($res);
        if ($res) {
            if (password_verify($password, $res['password'])) {
                $verify_code = password_hash($res['id'], PASSWORD_DEFAULT);

                if (isset($_POST['rememberMe'])) {
                    setcookie('rememberForIdealVillageAdmin', $verify_code, time() + 60 * 60 * 24 * 7, '/');
                    setcookie('verificationFlagAdmin1', password_hash($res['password'], PASSWORD_DEFAULT), time() + 60 * 60 * 24 * 7, '/');
                    setcookie('verificationFlagAdmin2', password_hash($res['email'], PASSWORD_DEFAULT), time() + 60 * 60 * 24 * 7, '/');
                }

                $qry = "UPDATE admin set verify_code = '$verify_code' where id = '" . $res['id'] . "' ";
                if (mysqli_query($conn, $qry)) {
                    $_SESSION['admin_id'] = $res['id'];
                    $_SESSION['vendor_id'] = $res['vendor_id'];
                    $_SESSION['verify_code'] = $verify_code;
                    if (setOnlineStatus($res['id'], 'Login', 1)) // type = 1 for admin and 0 (default for vendor)
                        header('location: admin_dashboard');
                    else
                        die('status error');
                } else {
                    errlog(mysqli_error($conn), $qry);
                }
            } else {
                $response = "Wrong password";
            }
        } else {
            $response = 'Email not registered.';
        }
    } else {
        $response = 'Email not registered.';
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>


    <meta charset="utf-8" />
    <title><?php echo $site_name ?></title>
    <link rel="shortcut icon" href="<?php echo $admin_icon; ?>">

    <?php
    include '../config/common_styles.php';
    ?>

</head>

<body id="body" class="auth-page" style="background-image: url('../assets/images/p-1.png'); background-size: cover; background-position: center center;">
    <!-- Log In page -->
    <div class="container-md">
        <div class="row vh-100 d-flex justify-content-center">
            <div class="col-12 align-self-center">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4 mx-auto">
                            <div class="card">
                                <div class="card-body p-0 auth-header-box">
                                    <div class="text-center p-3">
                                        <a href="index.html" class="logo logo-admin">
                                            <img src="../assets/images/logo-sm.png" height="50" alt="logo" class="auth-logo">
                                        </a>
                                        <h4 class="mt-3 mb-1 fw-semibold text-white font-18">Let's Get Started Unikit</h4>
                                        <p class="text-muted  mb-0">Sign in to continue to Unikit.</p>
                                    </div>
                                </div>
                                <div class="card-body pt-0">
                                    <form class="my-4" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                                        <div id="loginBlock">
                                            <div class="form-group mb-2">
                                                <label class="form-label" for="username">Email</label>
                                                <input type="email" class="form-control" id="username" name="email" placeholder="Enter email">
                                            </div>

                                            <div class="form-group">
                                                <label class="form-label" for="userpassword">Password</label>
                                                <input type="password" class="form-control" name="password" id="userpassword" placeholder="Enter password">
                                            </div>

                                            <div class="form-group row mt-3">
                                                <div class="col-sm-6">
                                                    <div class="form-check form-switch form-switch-success">
                                                        <input class="form-check-input" type="checkbox" id="loginWithOtp">
                                                        <label class="form-check-label" for="loginWithOtp">Login with OTP</label>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-sm-6 text-end">
                                                    <a id="forgotPassword" style="cursor: pointer;" class="text-muted font-13"><i class="dripicons-lock"></i> Forgot password?</a>
                                                </div>
                                                <!--end col-->
                                            </div>
                                            <div class="form-group row mt-1">
                                                <div class="col-sm-12">
                                                    <input type="checkbox" id="rememberMe" name="rememberMe">
                                                    <label for="rememberMe">Remember Me</label>
                                                </div>
                                            </div>
                                            <!--end form-group-->

                                            <div class="form-group mb-0 row">
                                                <div class="col-12">
                                                    <div class="d-grid mt-3">
                                                        <button name="submit" class="btn btn-primary" type="submit">Log In <i class="fas fa-sign-in-alt ms-1"></i></button>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                            </div>
                                            <!--end form-group-->
                                        </div>
                                        <div id="forgotPassBlock" style="display: none;">
                                            <div class="form-group mb-2">
                                                <label class="form-label" for="username">Email</label>
                                                <input type="email" class="form-control" id="mailID" placeholder="Enter email">
                                            </div>
                                            <div class="form-group mb-0 row">

                                                <div class="col-6">
                                                    <div class="d-grid mt-3">
                                                        <button id="back" class="btn btn-primary" type="button">Back</button>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="d-grid mt-3">
                                                        <button id="otp" class="btn btn-primary" type="button">Send OTP</button>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div id="verifyOtpBlock" style="display: none;">
                                            <div class="form-group mb-2">
                                                <label class="form-label" for="username">OTP</label>
                                                <input type="number" class="form-control" id="totp" placeholder="Enter OTP">
                                            </div>
                                            <div class="form-group mb-0 row">

                                                <div class="col-6">
                                                    <div class="d-grid mt-3">
                                                        <button id="back2" class="btn btn-primary" type="button">Back</button>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="d-grid mt-3">
                                                        <button id="votp" class="btn btn-primary" type="button">Verify OTP</button>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </form>
                                    <!--end form-->




                                </div>
                                <!--end card-body-->
                            </div>
                            <!--end card-->
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
                <!--end card-body-->
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>


    <?php
    include "../config/common_scripts.php";
    ?>

    <script>
        var show_logout_msg = '<?php echo $show_logout_msg; ?>';
        if (show_logout_msg == '1') {
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: 'You have been logged out',
                showConfirmButton: false,
                timer: 5000
            })
            window.history.pushState('', '', '<?php echo explode('.', $_SERVER['PHP_SELF'])[0]; ?>');
        } else if (show_logout_msg == '2') {
            Swal.fire({
                position: 'top-end',
                icon: 'info',
                title: 'You have been logged out due to inactivity',
                showConfirmButton: false,
                timer: 5000
            })
            window.history.pushState('', '', '<?php echo explode('.', $_SERVER['PHP_SELF'])[0]; ?>');
        }

        var extra_variable = '';
        $(document).ready(function() {
            var response = '<?php echo $response ?>';
            if (response != '') {
                Swal.fire({
                    customClass: {
                        confirmButton: 'btn btn-success',
                        cancelButton: 'btn btn-danger'
                    },
                    buttonsStyling: false,
                    icon: 'error',
                    title: 'Oops...',
                    text: response,
                })
            }

            $("#loginWithOtp").on('change', function() {
                $("#loginBlock").toggle();
                $("#forgotPassBlock").fadeToggle(300);
            })


            $("#back").click(function() {
                $("#loginWithOtp").attr("checked", false);
                $("#loginBlock").fadeIn(400);
                $("#forgotPassBlock").hide();
            })

            $("#back2").click(function() {
                $("#forgotPassBlock").fadeIn(300);
                $("#verifyOtpBlock").hide();
            })

            $("#otp").click(function() {
                $(this).attr('disabled', true);
                $(this).html("Sending..");


                var email = $("#mailID").val();

                $.ajax({
                    url: "admin_login_helper",
                    method: "post",
                    data: {
                        sendOtp: email
                    },
                    success: function(data) {
                        // alert (data) ;
                        if (data.trim() == '0') {
                            Swal.fire({
                                customClass: {
                                    confirmButton: 'btn btn-danger',
                                    cancelButton: 'btn btn-danger'
                                },
                                buttonsStyling: false,
                                icon: 'error',
                                title: 'Oops...',
                                text: 'Invalid Email',
                            })
                        } else if (data.trim() == '00') {
                            Swal.fire({
                                customClass: {
                                    confirmButton: 'btn btn-danger',
                                    cancelButton: 'btn btn-danger'
                                },
                                buttonsStyling: false,
                                icon: 'error',
                                title: 'Oops...',
                                text: 'No account found with the given email',
                            })
                        } else if (data.trim() == '1') {
                            Swal.fire({
                                customClass: {
                                    confirmButton: 'btn btn-success',
                                    cancelButton: 'btn btn-danger'
                                },
                                buttonsStyling: false,
                                icon: 'success',
                                text: 'OTP has been sent to your email ' + data,
                            })
                            // extra_variable = data;
                            $("#forgotPassBlock").hide();
                            $("#verifyOtpBlock").fadeIn(500);
                        }
                        $("#otp").attr('disabled', false);
                        $("#otp").html("Send OTP");
                    },
                    error: function() {
                        Swal.fire({
                            customClass: {
                                confirmButton: 'btn btn-danger',
                                cancelButton: 'btn btn-danger'
                            },
                            buttonsStyling: false,
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Error',
                        })
                        $("#otp").attr('disabled', false);
                        $("#otp").html("Send OTP");
                    }
                })
            })



            $("#votp").click(function() {

                $("#votp").attr('disabled', true);
                $("#votp").html("Verifying..");

                var otp = $("#totp").val();
                // var email = extra_variable;

                $.ajax({
                    url: "admin_login_helper",
                    method: "post",
                    data: {
                        validateOtp: otp,
                    },
                    success: function(data) {
                        // alert (data) ;
                        if (data == '0') {
                            Swal.fire({
                                customClass: {
                                    confirmButton: 'btn btn-danger',
                                    cancelButton: 'btn btn-danger'
                                },
                                buttonsStyling: false,
                                icon: 'error',
                                title: 'Oops...',
                                text: 'Invalid OTP',
                            })
                        } else {
                            Swal.fire({
                                customClass: {
                                    confirmButton: 'btn btn-success',
                                    cancelButton: 'btn btn-danger'
                                },
                                buttonsStyling: false,
                                icon: 'success',
                                text: 'OTP verified and you will be redirected to your dashboard soon.',
                            })
                        }
                        $("#votp").attr('disabled', false);
                        $("#votp").html("Verify OTP");
                        window.location.href = "admin_dashboard";
                    },
                    error: function() {
                        Swal.fire({
                            customClass: {
                                confirmButton: 'btn btn-danger',
                                cancelButton: 'btn btn-danger'
                            },
                            buttonsStyling: false,
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Error',
                        })
                        $(this).attr('disabled', false);
                        $(this).html("Send OTP");
                    }
                })
            })




        })
    </script>

</body>



</html>