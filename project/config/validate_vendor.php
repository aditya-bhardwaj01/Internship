<?php

    $verify_code = realEscape($_SESSION['verify_code']);

    $uid = realEscape($_SESSION['vendor_id']);

    $qry = "SELECT * from vendor where id = '$uid' and binary verify_code = '$verify_code' ";

    $res = mysqli_query($conn, $qry);

    if ($res) {

        $res = mysqli_fetch_assoc($res);

        if (!isset($res['id'])) {

            unset($_SESSION['vendor_id']);

            echo '';

            die('Error U04<br><a href="vendor_login.php">Login again</a>');

        } else {

            $uid = realEscape($_SESSION['vendor_id']);

            $status = 'Login';



            if (!setOnlineStatus($uid, $status)) {

                die('error ON4');

            }

        }

    } else {

        unset($_SESSION['vendor_id']);

        echo '';

        die('Info. Mismatch<br><a href="vendor_login.php">Login again</a>');

    }
