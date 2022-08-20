<?php
session_start();
include "../config/connection.php" ;
include "../config/generalMailer.php" ;

$created_date = $curr_date ;

if (isset($_POST['sendOtp'])) {
    $target = realEscape($_POST['sendOtp']);
    $targetEmail = '';
    if (filter_var($target, FILTER_VALIDATE_EMAIL)) {
        $vendor_id = -1;
        $qry = "SELECT email, id from vendor where (email = '$target' or mobile = '$target') AND vendor_type <> 500 AND site_id = $this_site_id ";
        $rr = mysqli_query($conn, $qry);
        $res = mysqli_fetch_assoc($rr);
        if ($res) {
            $vendor_id = $res['id'];
            $targetEmail = $res['email'];
        }
    } else {
        echo 0;
        die;
    }

    if ($targetEmail == '') { 
        echo '00' ;
    } else {
        $otp = random_int(100000, 999999);
        $qry = "UPDATE vendor set otp = '$otp', otp_create_time = '$created_date' where id = '$vendor_id' ";
        mysqli_query($conn, $qry);

        $subject = "OTP for login.";

        $main_body_text = "login into your account";
            
$body = '<table cellspacing="0" border="0" cellpadding="0" width="100%" bgcolor="#f2f3f8" style=" @import url(https://fonts.googleapis.com/css?family=Rubik:300,400,500,700|Open+Sans:300,400,600,700); font-family: ' . "'Open Sans'" . ', sans-serif; ">
                    <tr>
                        <td>
                            <table style="background-color: #f2f3f8; max-width: 670px; margin: 0 auto" width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td style="height: 80px">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td style="text-align: center">
                                        <a href="" title="logo" target="_blank">
                                            <img width="60" src="'.$site_logo.'" title="logo" alt="logo" />
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="height: 20px">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>
                                        <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0" style=" max-width: 670px; background: #fff; border-radius: 3px; text-align: center; -webkit-box-shadow: 0 6px 18px 0 rgba(0, 0, 0, 0.06); -moz-box-shadow: 0 6px 18px 0 rgba(0, 0, 0, 0.06); box-shadow: 0 6px 18px 0 rgba(0, 0, 0, 0.06); ">
                                            <tr>
                                                <td style="height: 40px">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 0 35px">
                                                    <h1 style="color: #1e1e2d; font-weight: 500; margin: 0; font-size: 32px; font-family: ' . "'Rubik'" . ', sans-serif; "> New One Time Password(OTP) </h1> <span style=" display: inline-block; vertical-align: middle; margin: 29px 0 26px; border-bottom: 1px solid #cecece; width: 100px; "></span>
                                                    <p style="color: #455056; font-size: 15px; line-height: 24px; margin: 0; "> Thank you for choosing '.$site_name.'. Use the following OTP to '.$main_body_text.'. OTP is valid for 5 minutes </p> <a href="javascript:void(0);" style=" background: #20e277; text-decoration: none !important; font-weight: 700; margin-top: 35px; color: #fff; text-transform: uppercase; font-size: 22px; padding: 10px 24px; display: inline-block; border-radius: 50px; ">' . $otp . '</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="height: 40px">&nbsp;</td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="height: 20px">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td style="text-align: center">
                                        <p style=" font-size: 14px; color: rgba(69, 80, 86, 0.7411764705882353); line-height: 18px; margin: 0 0 0; "> &copy; <strong>'.$site_name.'</strong> </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="height: 80px">&nbsp;</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
                </body>';
        
        if (sendMailTo($targetEmail, $subject, $body)) {
            $_SESSION['tmp_email'] = $targetEmail;
            echo '1' ;
        }
    }
} else if (isset($_POST['validateOtp'])) {
    $email = realEscape($_SESSION['tmp_email']);
    $otp = realEscape($_POST['validateOtp']);

    $qry = "SELECT * from vendor where email = '$email' and otp = '$otp' and otp_create_time <= '$created_date + 5' AND vendor_type <> 500 ";
    $rr = mysqli_query($conn, $qry);
    $res = mysqli_fetch_assoc($rr);
    if ($res) {
        echo 1;
        $_SESSION['vendor_id'] = $res['id'];
        $verify_code = password_hash($res['id'], PASSWORD_DEFAULT) ;
        $_SESSION['verify_code'] = $verify_code ;

        $qry = "UPDATE vendor set otp = '-1', verify_code = '$verify_code' where id = '".$res['id']."'  AND vendor_type <> 500  " ;
        if (!mysqli_query($conn, $qry)) {
            errlog(mysqli_error($conn), $qry) ;
        }
    } else {
        echo 0;
    }
} 

?>