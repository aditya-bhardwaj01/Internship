<?php
session_start();

include_once '../sociallogin/twitter/autoloader.php';
require_once("../config/connection.php");
require_once  "../config/generalMailer.php";
require_once('../sociallogin/google/configLogin.php');
require_once('../sociallogin/linkedin/main_config.php');
require_once "../sociallogin/facebook/config.php" ;

$data = ['email'];
$facebook_login_url = $handler->getLoginUrl(FB_CALLBACK_URL, $data);
$_SESSION['CALLING_FROM'] = explode('.', $_SERVER['PHP_SELF'])[0];


unset($_SESSION['registration_type']);

// echo urldecode(base64_decode($_GET['s']));

$socialFault = 0;
if (isset($_GET['status'])) {
    if ($_GET['status'] == 'missing') {
        $socialFault = 1;
    }
}

if (isset($_GET['st'])) {
    if (urldecode(base64_decode($_GET['st'])) == 'missing') {
        $socialFault = 1;
    }
}

$show_logout_msg = false;
if (isset($_GET['status'])) {
    $val = urldecode(base64_decode($_GET['status']));
    if ($val == 'logout') {
        $show_logout_msg = 1;
    }
}

if (isset($_GET['s'])) {
    if (urldecode(base64_decode($_GET['s'])) == 'inactivity')
        $show_logout_msg = 2;

    if (trim(urldecode(base64_decode($_GET['s']))) == 'already_registered')
        $show_logout_msg = 3;

    if (trim(urldecode(base64_decode($_GET['s']))) == 'account_created')
        $show_logout_msg = 4;
}


if (isset($_GET['aff_code'])) {
    $aff_code = realEscape(urldecode(base64_decode($_GET['aff_code'])));

    $qry = "SELECT * FROM vendor WHERE status = 0 AND verified = 0 AND affiliate_code = '$aff_code' ";
    $res = mysqli_query($conn, $qry);
    if (!$res) {
        errlog(mysqli_error($conn), $qry);
    }
    $res = mysqli_fetch_assoc($res);

    if (isset($res['id'])) {
        $qry = "UPDATE vendor set status = 1,verified = 1 where affiliate_code = '$aff_code'";
        $res = mysqli_query($conn, $qry);
        if (!$res) {
            errlog(mysqli_error($conn), $qry);
        } else {
            // success
        }
    } else {
        // failure
    }
}


$show_activation_msg = 0;
if (isset($_GET['a'])) {
    $aff_code = realEscape(urldecode(base64_decode($_GET['a'])));

    $qry = "SELECT * FROM vendor WHERE status = 0 AND verified = 0 AND affiliate_code = '$aff_code' ";
    $res = mysqli_query($conn, $qry);
    if (!$res) {
        errlog(mysqli_error($conn), $qry);
    }
    $res = mysqli_fetch_assoc($res);

    if (isset($res['id'])) {

        $str = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $str .= '0123456789';
        $str .= 'abcdefghijklmnopqrstuvwxyz';

        $password = '';
        for ($i = 0; $i < 10; $i++) {
            $password .= $str[rand(0, strlen($str) - 1)];
        }

        $body = 'Your password to login into your account is <p style="font-size: 2rem;"> ' . $password . '</p>';
        $enc_pass = password_hash($password, PASSWORD_DEFAULT);

        $qry = "UPDATE vendor set status = 1,verified = 1, password = '" . realEscape($enc_pass) . "' where affiliate_code = '$aff_code'";
        $res = mysqli_query($conn, $qry);
        if (!$res) {
            errlog(mysqli_error($conn), $qry);
        } else {
            $qry = "SELECT * FROM vendor WHERE affiliate_code = '$aff_code' ";
            $res = mysqli_query($conn, $qry);
            if (!$res) {
                errlog(mysqli_error($conn), $qry);
            }
            $res = mysqli_fetch_assoc($res);
            if (isset($res['id'])) {
                $mail_id = realEscape($res['email']);
                if (sendMailTo($mail_id, "Account Activated", $body)) {
                    $show_activation_msg = 1;
                }
            } else {
                $show_activation_msg = -1;
            }
        }
    } else {
        $show_activation_msg = -1;
    }
}


