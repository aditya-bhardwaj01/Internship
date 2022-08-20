<?php
require_once "connection.php";
require_once "cloudinaryConfig.php";
require_once "PHPMailer/src/PHPMailer.php";
require_once "PHPMailer/src/Exception.php";
require_once "PHPMailer/src/SMTP.php";


use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

function sendMessage($receiver_id, $message, $attachment = false, $custom_subject = '')
{
    if (!isset($_SESSION)) {
        return "Start session to use this function";
    }

    global $conn, $this_site_id, $curr_date;

    $qry = "SELECT * from vendor where id = '$receiver_id' ";
    $res = mysqli_query($conn, $qry);
    if (!$res) {
        errlog(mysqli_error($conn), $qry);
    }
    $res = mysqli_fetch_assoc($res);
    $target = "";

    if (isset($res['email'])) {
        $target = $res['email'];
    } else {
        return "Target email not found in vendor table.";
    }

    $sender_id = 0;

    if (isset($_SESSION['vendor_id'])) {
        $sender_id = $_SESSION['vendor_id'];
    } else if (isset($_SESSION['user_id'])) {
        $sender_id = $_SESSION['user_id'];
    } else {
        return "Unable to find sender id.";
    }

    $sender_name = "";
    $qry = "SELECT * from vendor where id = '$sender_id' ";
    $res = mysqli_query($conn, $qry);
    if (!$res) {
        errlog(mysqli_error($conn), $qry);
    }

    $res = mysqli_fetch_assoc($res);
    if (isset($res['name'])) {
        $sender_name = $res['name'];
    } else {
        return "Source Name not found in vendor table.";
    }


    $mail = new PHPMailer();
    $url = "";

    if (isset($attachment['tmp_name'])) {
        $ext = "";
        $name = explode(".", $attachment['name']);
        $ext = $name[count($name) - 1];
        $path = "" . time() . "." . $ext;
        move_uploaded_file($attachment['tmp_name'], $path);
        $url = getURL($path);
        $mail->addAttachment($path);
        // echo $url;
    }

    $qry = "INSERT INTO `messages`(`site_id`, `sender`, `receiver`, `message`, `attachment`, `status`, `created_date`) VALUES ('$this_site_id', '$sender_id', '$receiver_id', '$message', '$url', '0', '$curr_date')";

    if (!mysqli_query($conn, $qry)) {
        errlog(mysqli_error($conn), $qry);
        return "Error";
    }

    $message_id = mysqli_insert_id($conn);

    $subject = "Received a message from " . $sender_name;
    if ($custom_subject != '') {
        $subject = $custom_subject;
    }

    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = "tls";
    $mail->Port = "587";
    $mail->Username = 'phpmailerfortemporaryuse@gmail.com';
    $mail->Password = "vikas1234";
    $mail->isHTML(true);
    $mail->setFrom("vkg360.vikas@gmail.com");
    $mail->addReplyto = "vkg360.vikas@gmail.com";
    $mail->Subject = $subject;
    $mail->Body = $message;
    $mail->addAddress($target);
    if ($mail->send()) {
        if (isset($path))
            unlink($path);
        $qry = "UPDATE messages set status = '1' where id = '$message_id' ";
        if (!mysqli_query($conn, $qry)) {
            errlog(mysqli_error($conn), $qry);
            return false;
        }
        return true;
    } else {
        if (isset($path))
            unlink($path);
        errlog('MAIL ERROR: ', $mail->ErrorInfo);
        return false;
    }
}

if (isset($_POST['sendMail'])) {
    $mail = realEscape($_POST['sendMail']);
    $vid = realEscape($_POST['vendor_id']);

    $attachment = false;
    if (isset($_FILES['attachment'])  &&  $_FILES['attachment']['tmp_name'] != '') {
        $attachment = $_FILES['attachment'];
    }

    $res = sendMessage($vid, $mail, $attachment);
    if ($res) {
        echo 1;
    } else {
        echo $res;
    }
}
