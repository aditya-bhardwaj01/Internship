<?php
session_start();
if (!isset($_SESSION['vendor_id'])) {
    header("Location: vendor_login.php");
}
include '../config/connection.php';
$vid = $_SESSION['vendor_id'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Unikit - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="../assets/images/favicon.ico">
    <link href="../assets/plugins/datatables/datatable.css" rel="stylesheet" type="text/css" />
    <!-- App css -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/app.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/plugins/sweet-alert2/sweetalert2.min.css" rel="stylesheet" type="text/css">
</head>


<body id="body" class="dark-sidebar">
    <?php include '../menu.php'; ?>
    <?php include '../top-bar.php'; ?>
    <div class="page-wrapper">
        <div class="page-content-tab">
            <div class="container-fluid">
                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <div class="float-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Unikit</a></li>
                                    <li class="breadcrumb-item"><a href="#">Tables</a></li>
                                    <li class="breadcrumb-item active">Datatables</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Vendor Order</h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Vendor Order</h4>
                            </div>
                            <div class="card-body">
                                <table class="table" id="datatable_1">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>Order Id</th>
                                            <th>Item Title</th>
                                            <th>Item Type</th>
                                            <th>Order Amount</th>
                                            <th>Earning</th>
                                            <th>Status</th>
                                            <th data-type="date" data-format="YYYY/DD/MM">TXN Date</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $sql = "SELECT * FROM order_details where site_id = '$this_site_id' ORDER BY order_date desc ";
                                        $result = mysqli_query($conn, $sql);
                                        $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
                                        if (mysqli_num_rows($result) > 0) {
                                            foreach ($row as $data) {
                                                $maketplace_id = $data['marketplace_id'];
                                                $item_id = $data['item_id'];
                                                // echo $maketplace_id;
                                                // echo $item_id;
                                                switch ($maketplace_id) {
                                                    case 5:
                                                        $qry = "SELECT * from marketplace_products where id = '$item_id' and site_id = '$this_site_id' AND (vendor_id = '".$_SESSION['vendor_id']."' OR orp_id = '".$_SESSION['vendor_id']."'   OR sub_user_id = '".$_SESSION['vendor_id']."' ) ";
                                                        $r = mysqli_query($conn, $qry);
                                                        while ($re = mysqli_fetch_assoc($r)) {
                                        ?>
                                                            <tr>
                                                                <td>ORDTXN<?php echo htmlspecialchars($data['order_id']+PAYMENT_INDEX)  ?></td>
                                                                <td><?php echo htmlspecialchars($re['product_title']) ?></td>
                                                                <td>Product</td>
                                                                <td>&#8377;
                                                                    <?php
                                                                    echo htmlspecialchars($data['price']) + htmlspecialchars($data['discount']);
                                                                    ?>
                                                                </td>
                                                                <td>&#8377; <?php echo htmlspecialchars($data['price']) ?></td>
                                                                <td>
                                                                    <div class="float-end">
                                                                        <div class="dropdown d-inline-block">
                                                                            <a class="dropdown-toggle" id="statusBlock<?php echo htmlspecialchars($data['id']) ?>" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                                                <?php switch ($data['status']) {
                                                                                    case '0':
                                                                                ?>
                                                                                        <span class="badge badge-soft-warning">Default</span>
                                                                                    <?php
                                                                                        break;
                                                                                    case '1':
                                                                                    ?>
                                                                                        <span class="badge badge-soft-purple">Placed</span>
                                                                                    <?php
                                                                                        break;
                                                                                    case '2':
                                                                                    ?>
                                                                                        <span class="badge badge-soft-success">Confirmed</span>
                                                                                    <?php
                                                                                        break;
                                                                                    case '3':
                                                                                    ?>
                                                                                        <span class="badge badge-soft-warning ">Dispatched</span>
                                                                                <?php
                                                                                        break;
                                                                                    case '4':
                                                                                ?>
                                                                                        <span class="badge badge-soft-purple ">Out For Delivery</span>
                                                                                <?php
                                                                                        break;
                                                                                    case '5':
                                                                                ?>
                                                                                        <span class="badge badge-soft-success ">Delivered</span>
                                                                                <?php
                                                                                        break;
                                                                                    case '6':
                                                                                ?>
                                                                                        <span class="badge badge-soft-warning ">Completed</span>
                                                                                <?php
                                                                                        break;
                                                                                    case '7':
                                                                                ?>
                                                                                        <span class="badge badge-soft-purple ">Refund Confirmed</span>
                                                                                <?php
                                                                                        break;
                                                                                }
                                                                                ?>
                                                                            </a>
                                                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dLabel1">
                                                                                <a class="dropdown-item selectedStatus" data-statusvalue="0" data-productid="<?php echo $data['id'] ?>" href="#"><span class="badge badge-soft-warning">Default</span></a>
                                                                                <a class="dropdown-item selectedStatus" data-statusvalue="1" data-productid="<?php echo $data['id'] ?>" href="#"><span class="badge badge-soft-purple">Placed</span></a>
                                                                                <a class="dropdown-item selectedStatus" data-statusvalue="2" data-productid="<?php echo $data['id'] ?>" href="#"><span class="badge badge-soft-success">Confirmed</span></a>
                                                                                <a class="dropdown-item selectedStatus" data-statusvalue="3" data-productid="<?php echo $data['id'] ?>" href="#"><span class="badge badge-soft-warning ">Dispatched</span></a>
                                                                                <a class="dropdown-item selectedStatus" data-statusvalue="4" data-productid="<?php echo $data['id'] ?>" href="#"><span class="badge badge-soft-purple">Out For Delivery</span></a>
                                                                                <a class="dropdown-item selectedStatus" data-statusvalue="5" data-productid="<?php echo $data['id'] ?>" href="#"><span class="badge badge-soft-success">Delivered</span></a>
                                                                                <a class="dropdown-item selectedStatus" data-statusvalue="6" data-productid="<?php echo $data['id'] ?>" href="#"><span class="badge badge-soft-warning">Completed</span></a>
                                                                                <a class="dropdown-item selectedStatus" data-statusvalue="7" data-productid="<?php echo $data['id'] ?>" href="#"><span class="badge badge-soft-purple ">Refund Confirmed</span></a>
                                                                            
                                                                            </div>
                                                                        </div>
                                                                    </div>






                                                                </td>
                                                                <td><?php echo htmlspecialchars($data['order_date'])  ?></td>
                                                                <td>
                                                                    <a href="#" class="mr-2"><i class="las la-pen text-secondary font-16"></i></a>
                                                                    <a href="#" class ="delete" data-id = "<?php echo $data['id'] ?>"><i class="las la-trash-alt text-secondary font-16"></i></a>
                                                                </td>
                                                            </tr>
                                                        <?php
                                                        }
                                                        break;
                                                    case 16:
                                                        $qry1 = "SELECT * from marketplace_services where id  = '$item_id' and site_id = '$this_site_id' AND  (vendor_id = '".$_SESSION['vendor_id']."'  OR orp_id = '".$_SESSION['vendor_id']."'  OR sub_user_id = '".$_SESSION['vendor_id']."' ) ";
                                                        $r1 = mysqli_query($conn, $qry1);
                                                        while ($re1 = mysqli_fetch_assoc($r1)) {
                                                        ?>
                                                            <tr>
                                                                <td>ORDTXN<?php echo htmlspecialchars($data['order_id']+PAYMENT_INDEX)  ?></td>
                                                                <td><?php echo htmlspecialchars($re1['service_name']) ?></td>
                                                                <td>Service</td>
                                                                <td>&#8377;
                                                                    <?php
                                                                    echo htmlspecialchars($data['price']) + htmlspecialchars($data['discount']);
                                                                    ?></td>
                                                                <td>&#8377; <?php echo htmlspecialchars($data['price']) ?></td>
                                                                <td>
                                                                <div class="float-end">
                                                                        <div class="dropdown d-inline-block">
                                                                            <a class="dropdown-toggle" id="statusBlock<?php echo htmlspecialchars($data['id']) ?>" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                                                                <?php switch ($data['status']) {
                                                                                    case '0':
                                                                                ?>
                                                                                        <span class="badge badge-soft-warning">Default</span>
                                                                                    <?php
                                                                                        break;
                                                                                    case '1':
                                                                                    ?>
                                                                                        <span class="badge badge-soft-purple">Placed</span>
                                                                                    <?php
                                                                                        break;
                                                                                    case '2':
                                                                                    ?>
                                                                                        <span class="badge badge-soft-success">Confirmed</span>
                                                                                    <?php
                                                                                        break;
                                                                                    case '3':
                                                                                    ?>
                                                                                        <span class="badge badge-soft-warning ">Dispatched</span>
                                                                                <?php
                                                                                        break;
                                                                                    case '4':
                                                                                ?>
                                                                                        <span class="badge badge-soft-purple ">Out For Delivery</span>
                                                                                <?php
                                                                                        break;
                                                                                    case '5':
                                                                                ?>
                                                                                        <span class="badge badge-soft-success ">Delivered</span>
                                                                                <?php
                                                                                        break;
                                                                                    case '6':
                                                                                ?>
                                                                                        <span class="badge badge-soft-warning ">Completed</span>
                                                                                <?php
                                                                                        break;
                                                                                    case '7':
                                                                                ?>
                                                                                        <span class="badge badge-soft-purple ">Refund Confirmed</span>
                                                                                <?php
                                                                                        break;
                                                                                }
                                                                                ?>
                                                                            </a>
                                                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dLabel1">
                                                                                <a class="dropdown-item selectedStatus" data-statusvalue="0" data-productid="<?php echo $data['id'] ?>" href="#"><span class="badge badge-soft-warning">Default</span></a>
                                                                                <a class="dropdown-item selectedStatus" data-statusvalue="1" data-productid="<?php echo $data['id'] ?>" href="#"><span class="badge badge-soft-purple">Placed</span></a>
                                                                                <a class="dropdown-item selectedStatus" data-statusvalue="2" data-productid="<?php echo $data['id'] ?>" href="#"><span class="badge badge-soft-success">Confirmed</span></a>
                                                                                <a class="dropdown-item selectedStatus" data-statusvalue="3" data-productid="<?php echo $data['id'] ?>" href="#"><span class="badge badge-soft-warning ">Dispatched</span></a>
                                                                                <a class="dropdown-item selectedStatus" data-statusvalue="4" data-productid="<?php echo $data['id'] ?>" href="#"><span class="badge badge-soft-purple">Out For Delivery</span></a>
                                                                                <a class="dropdown-item selectedStatus" data-statusvalue="5" data-productid="<?php echo $data['id'] ?>" href="#"><span class="badge badge-soft-success">Delivered</span></a>
                                                                                <a class="dropdown-item selectedStatus" data-statusvalue="6" data-productid="<?php echo $data['id'] ?>" href="#"><span class="badge badge-soft-warning">Completed</span></a>
                                                                                <a class="dropdown-item selectedStatus" data-statusvalue="7" data-productid="<?php echo $data['id'] ?>" href="#"><span class="badge badge-soft-purple ">Refund Confirmed</span></a>
                                                                            
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td><?php echo htmlspecialchars($data['order_date'])  ?></td>
                                                                <td>
                                                                    <a href="#" class="mr-2"><i class="las la-pen text-secondary font-16"></i></a>
                                                                    <a href="#" class ="delete" data-id = "<?php echo $data['id'] ?>"><i class="las la-trash-alt text-secondary font-16"></i></a>
                                                                </td>
                                                            </tr>

                                        <?php
                                                        
                                                        }
                                                        break;
                                                }
                                            }
                                        } else echo "No result found";
                                        ?>

                                    </tbody>
                                </table>
                                <button type="button" class="btn btn-sm btn-de-primary csv">Export CSV</button>
                                <button type="button" class="btn btn-sm btn-de-primary sql">Export SQL</button>
                                <button type="button" class="btn btn-sm btn-de-primary txt">Export TXT</button>
                                <button type="button" class="btn btn-sm btn-de-primary json">Export JSON</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>

        <div class="offcanvas offcanvas-end" tabindex="-1" id="Appearance" aria-labelledby="AppearanceLabel">
            <div class="offcanvas-header border-bottom">
                <h5 class="m-0 font-14" id="AppearanceLabel">Appearance</h5>
                <button type="button" class="btn-close text-reset p-0 m-0 align-self-center" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <h6>Account Settings</h6>
                <div class="p-2 text-start mt-3">
                    <div class="form-check form-switch mb-2">
                        <input class="form-check-input" type="checkbox" id="settings-switch1">
                        <label class="form-check-label" for="settings-switch1">Auto updates</label>
                    </div>
                    <!--end form-switch-->
                    <div class="form-check form-switch mb-2">
                        <input class="form-check-input" type="checkbox" id="settings-switch2" checked>
                        <label class="form-check-label" for="settings-switch2">Location Permission</label>
                    </div>
                    <!--end form-switch-->
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="settings-switch3">
                        <label class="form-check-label" for="settings-switch3">Show offline Contacts</label>
                    </div>
                    <!--end form-switch-->
                </div>
                <!--end /div-->
                <h6>General Settings</h6>
                <div class="p-2 text-start mt-3">
                    <div class="form-check form-switch mb-2">
                        <input class="form-check-input" type="checkbox" id="settings-switch4">
                        <label class="form-check-label" for="settings-switch4">Show me Online</label>
                    </div>
                    <!--end form-switch-->
                    <div class="form-check form-switch mb-2">
                        <input class="form-check-input" type="checkbox" id="settings-switch5" checked>
                        <label class="form-check-label" for="settings-switch5">Status visible to all</label>
                    </div>
                    <!--end form-switch-->
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="settings-switch6">
                        <label class="form-check-label" for="settings-switch6">Notifications Popup</label>
                    </div>
                    <!--end form-switch-->
                </div>
                <!--end /div-->
            </div>
            <!--end offcanvas-body-->
        </div>
        <?php include '../footer.php'; ?>
    </div>

    <!-- Javascript  -->
    <script src="../assets/plugins/datatables/simple-datatables.js"></script>
    <script src="../assets/pages/datatable.init.js"></script>
    <!-- App js -->
    <script src="../assets/js/app.js"></script>
    <script src="../assets/plugins/sweet-alert2/sweetalert2.min.js"></script>
	<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script>
        $(".selectedStatus").click(function() {
			var pid = $(this).data("productid");
			var status = $(this).data("statusvalue");
			// alert(status);
			// alert(pid);
			// return;
			Swal.fire({
				title: "Do you really want to change status of this Order ? ",
				showCancelButton: true,
				confirmButtonText: "Yes",
			}).then((result) => {
				if (result.isConfirmed) {
					$.ajax({
						url: "vendor-order-helper.php",
						method: "post",
						data: {
							updateStatus: status,
							product: pid
						},
						success: function(data) {
							// alert(data) ;
							if (data == 1) {
								Swal.fire('Status updated!', '', 'success');

								var statusUpdate = '';
								switch (status) {
									case 0:
										statusUpdate = '<span class="badge badge-soft-warning">Default</span>';
										break;
									case 1:
										statusUpdate = '<span class="badge badge-soft-purple">Placed</span>'
										break;
									case 2:
										statusUpdate = '<span class="badge badge-soft-success">Confirmed</span>';
										break;
									case 3:
										statusUpdate = '<span class="badge badge-soft-warning ">Dispatched</span>'
										break;
                                    case 4:
										statusUpdate = '<span class="badge badge-soft-purple ">Out For Delivery</span>'
										break;
                                    case 5:
										statusUpdate = '<span class="badge badge-soft-success ">Delivered</span>'
										break;
                                    case 6:
										statusUpdate = '<span class="badge badge-soft-warning ">Completed</span>'
										break;
                                    case 7:
										statusUpdate = '<span class="badge badge-soft-purple ">Refund Confirmed</span>'
										break;
								}

								$("#statusBlock" + pid).html(statusUpdate);
							} else {
								Swal.fire("Can't update status at the moment!" + data, '', 'error')
							}
						},
						error: function(data) {
							Swal.fire("error" + data, '', 'error')
						}
					})
				}
			})
		})

        $(".delete").click(function() {
			var s = 0;
			var id = $(this).data("id");
			console.log(id);
			//return;
			Swal.fire({
				title: 'Are you sure?',
				text: "You won't be able to revert this!",
				icon: 'warning',
				showCancelButton: true,
				confirmButtonColor: '#3085d6',
				cancelButtonColor: '#d33',
				confirmButtonText: 'Yes, delete it!'
			}).then((result) => {
				if (result.isConfirmed) {
					$.ajax({

						url: "vendor-order-helper.php",
						method: "POST",
						data: {
							id: id
						},
						success: function(data) {
							s = 1;
							Swal.fire({
								title: 'Deleted!',
								text: 'Your file has been deleted.',
								icon: 'success',
								confirmButtonText: 'OK'

							}).then(() => {
								location.reload();
							})
						}
					})
				}
			})
		})

    </script>

</body>

</html>