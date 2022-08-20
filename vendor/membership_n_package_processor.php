<?php



require_once '../config/connection.php';



function deduct_from_package($marketplace_id, $deduction_type = 'POST, PROFILE, RESPONSE, ACCESS', $count = 1, $downloadable = false)

{

    $vendor_id = getVendorID();



    global $conn, $curr_date, $this_site_id;



    $total_deduction = $count;



    $package_list = array();



    $qry = "SELECT * FROM purchased_packages WHERE package_type = '$marketplace_id' AND vendor_id = '$vendor_id' AND site_id = $this_site_id AND created_date + INTERVAL `validity` day >= '$curr_date' ";

    if ($downloadable) {

        $qry .= " AND downloadable = 1 ";

    }



    $qry .= "  ORDER BY created_date + INTERVAL `validity` day ASC ";



    $res = mysqli_query($conn, $qry);

    if (!$res) {

        errlog(mysqli_error($conn), $qry);

    }



    $data = mysqli_fetch_all($res, MYSQLI_ASSOC);





    foreach ($data as $datum) {

        $prev_counter = $count;

        $qry = "UPDATE purchased_packages set ";

        switch (strtoupper($deduction_type)) {

            case 'POST':

                if ($datum['no_of_posts'] < $count) {

                    $qry .= " no_of_posts = 0 ";

                    $count -= $datum['no_of_posts'];

                } else {

                    $x = $datum['no_of_posts'] - $count;

                    $count = 0;

                    $qry .= " no_of_posts = " . $x;

                }

                break;



            case 'PROFILE':

                if ($datum['no_of_profile'] < $count) {

                    $qry .= " no_of_profile = 0 ";

                    $count -= $datum['no_of_profile'];

                } else {

                    $x = $datum['no_of_profile'] - $count;

                    $count = 0;

                    $qry .= " no_of_profile = " . $x;

                }

                break;



            case 'RESPONSE':

                if ($datum['response_per_post'] < $count) {

                    $qry .= " response_per_post = 0 ";

                    $count -= $datum['response_per_post'];

                } else {

                    $x = $datum['response_per_post'] - $count;

                    $count = 0;

                    $qry .= " response_per_post = " . $x;

                }

                break;



            case 'ACCESS':

                if ($datum['access_to_response'] < $count) {

                    $qry .= " access_to_response = 0 ";

                    $count -= $datum['access_to_response'];

                } else {

                    $x = $datum['access_to_response'] - $count;

                    $count = 0;

                    $qry .= " access_to_response = " . $x;

                }

                break;



            default:

                return "Invalid Deduction type";

        }



        $qry .= " WHERE id = '" . $datum['id'] . "'";

        if (!mysqli_query($conn, $qry)) {

            errlog(mysqli_error($conn), $qry);

            return false;

        }



        if ($count == 0) {

            $package_list[$datum['id']] = $prev_counter;

            return array("DEDUCTED" => $total_deduction, "PACKAGE_INFO" => $package_list);

        }

        $package_list[$datum['id']] = $prev_counter - $count;

    }



    return array("DEDUCTED" => $total_deduction - $count, "PACKAGE_INFO" => $package_list);

}



function package_finder($marketplace_id, $package_id = '*', $only_downloadable = false)