if (isset($_COOKIE['rememberForIdealVillageVendor'])  &&  isset($_COOKIE['verificationFlagVendor1'])  &&  isset($_COOKIE['verificationFlagVendor2'])) {
    $code = realEscape($_COOKIE['rememberForIdealVillageVendor']);
    $qry = "SELECT * from vendor where verify_code = '$code' ";
    $res = mysqli_query($conn, $qry);
    if ($res) {
        $r = mysqli_fetch_all($res, MYSQLI_ASSOC);
        foreach ($r as $res) {
            if (password_verify($res['email'], realEscape($_COOKIE['verificationFlagVendor2']))  &&  password_verify($res['password'], realEscape($_COOKIE['verificationFlagVendor1']))) {
                // $verify_code = password_hash($res['id'], PASSWORD_DEFAULT) ;
                setcookie('rememberForIdealVillageVendor', $code, time() + 60 * 60 * 24 * 7, '/');
                setcookie('verificationFlagVendor1', password_hash($res['password'], PASSWORD_DEFAULT), time() + 60 * 60 * 24 * 7, '/');
                setcookie('verificationFlagVendor2', password_hash($res['email'], PASSWORD_DEFAULT), time() + 60 * 60 * 24 * 7, '/');
                $_SESSION['vendor_id'] = $res['id'];
                $_SESSION['verify_code'] = $res['verify_code'];
                header('location: products-vendor');
            }
        }
    }
}




$response = '';

if (isset($_SESSION['vendor_id'])) {
    header('location: products-vendor');
}

if (isset($_POST['submit'])) {
    $email = realEscape($_POST['email']);
    $password = realEscape($_POST['password']);

    $qry = "SELECT * from vendor where email = '$email' AND vendor_type <> 500 ";
    $res = mysqli_query($conn, $qry);
    if ($res) {
        $res = mysqli_fetch_assoc($res);
        if (isset($res['id'])) {
            if (password_verify($password, $res['password'])) {
                $verify_code = password_hash($res['id'], PASSWORD_DEFAULT);

                if (isset($_POST['rememberMe'])) {
                    setcookie('rememberForIdealVillageVendor', $verify_code, time() + 60 * 60 * 24 * 7, '/');
                    setcookie('verificationFlagVendor1', password_hash($res['password'], PASSWORD_DEFAULT), time() + 60 * 60 * 24 * 7, '/');
                    setcookie('verificationFlagVendor2', password_hash($res['email'], PASSWORD_DEFAULT), time() + 60 * 60 * 24 * 7, '/');
                }

                $qry = "UPDATE vendor set verify_code = '$verify_code' where id = '" . $res['id'] . "' ";
                if (mysqli_query($conn, $qry)) {
                    $_SESSION['vendor_id'] = $res['id'];
                    $_SESSION['verify_code'] = $verify_code;
                    if (setOnlineStatus($res['id'], 'Login')) // type = 1 for admin and 0 (default for vendor)
                        header('location: products-vendor');
                    else
                        die('status error');
                } else {
                    errlog(mysqli_error($conn), $qry);
                }
            } else {
                $response = "Wrong password";
            }
        } else {
            $response = 'Email not registered. ';
        }
    } else {
        $response = 'Email not registered.';
    }
}


$eciTwitterApi = new eciTwitterApi(TWITTER_CONSUMER_KEY, TWITTER_CONSUMER_SECRET);
$twitterPreLoginData = $eciTwitterApi->getDataForLogin(TWITTER_CALLBACK_URL);
if ('fail' == $twitterPreLoginData['status']) : // twitter fail 
?>
    <div>
        <?php echo $twitterPreLoginData['message']; ?>
    </div>
<?php endif;



?>


<!DOCTYPE html>
<html lang="en">

