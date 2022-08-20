<?php
session_start();
require_once "../config/connection.php" ;
require_once 'membership_n_package_processor.php';
if (getVendorID() == -1) {
    die;
}


if (isset($_POST['insert'])) {
    $category = realEscape($_POST['category']);
    $industry = realEscape($_POST['industry']);
    $place = realEscape($_POST['place']);
    $job_title = realEscape($_POST['job_title']);
    $openings = realEscape($_POST['openings']);
    $validity = realEscape($_POST['validity']);
    $department = realEscape($_POST['department']);
    $position_level = realEscape($_POST['position_level']);
    $min = realEscape($_POST['min']);
    $max = realEscape($_POST['max']);
    $job_desc = realEscape($_POST['job_desc']);
    $skills = realEscape($_POST['skills']);
    $perks = realEscape($_POST['perks']);

    $data = package_finder(1);
    $mem = membership_finder();
    // print_r($mem) ;
    if ($mem['POST']['JOB'] > 0  ||  $data['POST'] > 0) {
        $sql = "INSERT INTO `marketplace_jobs`( `job_title`, `job_category`, `skills_required`, `job_desc`, `sal_max`, `sal_min`, `num_opening`, `validity`, `department`, `position_lvl`,  `perks`, `site_id`, `vendor_id`, `created_date`, `job_industry`, `work_type`,`status`, verify) VALUES ('$job_title','$category','$skills','$job_desc','$max','$min','$openings','$validity','$department','$position_level','$perks','$this_site_id','" . $_SESSION['vendor_id'] . "','$curr_date','$industry','$place','0', 0)";
        $res = mysqli_query($conn, $sql);

        if ($res) {
            echo "1";
            if ($data['POST'] > 0) {
                deduct_from_package(1, 'POST');
            } else {
                deduct_from_membership(1);
            }
        } else {
            errlog(mysqli_error($conn), $sql);
        }
    } else {
        echo -1;
    }
}
