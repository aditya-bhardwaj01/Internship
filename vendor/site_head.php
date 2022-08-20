<?php
$show_account_creation_flag = false ;
if (isset($_GET['status'])) {
    $status = urldecode(base64_decode($_GET['status']));
    if ($status == 'success') {
        $show_account_creation_flag = true ;
    }
}
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <title>1Jammu</title>

    <meta name="keywords" content="Marketplace ecommerce responsive HTML5 Template" />
    <meta name="description" content="Wolmart is powerful marketplace &amp; ecommerce responsive Html5 Template.">
    <meta name="author" content="D-THEMES">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="../assets/images/icons/favicon.png">

    <!-- WebFont.js -->
    <script>
        WebFontConfig = {
            google: {
                families: ['Poppins:400,500,600,700']
            }
        };
        (function(d) {
            var wf = d.createElement('script'),
                s = d.scripts[0];
            wf.src = '../assets/js/webfont.js';
            wf.async = true;
            s.parentNode.insertBefore(wf, s);
        })(document);
    </script>

    <link rel="preload" href="../assets/vendor/fontawesome-free/webfonts/fa-regular-400.woff2" as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" href="../assets/vendor/fontawesome-free/webfonts/fa-solid-900.woff2" as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" href="../assets/vendor/fontawesome-free/webfonts/fa-brands-400.woff2" as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" href="../assets/fonts/wolmart87d5.woff?png09e" as="font" type="font/woff" crossorigin="anonymous">

    <!-- Vendor CSS -->
    <link rel="stylesheet" type="text/css" href="../assets/vendor/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/vendor/animate/animate.min.css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" type="text/css" href="../assets/vendor/magnific-popup/magnific-popup.min.css">
    <link rel="stylesheet" href="../assets/vendor/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/vendor/photoswipe/photoswipe.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/vendor/photoswipe/default-skin/default-skin.min.css">
    <!-- Swiper's CSS -->
    <!-- Default CSS -->
    <link rel="stylesheet" type="text/css" href="../assets/css/style.min.css">
    <link rel="stylesheet" href="../assets/plugins/sweet-alert2/sweetalert2.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script>
        function login(th) {
            var email = $("#loginEmail").val();
            var password = $("#loginPassword").val();

            $.ajax({
                url: "login_helper",
                method: "POST",
                data: {
                    loginUser: email,
                    password: password
                },
                beforeSend: function() {
                    $(th).html("Signing...");
                },
                success: function(data) {
                    $(th).html("Sign In");
                    $("#loginPassword").val("");
                    if (data.trim() == '1') {
                        location.reload();
                    } else {
                        $("#loginFailureMsg").html(data);
                    }
                }
            })
        }


        function isEmail(email) {
            var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            return regex.test(email);
        }

        function signup(th) {
            $("#loginEmail").val("");
            $("#loginPassword").val("");

            var email = $("#emailID").val();
            var password = $("#passwordNew").val();
            var passwordConfirm = $("#passwordConfirm").val();
            var username = $("#username").val();

            $("#sign-in").animate({
                scrollTop: 0
            }, "slow");

            $("#passwordNew").val("");

            if (username.trim().length < 3) {
                $("#signupFailureMsg").html("Name is too short");
                return;
            }

            if (email.length == 0) {
                $("#signupFailureMsg").html("Email is mandatory");
                return;
            }
            
            if (!isEmail(email)) {
                $("#signupFailureMsg").html("Invalid Email");
                return;
            }


            if (password.length < 5) {
                $("#signupFailureMsg").html("Password is too short");
                return;
            }


            if (password != passwordConfirm) {
                $("#signupFailureMsg").html("Password not matched");
                return;
            }

            if (!$("#agree").is(':checked')) {
                $("#signupFailureMsg").html("Agree to our privacy policy.");
                return;
            }

            $.ajax({
                url: "login_helper",
                method: "POST",
                data: {
                    signup: email,
                    password: password,
                    username: username,
                },
                beforeSend: function() {
                    $(th).html("Signing up...");
                },
                success: function(data) {
                    $(th).html("SignUp");
                    $("#passwordNew").val("");
                    if (data.trim() == '1') {
                        $("#sign-up").html('<div class="row">' +
                            '<div class="col-sm-12 text-center text-danger p-5 m-5 mb-5" id="signupFailureMsg" style="color: red;">' +
                            '</div>' +
                            '</div>' +
                            '<div class="form-group">' +
                            '<label>Enter OTP</label>' +
                            '<input type="number" class="form-control" name="username" id="otp" required>' +
                            '</div>' +
                            '<a id="verifyBtn" onclick="verify(this)" class="btn btn-primary">Verify</a>');
                    } else {
                        $("#signupFailureMsg").html(data);
                    }
                }
            })
        }

        function verify(th) {
            var otp = $("#otp").val() ;
            $("#verifyBtn").html("Verifying...") ;
            $.ajax({
                url: 'login_helper',
                method: "POST",
                data: {
                    verifyEmail: otp,
                },
                success: function(data) {
                    $("#verifyBtn").html("Verify") ;
                    if (data.trim() == '1') {
                        window.location.replace("<?php echo $_SERVER['PHP_SELF'] . "?status=" . urlencode(base64_encode("success")) ?>") ;
                    } else {
                        $("#signupFailureMsg").html(data);
                    }
                }
            })
        }

        $(document).ready(function() {
            var doc = '<?php echo $show_account_creation_flag ; ?>' ;
            if (doc == '1') {
                Swal.fire("Account Created", '', "success") ;
            }
        })
    </script>
</head>