{

    $vendor_id = getVendorID();

    global $conn, $curr_date, $this_site_id;

    $qry = "SELECT * FROM purchased_packages WHERE package_type = '$marketplace_id' AND vendor_id = '$vendor_id' AND site_id = $this_site_id AND created_date + INTERVAL `validity` day >= '$curr_date' ";



    if ($package_id != '*') {

        $qry .= " AND id = '$package_id' ";

    }



    if ($only_downloadable) {

        $qry .= " AND downloadable = 1 ";

    }



    $res = mysqli_query($conn, $qry);

    if (!$res) {

        errlog(mysqli_error($conn), $qry);

    }



    $data = mysqli_fetch_all($res, MYSQLI_ASSOC);

    $post = $profile = $response = $access = $downloadable = 0;



    foreach ($data as $datum) {

        if ($datum['no_of_posts'] != '')

            $post += $datum['no_of_posts'];

        if ($datum['no_of_profile'] != '')

            $profile += $datum['no_of_profile'];

        if ($datum['response_per_post'] != '')

            $response += $datum['response_per_post'];

        if ($datum['access_to_response'] != '')

            $access += $datum['access_to_response'];



        if ($downloadable == 0) {

            $downloadable = $datum['downloadable'];

        }

    }



    return (array("POST" => $post, "PROFILE" => $profile, "RESPONSE" => $response, "ACCESS" => $access, "DOWNLOADABLE" => $downloadable));

}





function membership_finder($membership_id = '*', $membership_code = NULL, $only_downloadable = false)

{

    $vendor_id = getVendorID();

    global $conn, $curr_date, $this_site_id;

    $qry = "SELECT * FROM purchased_memberships WHERE vendor_id = '$vendor_id' AND site_id = $this_site_id AND created_date + INTERVAL `validity` day >= '$curr_date' ";

    if ($only_downloadable) {

        $qry .= " AND downloadable = 1";

    }



    if ($membership_id != '*') {

        $qry .= " AND id = '" . realEscape($membership_id) . "' ";

    }



    if ($membership_code) {

        $qry .= " AND membership_code = '" . realEscape($membership_code) . "' ";

    }



    $res = mysqli_query($conn, $qry);

    if (!$res) {

        errlog(mysqli_error($conn), $qry);

    }



    $data = mysqli_fetch_all($res, MYSQLI_ASSOC);



    $product = $service = $job = $event = $charity = $media = $downloadable = $verified = $featured = $acc_talent = $acc_product = $acc_business_opp = $acc_gigs = 0;



    foreach ($data as $datum) {

        if ($datum['product_post'] != '') {

            $product += (int)($datum['product_post']);

        }



        if ($datum['service_post'] != '') {

            $service += (int)($datum['service_post']);

        }



        if ($datum['job_post'] != '') {

            $job += (int)($datum['job_post']);

        }



        if ($datum['event_post'] != '') {

            $event += (int)($datum['event_post']);

        }



        if ($datum['charity_post'] != '') {

            $charity += (int)($datum['charity_post']);

        }



        if ($datum['media_post'] != '') {

            $media += (int)($datum['media_post']);

        }



        if ($datum['acc_to_mt']  == '1') {

            $acc_talent = true;

        }



        if ($datum['acc_to_mp']  == '1') {

            $acc_product = true;

        }



        if ($datum['acc_to_mbo']  == '1') {

            $acc_business_opp = true;

        }



        if ($datum['acc_to_mg']  == '1') {

            $acc_gigs = true;

        }



        if ($datum['account_verify']  == '1') {

            $verified = true;

        }



        if ($datum['featured_profile']  == '1') {

            $featured = true;

        }



        if ($datum['downloadable']  == '1') {

            $downloadable = true;

        }

    }





    return array("POST" => array("PRODUCT" => $product, "SERVICE" => $service, "JOB" => $job, "EVENT" => $event, "CHARITY" => $charity, "MEDIA" => $media), "ACCESS" => array("TALENT" => $acc_talent, "PRODUCT" => $acc_product, "BUSINESS_OPPORTUNITY" => $acc_business_opp, "GIGS" => $acc_gigs), "VERIFIED" => $verified, "FEATURED" => $featured, "DOWNLOADABLE" => $downloadable );

}





function deduct_from_membership($marketplace_id, $count = 1, $membership_id = '*', $membership_code = NULL, $only_downloadable = false)

