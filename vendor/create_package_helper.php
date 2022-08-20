<?php
session_start();
// if (!isset($_SESSION['admin_id'])) {
// 	header('Location: admin_login');
// }
include '../config/connection.php';
if (isset($_POST['uni'])) {
	$pkg_type = realEscape($_POST['pkg_type']);
	$pkg_title = realEscape($_POST['pkg_title']);
	$pkg_price = realEscape($_POST['pkg_price']);
	$no_of_post = realEscape($_POST['no_of_post']);
	if ($no_of_post == '1') {
		$no_of_post = 999999999;
	}

	$response_no = realEscape($_POST['response_no']);
	if ($response_no == '1') {
		$response_no = 999999999;
	}

	$response_access = realEscape($_POST['response_access']);
	if ($response_access == '1') {
		$response_access = 999999999;
	}


	$sdate = realEscape($_POST['sdate']);
	$edate = realEscape($_POST['edate']);
	$pkg_desc = realEscape($_POST['pkg_desc']);
	$site_id = $this_site_id;
	$vendor_id = $_SESSION['vendor_id'];
	// $date = date("Y:m:d");
	$qry = "INSERT INTO `vendor_packages`(`site_id`, `vendor_id`, `package_type`, `package_description`, `package_title`, `package_price`, `start_date`, `end_date`, `no_of_posts`, `response_per_post`, `access_to_response`, `created_date`) VALUES ('$site_id','$vendor_id','$pkg_type','$pkg_desc','$pkg_title','$pkg_price','$sdate','$edate','$no_of_post','$response_no','$response_access','$curr_date')";
	$result = mysqli_query($conn, $qry);
	if ($result) {
		echo "1";
	} else {
		errlog($conn->error, $qry);
	}
}
if (isset($_POST['delete_btn_set'])) {
	// code...
	$del_id = $_POST['deleteid'];
	$query = "delete from vendor_packages where id ='$del_id'";
	$r = mysqli_query($conn, $query);
}
if (isset($_POST['up_uni'])) {
	$id = realEscape($_POST['id']);
	$type = realEscape($_POST['update_type']);
	$title = realEscape($_POST['update_title']);
	$price = realEscape($_POST['update_price']);
	$post_count = realEscape($_POST['update_post']);
	$response_no = realEscape($_POST['update_response']);
	$response_access = realEscape($_POST['update_access']);
	$desc = realEscape($_POST['update_desc']);

	$qry = "SELECT * from vendor_packages where id = '$id' ";
	$res = mysqli_query($conn, $qry);
	if (!$res) {
		errlog(mysqli_error($conn), $qry);
	}
	$data = mysqli_fetch_assoc($res);

	$sdate = realEscape($data['start_date']);
	$edate = realEscape($data['end_date']);

	if (isset($_POST['update_sdate'])  &&  $_POST['update_sdate'] != '')
		$sdate = realEscape($_POST['update_sdate']);
	if (isset($_POST['update_edate'])  &&  $_POST['update_edate'] != '')
		$edate = realEscape($_POST['update_edate']);


	$update = "UPDATE `vendor_packages` SET `package_type`='$type',`package_description`='$desc',`package_title`='$title',`package_price`='$price',
	`start_date`='$sdate',`end_date`='$edate',`no_of_posts`='$post_count',`response_per_post`='$response_no',`access_to_response`='$response_access' WHERE `id`='$id'";
	$result = mysqli_query($conn, $update);
	if ($result) {
		echo "1";
	} else {
		errlog($conn->error, $update);
	}
}
