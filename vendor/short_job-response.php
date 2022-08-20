<?php
session_start();
include '../config/connection.php';
$id = $_GET['id'];
$status= $_GET['status'];
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
    <link rel="shortcut icon" href="assets/images/favicon.ico">
    <!-- App css -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/app.min.css" rel="stylesheet" type="text/css" />
</head>

<body id="body" class="dark-sidebar">
    <?php include '../menu.php'; ?>
    <?php include '../top-bar.php'; ?>
    <div class="page-wrapper">
        <div class="page-content-tab">
            <div class="container-fluid">
                <?php
                $sql2 = "SELECT * FROM response where item_id = '$id' AND site_id = $this_site_id AND status = '$status'";
                $row2 = $conn->query($sql2);
                if (mysqli_num_rows($row2) > 0) {
                    $count = mysqli_num_rows($row2);
                ?>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h4 class="card-title">Job Response</h4>
                                            <h5 class="card-title">Job Title (<?= $count ?>)</h5>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->
                                </div>
                                <!--end card-header-->
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th>User Name</th>
                                                    <th>Stream</th>
                                                    <th>Expereince</th>
                                                    <th>Skills</th>
                                                    <th>Apply Date</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $data = mysqli_fetch_all($row2, MYSQLI_ASSOC);
                                                foreach ($data as $row) {
                                                    $vid = htmlspecialchars($row['vendor_id']);
                                                    $qry1 = "SELECT * from marketplace_seeker where id='$vid' AND site_id=$this_site_id";
                                                    $res = mysqli_query($conn, $qry1);
                                                    $row1 = mysqli_fetch_assoc($res);
                                                ?>
                                                    <tr>
                                                        <td><img src="<?php echo $row1['photo_url'] ?>" alt="" class="rounded-circle thumb-sm me-1"> <?php echo $row1['name'] ?></td>
                                                        <td><?php echo htmlspecialchars($row1['stream_name']) ?></td>
                                                        <td><?php echo htmlspecialchars($row1['total_exp']) ?> Year</td>
                                                        <td>
                                                            <ul class="list-inline mb-0">
                                                                <?php
                                                                $skill = htmlspecialchars($row1['key_skills']);
                                                                $skill_array = (explode(",", $skill));
                                                                for ($i = 0; $i < count($skill_array); $i++) {
                                                                ?>
                                                                    <li class="list-inline-item align-middle"><span class="badge badge-soft-primary"><?php echo $skill_array[$i]; ?></span></li>
                                                                <?php
                                                                }
                                                                ?>
                                                            </ul>
                                                        </td>
                                                        <td>
                                                            <?php
                                                            echo $row1['id'];
                                                            $time = htmlspecialchars($row['created_date']);
                                                            echo agoTime($time);
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <?php
                                                            switch (strtoupper($row['status'])) {
                                                                case '0':
                                                                    echo '<span class="badge badge-soft-warning">Shortlisted</span>';
                                                                    break;
                                                                case '1':
                                                                    echo '<span class="badge badge-soft-success">Applied</span>';
                                                                    break;
                                                                case '2':
                                                                    echo '<span class="badge badge-soft-pink">Screened</span>';
                                                                    break;
                                                                case '3':
                                                                    echo '<span class="badge badge-soft-purple">Interviewed</span>';
                                                                    break;
                                                                case '4':
                                                                    echo '<span class="badge badge-soft-warning">Hire</span>';
                                                                    break;
                                                                case '5':
                                                                    echo '<span class="badge badge-soft-pink">Not Interested</span>';
                                                                    break;
                                                                case '6':
                                                                    echo '<span class="badge badge-soft-warning">Onboard</span>';
                                                                    break;
                                                            }
                                                            ?>
                                                        </td>
                                                        <td>
                                                        <?php $q1 = "SELECT * from resumes where vendor_id='$vid' and site_id=$this_site_id";
                                                                        $r1 = mysqli_query($conn, $q1);
                                                                        $ro1 = mysqli_fetch_assoc($r1); ?>
                                                            <a href="<?php echo $ro1['url'] ?>"><i class="las la-download text-secondary font-16"></i></a>
                                                            <a href="#" data-id='<?php echo $row1['id'] ?>' data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $row1['id'] ?>"><i class="las la-comment-alt text-secondary font-16"></i></a>
                                                        </td>
                                                    </tr>
                                                <?php
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                        <!--end /table-->
                                    </div>

                                    <?php
                                    $sql2 = "SELECT * FROM response where item_id = '$id' AND site_id = $this_site_id";
                                    $row2 = $conn->query($sql2);
                                    $data = mysqli_fetch_all($row2, MYSQLI_ASSOC);
                                    foreach ($data as $row) {
                                        $vid = htmlspecialchars($row['vendor_id']);
                                        $qry1 = "SELECT * from marketplace_seeker where id='$vid' AND site_id=$this_site_id";
                                        $res = mysqli_query($conn, $qry1);
                                        $row1 = mysqli_fetch_assoc($res);
                                    ?>

                                        <div class="modal fade" id="exampleModal<?php echo $row1['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Send Message</h5>
                                                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <input type="text" id="sid<?php echo $row1['id'] ?>" value="<?php echo $row1['id'] ?>" class="form-control" placeholder="ff" />
                                                        <textarea class="form-control" placeholder="Message content" id="message<?php echo $row1['id'] ?>" cols="50" rows="5"></textarea>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-primary send" data-id="<?php echo $row1['id'] ?>">Send Message</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php
                                    }

                                    ?>












                                    <!--end /tableresponsive-->
                                    <div class="row">
                                        <div class="col-auto">
                                            <nav aria-label="...">
                                                <ul class="pagination pagination-sm mb-0">
                                                    <li class="page-item disabled">
                                                        <a class="page-link" href="#" tabindex="-1">Previous</a>
                                                    </li>
                                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                                    <li class="page-item">
                                                        <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                                                    </li>
                                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                    <li class="page-item">
                                                        <a class="page-link" href="#">Next</a>
                                                    </li>
                                                </ul>
                                                <!--end pagination-->
                                            </nav>
                                            <!--end nav-->
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->
                                </div>
                                <!--end card-body-->
                            </div>
                            <!--end card-->
                        </div> <!-- end col -->
                    </div>

                <?php

                } else echo 'No data found';
                ?>
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
    </div>
    <script src="../assets/js/app.js"></script>
    <script src="/assets/js/jquery.min.js"> </script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
            
    <script>
        $(".send").click(function() {
            var id = $(this).data("id");
            //console.log(id);
            var message = $('#message' + id).val();
            var sid = $('#sid' +id ).val();

            console.log(message);
            console.log(sid);
            //return;
            $.ajax({
                type: "POST",
                url: "job-response-helper.php",
                data: {
                    sid: sid,
                    message: message,
                },
                beforeSend: function() {
                    console.log("send");
                },
                success: function(data) {
                    console.log(data);
                    console.log("message sent");
                    if (data.trim() == '1') {
                        Swal.fire('Sent Successfully!', '', 'success');
                    } else {
                        Swal.fire("Can't Sent", '', 'error');
                    }

                },
                error: function(data) {
                    console.log("error");
                }
            })
            //console.log(message);

        })
    </script>

</body>

</html>