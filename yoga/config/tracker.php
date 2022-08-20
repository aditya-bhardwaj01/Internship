<?php

if (!isset($_SESSION))
    session_start();

require_once "connection.php";

if (isset($_POST['trackVisitor'])) {
    // echo "call" ;

    // print_r($_POST) ;

    $lat = realEscape($_POST['trackVisitor']);
    $lng = realEscape($_POST['longitude']);
    $browser_info = $_SERVER['HTTP_USER_AGENT'];
    $ip_address = getenv("REMOTE_ADDR");

    $level = "GUEST";
    $vid = NULL;

    if (isset($_SESSION['user_id'])) {
        $vid = $_SESSION['user_id'];
        $level = "USER";
    } else if (isset($_SESSION['vendor_id'])) {
        $vid = $_SESSION['vendor_id'];
        $level = "VENDOR";

        if (isset($_SESSION['admin_id'])) {
            $level = "ADMIN";
        }
    }

    $city = "";
    $country = "";
    $pincode = "";

    $device = realEscape($_POST['device']);

    $url = $this_site_url . realEscape($_POST['url']);

    $curr_url = explode(".", realEscape($_POST['url']))[0];

    // echo $curr_url ;
    // die ;


    $cipher = "AES-128-CTR";
    $vi = "1234565432654326";
    $encryption_key = "$&*@31241(%@$*#52432@^&@%*HSKJAHSG T@^& #%(&3826483c VYDUhUIQ GDGWY&$@^*&(#@&*(#^(*^@)#^(@^@(#@U3T2755243692877635276487&#^*&%@^%#&&@^$*&#^*$(rew^#^&$543#&%$(#%32#*%654654@(#@)$)#!(%#!*&#!^%#2432KJGYUT^T@T^&@RRE@Y*@^$@*&$%@^&R&^ #TEX^TD#TFTXR@ETSFTXEE#^C%&I!^X(E*#YIRVUDG#I&XR%#T^&E@XER*^%R@*EU@*SVHE&@&^EX^V@R%@XE@I&EL^XT@^*&E%X@E^&@&^EWO*Q!&!$*@(!)$#)!%(43716483174987159382@*C*&*@E^@&*R@^V%CLVSHAKDHKJWV@&V%$@^&C$@^&!(*^X(!^*V OYVYO~6732452365436254716352`87";

    if ($level == "GUEST") {
        if (isset($_COOKIE['visitor_tracker_for_ccbul_' . $curr_url])) {
            $track_id = realEscape($_COOKIE['visitor_tracker_for_ccbul_' . $curr_url]);
            $data = openssl_decrypt($track_id, $cipher, $encryption_key, 0, $vi);
            // echo $data ;

            $qry = "UPDATE visitor_tracker set visit_count = visit_count+1, last_visited = '$curr_date', ip_address = '$ip_address', latitude = '$lat', longitude = '$lng', browser_and_os = '$browser_info', device = '$device' WHERE id = '$data' ";

            if (!mysqli_query($conn, $qry)) {
                errlog(mysqli_error($conn), $qry);
            }
        } else {


            $qry = "INSERT INTO `visitor_tracker`(`site_id`, `vendor_id`, `vendor_level`, `visit_count`, `url`, `ip_address`, `device`, `longitude`, `latitude`, `city`, `country`, `pincode`, `browser_and_os`, `last_visited`, `created_date`) VALUES ('$this_site_id', '$vid', '$level', '1', '$url', '$ip_address', '$device', '$lng', '$lat', '$city', '$country', '$pincode', '$browser_info', '$curr_date', '$curr_date')";

            if (mysqli_query($conn, $qry)) {
                $data = mysqli_insert_id($conn);
                $data = openssl_encrypt($data, $cipher, $encryption_key, 0, $vi);
                setcookie("visitor_tracker_for_ccbul_" . $curr_url, $data, time() + 28 * 24 * 60 * 60, '/');
                // echo "1" ;
            }
        }
    } else {
        $qry = "SELECT * FROM visitor_tracker WHERE vendor_id = '$vid' AND vendor_level = '$level' AND url = '$url' ";
        $res = mysqli_query($conn, $qry);
        if ($res) {
            $data = mysqli_fetch_assoc($res);
            if (isset($data['id'])) {
                $qry = "UPDATE visitor_tracker SET visit_count = visit_count + 1,last_visited = '$curr_date', ip_address = '$ip_address', latitude = '$lat', longitude = '$lng', browser_and_os = '$browser_info', device = '$device' WHERE vendor_id = '$vid' AND vendor_level = '$level' AND site_id = '$this_site_id' AND id = '".$data['id']."' ";
                if (!mysqli_query($conn, $qry)) {
                    errlog(mysqli_error($conn), $qry);
                    // echo 0;
                }
                // echo 1;
            } else {
                $qry = "INSERT INTO `visitor_tracker`(`site_id`, `vendor_id`, `vendor_level`, `visit_count`, `url`, `ip_address`, `device`, `longitude`, `latitude`, `city`, `country`, `pincode`, `browser_and_os`, `last_visited`, `created_date`) VALUES ('$this_site_id', '$vid', '$level', '1', '$url', '$ip_address', '$device', '$lng', '$lat', '$city', '$country', '$pincode', '$browser_info', '$curr_date', '$curr_date')";
                if (!mysqli_query($conn, $qry)) {
                    errlog(mysqli_error($conn), $qry);
                    // echo 0;
                }
                // echo "1" ;
            }
        } else {
            errlog(mysqli_error($conn), $qry);
        }
    }
} else {
?>
    <script src="../assets/js/jquery.min.js"></script>
    <script>
        $(document).ready(function() {

            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(success, error);
            }

            function success(data) {
                var lat = data.coords.latitude;
                var log = data.coords.longitude;

                var url = '<?php echo $_SERVER['PHP_SELF'] ?>';
                var device = "PC";
                if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
                    device = "MOBILE";
                }

                $.ajax({
                    url: "<?php echo $this_site_url . "/config/tracker" ?>",
                    method: "POST",
                    data: {
                        trackVisitor: lat,
                        longitude: log,
                        url: url,
                        device: device,
                    },
                    success: function(response) {
                        // console.log(response);
                    },
                    error: function() {
                        console.log("error");
                    }
                })
            }

            function error(data) {
                console.log(data.message);
            }
        })
    </script>
<?php
}