<head>


    <meta charset="utf-8" />
    <title><?php echo $site_name ?></title>
    <link rel="shortcut icon" href="<?php echo $vendor_icon; ?>">

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
                                        <a href="index.html" class="logo logo-vendor">
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

                                    <div class="m-3 text-center text-muted">
                                        <p class="mb-0">Don't have an account ? <a href="auth-register.html" class="text-primary ms-2">Free Register</a></p>
                                    </div>
                                    <hr class="hr-dashed mt-4">
                                    <div class="text-center mt-n5">
                                        <h6 class="card-bg px-3 my-4 d-inline-block">Or Login With</h6>
                                    </div>
                                    <div class="d-flex justify-content-center mb-1">
                                        <a href="<?php echo $facebook_login_url; ?>" class="d-flex justify-content-center align-items-center thumb-sm bg-soft-primary rounded-circle me-2">
                                            <i class="fab fa-facebook align-self-center"></i>
                                        </a>
                                        <a href="https://www.linkedin.com/oauth/v2/authorization?response_type=code&state=987654321&scope=r_liteprofile,r_emailaddress&client_id=<?php echo $linkedin_client_id; ?>&redirect_uri=<?php echo $linkedin_redirect_uri; ?>" class="d-flex justify-content-center align-items-center thumb-sm bg-soft-info rounded-circle me-2">
                                            <i class="fab fa-linkedin align-self-center"></i>
                                        </a>
                                        <a href="<?php echo $google_client->createAuthUrl(); ?>" class="d-flex justify-content-center align-items-center thumb-sm bg-soft-danger me-2 rounded-circle">
                                            <i class="fab fa-google align-self-center"></i>
                                        </a>
                                        <a href="<?php echo $twitterPreLoginData['twitter_login_url']; ?>" class="d-flex justify-content-center align-items-center thumb-sm bg-soft-info rounded-circle">
                                            <i class="fab fa-twitter align-self-center"></i>
                                        </a>
                                    </div>



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
        console.log(show_logout_msg);
        if (show_logout_msg == '1') {
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: 'You have been logged out',
                showConfirmButton: false,
                timer: 5000
            })

        } else if (show_logout_msg == '2') {
            Swal.fire({
                position: 'top-end',
                icon: 'info',
                title: 'You have been logged out due to inactivity',
                showConfirmButton: false,
                timer: 5000
            })

        } else if (show_logout_msg == '3') {

            Swal.fire({
                position: 'top-end',
                icon: 'info',
                title: 'Account already exists with the given credentials',
                showConfirmButton: false,
                timer: 5000
            })
        } else if (show_logout_msg == '4') {
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: 'Account has been created',
                showConfirmButton: false,
                timer: 5000
            })
        }


        var socialFault = '<?php echo $socialFault ?>';
        if (socialFault == '1') {
            Swal.fire({
                customClass: {
                    confirmButton: 'btn btn-success',
                    cancelButton: 'btn btn-danger'
                },
                buttonsStyling: false,
                icon: 'error',
                title: 'Oops...',
                text: "No account found with this social account.",
            })

        }


        var show_activation_msg = '<?php echo $show_activation_msg ?>';
        if (show_activation_msg == '1') {
            Swal.fire({
                customClass: {
                    confirmButton: 'btn btn-success',
                },
                buttonsStyling: false,
                icon: 'success',
                title: 'Account Activated',
                text: "Your account is activated.<br>Please login using your email and password(Sent to your email) .",
            })

        } else
        if (show_activation_msg == '-1') {
            Swal.fire({
                customClass: {
                    confirmButton: 'btn btn-success',
                },
                buttonsStyling: false,
                icon: 'error',
                title: 'Invalid Link',
                text: "Link expired or account is already active.",
            })
        }
        window.history.pushState('', '', '<?php echo explode('.', $_SERVER['PHP_SELF'])[0]; ?>');


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

                $("#otp").attr('disabled', true);
                $("#otp").html("Sending..");


                var email = $("#mailID").val();

                $.ajax({
                    url: "vendor_login_helper.php",
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
                                text: 'OTP has been sent to your email ',
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
                        $(this).attr('disabled', false);
                        $(this).html("Send OTP");
                    }
                })
            })



            $("#votp").click(function() {

                $("#votp").attr('disabled', true);
                $("#votp").html("Verifying..");

                var otp = $("#totp").val();
                // var email = extra_variable;

                $.ajax({
                    url: "vendor_login_helper.php",
                    method: "post",
                    data: {
                        validateOtp: otp,
                        // email: email,
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
                        window.location.href = "products-vendor";
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