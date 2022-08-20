<?php

define('PAYMENT_INDEX', 999999) ;

date_default_timezone_set('Asia/Kolkata');

$this_site_id = 2;
$curr_date = date('Y-m-d H:i:s');



$this_site_url = 'http://localhost/ideal_village';
$site_name = 'Ideal Village';
$vendor_icon = '../assets/images/favicon.ico';
$admin_icon = '../assets/images/favicon.ico';
$web_desc = '';

$avatar = 'https://res.cloudinary.com/dza7mzhl1/image/upload/v1643883798/emp2nuha6lpromvurltb.png' ;


$dbname = 'ideal_village';
$password = '';
$username = 'root';
$conn = mysqli_connect('localhost', $username, $password, $dbname);

if (!$conn) {
    echo "Connection Error.";
    die;
}


function realEscape($val)  /// realEscape($-post['input wala name']) 4-ge]    $x = realescape($x) ;
{
    global $conn;
    return mysqli_escape_string($conn, $val);
}



function agoTime($time)    // time  = 2022:03:02 13:00:00
{
    $time = strtotime($time);
    $time_difference = time() - $time;

    if ($time_difference < 1) {
        return 'less than 1 second ago';
    }
    $condition = array(
        12 * 30 * 24 * 60 * 60  =>  'year',
        30 * 24 * 60 * 60       =>  'month',
        24 * 60 * 60            =>  'day',
        60 * 60                 =>  'hour',
        60                      =>  'minute',
        1                       =>  'second'
    );

    foreach ($condition as $secs => $str) {
        $d = $time_difference / $secs;

        if ($d >= 1) {
            $t = round($d);
            return 'about ' . $t . ' ' . $str . ($t > 1 ? 's' : '') . ' ago';
        }
    }
}

/*

$qry = "seletc name, email_id from vendor" ;
$res = mysqli_query($conn, $qry) ;
if (!$res) {
    errlog(mysqli_error($conn), $qry) ;
}

*/

function errlog($error, $qry)
{
    global $curr_date;

    if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
        $url = "https://";
    else
        $url = "http://";
    $url .= $_SERVER['HTTP_HOST'];
    $url .= $_SERVER['REQUEST_URI'];

    $handle = fopen('error.txt', 'a');
    $txt = $curr_date . " ERROR : [URL:" . $url . "] " . $error . " [SQL:" . $qry . "]\r\n";
    fwrite($handle, $txt);
    fclose($handle);
    echo '<script> location.replace("error.html"); </script>';
}



function setOnlineStatus($vendor_id, $status, $type = 0)
{
    global $conn, $curr_date;
    $table_name = '';
    if ($type == 0) {
        $table_name = 'vendor';
    } else if ($type == 1) {
        $table_name = 'admin';
    }


    $vendor_id = realEscape($vendor_id);
    $status = realEscape($status);
    $curr_date = realEscape($curr_date);
    $qry = "UPDATE $table_name set login_status = '$status', last_online = '$curr_date' where id = '$vendor_id' ";
    if (mysqli_query($conn, $qry)) {
        return true;
    } else {
        errlog(mysqli_error($conn), $qry);
    }
    return false;
}



function encoder($str)
{
    $str = str_replace("'", "'+" . '"' . "'" . '"' . "+'", $str);
    return $str;
}

function decoder($str)
{
    $str = str_replace("'+" . '"' . "'" . '"' . "+'", "'", $str);
    $str = str_replace("<script>", htmlspecialchars("<script>"), $str);
    $str = str_replace("</script>", htmlspecialchars("</script>"), $str);
    return $str;
}

?>