{

    global $conn, $curr_date, $this_site_id;

    $vendor_id = getVendorID();

    if ($vendor_id == -1) {

        return 0;

    }



    $total_deduction = $count;

    $qry = "SELECT * FROM purchased_memberships WHERE vendor_id = '$vendor_id' AND site_id = $this_site_id AND created_date + INTERVAL `validity` day >= '$curr_date' ";

    if ($only_downloadable) {

        $qry .= " AND downloadable = 1 ";

    }



    if ($membership_id != '*') {

        $qry .= " AND id = '" . realEscape($marketplace_id) . "' ";

    }



    if ($membership_code) {

        $qry .= " AND membership_code = '" . realEscape($membership_code) . "' ";

    }



    $qry .= "  ORDER BY created_date + INTERVAL `validity` day ASC  ";



    $res = mysqli_query($conn, $qry);

    if (!$res) {

        errlog(mysqli_error($conn), $qry);

    }



    $data = mysqli_fetch_all($res, MYSQLI_ASSOC);

    if (count($data) == 0) {

        return 0;

    }

    $membership_id_summary = array();

    

    foreach ($data as $datum) {



        if ($datum['job_post'] == '') {

            $datum['job_post'] = 0;

        }

        if ($datum['media_post'] == '') {

            $datum['media_post'] = 0;

        }

        if ($datum['product_post'] == '') {

            $datum['product_post'] = 0;

        }

        if ($datum['service_post'] == '') {

            $datum['service_post'] = 0;

        }

        if ($datum['charity_post'] == '') {

            $datum['charity_post'] = 0;

        }

        if ($datum['event_post'] == '') {

            $datum['event_post'] = 0;

        }



        $qry = "UPDATE purchased_memberships set ";

        $prev_count = $count ;



        switch ($marketplace_id) {

            case 1:

                if ($datum['job_post'] < $count) {

                    $qry .= " job_post = 0 ";

                    $count -= $datum['job_post'];

                } else {

                    $x = $datum['job_post'] - $count;

                    $qry .= " job_post = $x ";

                    $count = 0;

                }



                break;



            case 5:

            case 6:

            case 7:

                if ($datum['product_post'] < $count) {

                    $qry .= " product_post = 0 ";

                    $count -= $datum['product_post'];

                } else {

                    $x = $datum['product_post'] - $count;

                    $qry .= " product_post = $x ";

                    $count = 0;

                }

                break;



            case 15:

                if ($datum['event_post'] < $count) {

                    $qry .= " event_post = 0 ";

                    $count -= $datum['event_post'];

                } else {

                    $x = $datum['event_post'] - $count;

                    $qry .= " event_post = $x ";

                    $count = 0;

                }

                break;



            case 16:

                if ($datum['service_post'] < $count) {

                    $qry .= " service_post = 0 ";

                    $count -= $datum['service_post'];

                } else {

                    $x = $datum['service_post'] - $count;

                    $qry .= " service_post = $x ";

                    $count = 0;

                }

                break;



            case 17:

                if ($datum['charity_post'] < $count) {

                    $qry .= " charity_post = 0 ";

                    $count -= $datum['charity_post'];

                } else {

                    $x = $datum['charity_post'] - $count;

                    $qry .= " charity_post = $x ";

                    $count = 0;

                }

                break;



            case 21:

                if ($datum['media_post'] < $count) {

                    $qry .= " media_post = 0 ";

                    $count -= $datum['media_post'];

                } else {

                    $x = $datum['media_post'] - $count;

                    $qry .= " media_post = $x ";

                    $count = 0;

                }

                break;

        }



        if ($qry == 'UPDATE purchased_memberships set ') {

            continue;

        }



        $qry .= " WHERE id = '".$datum['id']."' " ;

        if (!mysqli_query($conn, $qry)) {

            errlog(mysqli_error($conn), $qry) ;

            continue;

        }



        $membership_id_summary[$datum['id']] = $prev_count - $count ;



        if ($count == 0) {

            return array("DEDUCTED" => $total_deduction, "MEMBERSHIP_INFO" => $membership_id_summary) ;

        }

    }



    return array("DEDUCTED" => $total_deduction- $count, "MEMBERSHIP_INFO" => $membership_id_summary) ;

}