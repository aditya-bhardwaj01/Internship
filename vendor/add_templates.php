<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Site - Name</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <?php include "../config/common_styles.php" ?>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.6.0/bootstrap-tagsinput.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/plugins/farbtastic/farbtastic/farbtastic.css" type="text/css" />
    <link href="../assets/plugins/select/selectr.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/plugins/huebee/huebee.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/plugins/datepicker/datepicker.min.css" rel="stylesheet" type="text/css" />

    <style type="text/css">
        .bootstrap-tagsinput {
            width: 100%;
            color: red;
        }

        .bootstrap-tagsinput .tag {
            color: black;
            background-color: gainsboro;
            padding: 4px;
            border-radius: 5px;
        }

        #formLoader {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            justify-content: center;
            align-items: center;
            width: 100%;
            background: rgba(0, 0, 0, 0.75) no-repeat center center;
            z-index: 10000;
        }
    </style>
</head>

<body id="body" class="dark-sidebar">
    <div class="container p-4">
        <div class="row">
            <div class="col-md-12">
                <form action="templates_helper.php" method="POST" enctype="multipart/form-data">
                    <div class="card">
                        <div class="card-header">
                            <h4>Template</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4>Template Details</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="row mb-4">
                                                <div class="col-md-6">
                                                    <label for="">
                                                        <h6>Select Marketplace</h6>
                                                    </label>
                                                    <select name="marketplace" id="give-marketplace" class="form-select" onchange="marketplace(this.value)">
                                                        <option value="0" selected="selected">Select Marketplace</option>
                                                        <option value="1">Marketplace Jobs</option>
                                                        <option value="2">Marketplace talent</option>
                                                        <option value="11">Marketplaces colleges</option>
                                                        <option value="5">Marketplace Products</option>
                                                        <option value="6">Marketplace Products- b2b</option>
                                                        <option value="7">Marketplace Products-Bulk</option>
                                                        <option value="16">Marketplace Services</option>
                                                        <option value="12">Marketplace Properties</option>
                                                        <option value="15">Marketplace Events</option>
                                                        <option value="17">Marketplace Charity</option>
                                                        <option value="18">Marketplace Investments</option>
                                                        <option value="19">Marketplace Gigs</option>
                                                        <option value="4">Marketplace Hotels</option>
                                                        <option value="8">Marketplace restaurants</option>
                                                        <option value="9">Marketplace Logistics</option>
                                                        <option value="10">Marketplace products placements</option>
                                                        <option value="3">Marketplace_destinations</option>
                                                        <option value="13">Marketplace _business opp</option>
                                                        <option value="20">Maretplace_packaging</option>
                                                        <option value="21">Marketplace_media/post</option>
                                                        <option value="22">Marketplace_marketing</option>
                                                        <option value="23">Marketplace Professionals</option>
                                                        <option value="24">Marketplace yoga</option>
                                                        <option value="25">Marketplace initiatives</option>
                                                    </select>
                                                </div>

                                                <div class="col-md-6">
                                                    <label for="give-title">
                                                        <h6> Title</h6>
                                                    </label>
                                                    <input type="text" name="title" id="give-title" placeholder="Title" class="form-control">
                                                </div>
                                            </div>

                                            <div class="row mb-4">

                                                <div class="col-md-6">
                                                    <label for="give-price">
                                                        <h6> Price</h6>
                                                    </label>
                                                    <input type="text" name="price" id="give-price" placeholder="Price" class="form-control">
                                                </div>

                                            </div>

                                            <div class="row mb-3">
                                                <h6>
                                                    Modules
                                                </h6>
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <input type="checkbox" name="admin" id="m1" class="col-sm-3" check-status="unchecked" onchange="mudules(1, 'm1')">Admin
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <input type="checkbox" name="vendor" id="m2" class="col-sm-3" check-status="unchecked" onchange="mudules(2, 'm2')">Vendor
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <input type="checkbox" name="user" id="m3" class="col-sm-3" check-status="unchecked" onchange="mudules(3, 'm3')">User
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <input type="checkbox" name="guest" id="m4" class="col-sm-3" check-status="unchecked" onchange="mudules(4, 'm4')">Guest
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="row mb-4">
                                                <div class="col-md-12">
                                                    <label for="give-tags">
                                                        <h6> Tags</h6>
                                                    </label>
                                                    <input type="text" class="form-control" placeholder="Tags" name="tags" id="give-tags">
                                                </div>
                                            </div>


                                            <div class="row mb-4">
                                                <div class="col-md-12">
                                                    <label for="give-description">
                                                        <h6> Description</h6>
                                                    </label>
                                                    <textarea name="description" class="form-control" id="give-description" cols="30" rows="10" placeholder="Description"></textarea>
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <div class="col-md-12">
                                                    <label for="give-features">
                                                        <h6> Features</h6>
                                                    </label>
                                                    <textarea name="features" class="form-control" id="give-features" cols="30" rows="10" placeholder="Features"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4>
                                                Images
                                            </h4>
                                        </div>
                                        <div class="card-body">

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label for="imgInp">
                                                        <h5>Main Image</h5>
                                                    </label>
                                                    <div class="card-body">
                                                        <input accept="image/*" class="validateImage" name="main_image" type='file' id="imgInp" style="display:none;" onchange="previewImage(this)" data-previewon="#img1">
                                                        <img id="img1" src="https://i.pinimg.com/originals/51/11/d8/5111d818140cbaef5459ce331151463f.gif" alt="your image" height="170" width="300" onclick="document.getElementById('imgInp').click()">
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mt-4">
                                                    <label for="">
                                                        <h5>Screenshots</h5>
                                                    </label>
                                                    <div class="row">
                                                        <div class="col-md-2">
                                                            <input accept="image/*" class="validateImage" name="srnsht1" type='file' 
                                                            id="srnsht1" style="display:none;" onchange="previewImage(this)" data-previewon="#s1">
                                                            <img id="s1" src="../assets/images/upload_image.png" alt="screenshots" class="w-100" 
                                                            onclick="document.getElementById('srnsht1').click()">
                                                        </div>

                                                        <div class="col-md-2">
                                                            <input accept="image/*" class="validateImage" name="srnsht2" type='file' 
                                                            id="srnsht2" style="display:none;" onchange="previewImage(this)" data-previewon="#s2">
                                                            <img id="s2" src="../assets/images/upload_image.png" alt="screenshots" class="w-100" 
                                                            onclick="document.getElementById('srnsht2').click()">
                                                        </div>

                                                        <div class="col-md-2">
                                                            <input accept="image/*" class="validateImage" name="srnsht3" type='file' 
                                                            id="srnsht3" style="display:none;" onchange="previewImage(this)" data-previewon="#s3">
                                                            <img id="s3" src="../assets/images/upload_image.png" alt="screenshots" class="w-100" 
                                                            onclick="document.getElementById('srnsht3').click()">
                                                        </div>

                                                        <div class="col-md-2">
                                                            <input accept="image/*" class="validateImage" name="srnsht4" type='file' 
                                                            id="srnsht4" style="display:none;" onchange="previewImage(this)" data-previewon="#s4">
                                                            <img id="s4" src="../assets/images/upload_image.png" alt="screenshots" class="w-100" 
                                                            onclick="document.getElementById('srnsht4').click()">
                                                        </div>

                                                        <div class="col-md-2">
                                                            <input accept="image/*" class="validateImage" name="srnsht5" type='file' 
                                                            id="srnsht5" style="display:none;" onchange="previewImage(this)" data-previewon="#s5">
                                                            <img id="s5" src="../assets/images/upload_image.png" alt="screenshots" class="w-100" 
                                                            onclick="document.getElementById('srnsht5').click()">
                                                        </div>

                                                        <div class="col-md-2">
                                                            <input accept="image/*" class="validateImage" name="srnsht6" type='file' 
                                                            id="srnsht6" style="display:none;" onchange="previewImage(this)" data-previewon="#s6">
                                                            <img id="s6" src="../assets/images/upload_image.png" alt="screenshots" class="w-100" 
                                                            onclick="document.getElementById('srnsht6').click()">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mt-4">
                                                    <div class="row">
                                                        <div class="col-md-2">
                                                            <input accept="image/*" class="validateImage" name="srnsht7" type='file' 
                                                            id="srnsht7" style="display:none;" onchange="previewImage(this)" data-previewon="#s7">
                                                            <img id="s7" src="../assets/images/upload_image.png" alt="screenshots" class="w-100" 
                                                            onclick="document.getElementById('srnsht7').click()">
                                                        </div>
                                                        <div class="col-md-2">
                                                            <input accept="image/*" class="validateImage" name="srnsht8" type='file' 
                                                            id="srnsht8" style="display:none;" onchange="previewImage(this)" data-previewon="#s8">
                                                            <img id="s8" src="../assets/images/upload_image.png" alt="screenshots" class="w-100" 
                                                            onclick="document.getElementById('srnsht8').click()">
                                                        </div>
                                                        <div class="col-md-2">
                                                            <input accept="image/*" class="validateImage" name="srnsht9" type='file' 
                                                            id="srnsht9" style="display:none;" onchange="previewImage(this)" data-previewon="#s9">
                                                            <img id="s9" src="../assets/images/upload_image.png" alt="screenshots" class="w-100" 
                                                            onclick="document.getElementById('srnsht9').click()">
                                                        </div>
                                                        <div class="col-md-2">
                                                            <input accept="image/*" class="validateImage" name="srnsht10" type='file' 
                                                            id="srnsht10" style="display:none;" onchange="previewImage(this)" data-previewon="#s10">
                                                            <img id="s10" src="../assets/images/upload_image.png" alt="screenshots" class="w-100" 
                                                            onclick="document.getElementById('srnsht10').click()">
                                                        </div>
                                                        <div class="col-md-2">
                                                            <input accept="image/*" class="validateImage" name="srnsht11" type='file' 
                                                            id="srnsht11" style="display:none;" onchange="previewImage(this)" data-previewon="#s11">
                                                            <img id="s11" src="../assets/images/upload_image.png" alt="screenshots" class="w-100" 
                                                            onclick="document.getElementById('srnsht11').click()">
                                                        </div>
                                                        <div class="col-md-2">
                                                            <input accept="image/*" class="validateImage" name="srnsht12" type='file' 
                                                            id="srnsht12" style="display:none;" onchange="previewImage(this)" data-previewon="#s12">
                                                            <img id="s12" src="../assets/images/upload_image.png" alt="screenshots" class="w-100" 
                                                            onclick="document.getElementById('srnsht12').click()">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mt-5">
                                                <label for="">
                                                    <h5>Template ZIP</h5>
                                                </label>
                                                <input type="file" name="" class="" id="zipfile" accept=".zip" style="display: none;">
                                                <div class="text-center" onclick="document.getElementById('zipfile').click()">
                                                    <i class="lar la-file-alt text-primary" style="font-size: 5rem;"></i>
                                                    <h6 class="text-truncate">Template Zip</h6>
                                                    <small class="text-muted" id="">
                                                        Size: 5mb<br>
                                                        Name: abc.zip
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-primary text-white" style="float: right; margin-right: 5rem;" name="submit" type="submit" value="submit">
                                Upload Template
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php include "../config/common_scripts.php" ?>
    <script src="../assets/plugins/select/selectr.min.js"></script>
    <script src="../assets/plugins/huebee/huebee.pkgd.min.js"></script>
    <script src="../assets/plugins/datepicker/datepicker-full.min.js"></script>
    <script src="../assets/plugins/moment/moment.js"></script>
    <script src="../assets/plugins/imask/imask.js"></script>
    <script src="../assets/pages/forms-advanced.js"></script>
    <script src="../assets/plugins/summernote/summernote.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.js"></script>
    <script type="text/javascript" src="../assets/plugins/farbtastic/farbtastic/farbtastic.js"></script>

    <script>
        var marketplaceId, title, price, tags, description, features, image;
        var moduleId = new Set();

        function marketplace(val) {
            marketplaceId = val;
        }

        function mudules(id, m) {
            //<input type="checkbox" name="admin" id="m1" class="col-sm-3"
            //                                      check-status="unchecked" onchange="mudules(1, 'm1')">Admin
            var checkStatus = $('#' + m).attr('check-status');
            if (checkStatus == 'unchecked') {
                moduleId.add(id);
                $('#' + m).attr('check-status', 'checked')
            } else if (checkStatus == 'checked') {
                moduleId.delete(id);
                $('#' + m).attr('check-status', 'unchecked')
            }
        }

        function previewImage(th) {
            // console.log("call") ;
            var targetID = $(th).data("previewon");

            var fileExtension = ['png', 'jpeg', 'jpg', 'gif'];
            if ($.inArray($(th).val().split('.').pop().toLowerCase(), fileExtension) == -1) {
                Swal.fire({
                    icon: 'error',
                    title: 'Only .jpeg, .png, .jpg, and .gif formats are allowed.',
                    showConfirmButton: true
                })
                th.value = '';
            } else {
                var imgsrc = URL.createObjectURL(event.target.files[0]);
                $(targetID).attr('src', imgsrc);
            }
        }

        var submit = document.getElementById("submitData");

        submit.addEventListener('click', function() {
            title = document.getElementById("give-title").value;
            price = document.getElementById("give-price").value;
            tags = document.getElementById("give-tags").value;
            description = document.getElementById("give-description").value;
            features = document.getElementById("give-features").value;
            image = $("#give-image").attr("src");
            console.log(image);

            if (marketplace && title != '' && price != '' && tags != '' && description != '' && features != '' && image != '') {

            }
        })
    </script>

</body>
<!--end body-->


</html>